<?php
  class People {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getUsers() {
      $this->db->query("SELECT * FROM `people`;");

      $result = $this->db->resultSet();

      return $result;
    }
  }

?>