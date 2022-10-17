<?php
  class People {
    // Properties, fields
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getPeople() {
      $this->db->query("SELECT * FROM `people`;");
      $result = $this->db->resultSet();
      return $result;
    }

    public function getSinglePeople($id) {
      $this->db->query("SELECT * FROM people WHERE Id = :Id");
      $this->db->bind(':Id', $Id, PDO::PARAM_INT);
      return $this->db->single();
    }

    public function getSinglePeopleByName($name) {
      $this->db->query("SELECT * FROM people WHERE name = :name");
      $this->db->bind(':MyName', $MyName, PDO::PARAM_STR);
      return $this->db->single();
    }    

    public function deletePeople($id) {
      $this->db->query("DELETE FROM people WHERE Id = :Id");
      $this->db->bind("Id", $Id, PDO::PARAM_INT);
      return $this->db->execute();
    }
  }

?>