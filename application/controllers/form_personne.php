<?php

class Form_personne extends CI_Controller {

  /** Réponse à /basic_form */
  function index() {
    // Si GET
    if ($this->input->server('REQUEST_METHOD') == "GET") {
      // Inclure les outils pour formulaire et url
      // Utiles dans la vue
      $this->load->helper(array('form', 'url'));
      // Inclure les outils de validation de formulaire
      $this->load->library('form_validation');
      // Afficher la vue
      $this->load->view('form_personne_v');
    }
    else {
      $this->do_post();
    }
  }

  /** Traitement quand paramètres reçus */
  function do_post() {
    // Charge les outils pour les formulaires
    $this->load->helper('form');
    $this->load->library('form_validation');
    // Etablit les règles
    $this->form_validation->set_rules('nom', 'Nom', 'required|regex_match[]');
    $this->form_validation->set_rules('departement', 'Departement', 'required|integer');
    // Modifie la forme des messages d'erreur
    $this->form_validation->set_error_delimiters('<span class="error">',
            '</span>');
    if (!$this->form_validation->run()) {
      // Il y a des erreurs => réafficher le formulaire
      $this->load->view('form_personne_v');
    } else {
      // Pas d'erreurs => suite du traitement
      $data['msg'] = "Choix enregistré";
      $this->load->view('form_personne_v', $data);
    }
  }
}