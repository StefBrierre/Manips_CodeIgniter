<?php

class Hello_World extends CI_Controller {
    function index() {
        // Récupérer des données du modèle hello_world_m
        $this->load->model("hello_world_m");
        // Appeler une méthode du modèle
        $data = $this->hello_world_m->getData();
        // Passe la main à la vue située dans views
        $this->load->view("hello_world_v", $data);
    }
    
    function to($from){
        echo "Salut à $from";
    }
}

