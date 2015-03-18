<?php

class Person extends CI_Controller {
  public function get($id) {
    // Charge le modèle (a ne faire qu'une fois par fichier)
    $this->load->model("person_model");
    // Appelle une méthode du modèle
    $data = $this->person_model->get($id);
    // Charge la vue
    $this->load->view("person_v", $data);
  }
}