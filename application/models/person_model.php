<?php

class Person_model extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  /** Personne de id $idPerson, sous forme d'un tableau associatif */
  public function get($idPerson) {
    $query = $this->db->query("SELECT id_personne, nom
            FROM personne
            WHERE id_personne = $idPerson");
    return $query->row_array();
  }
}
