<?php
class People extends Controller {
  // Properties, field
  private $peopleModel;

  // Dit is de constructor
  public function __construct() {
    $this->peopleModel = $this->model('People');
  }

  public function index() {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $people = $this->peopleModel->getPeople();

    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($people as $value){
      $rows .= "<tr>
                  <td>$value->Id</td>
                  <td>$value->MyName</td>
                  <td>$value->Networth</td>
                  <td>$value->Age</td>
                  <td>$value->Company</td>
                  <td>" . number_format($value->population, 0, ',', '.') . "</td>
                  <td><a href='" . URLROOT . "/people/update/$value->Id'>update</a></td>
                  <td><a href='" . URLROOT . "/people/delete/$value->Id'>delete</a></td>
                </tr>";
    }


    $data = [
      'title' => '<h1>Landenoverzicht</h1>',
      'people' => $rows
    ];
    $this->view('people/index', $data);
  }

  public function delete($id) {
    $this->peopleModel->deletePeople($id);

    $data =[
      'deleteStatus' => "Het record met id = $id is verwijdert"
    ];
    $this->view("people/delete", $data);
    header("Refresh:3; url=" . URLROOT . "/people/index");
  }
}

?>