<?php
  /*
   * Base Controller
   * Henter models & views
   */
  class Controller {
    // Load model
    public function model($model){
      // Indlæser model fil
      require_once '../app/models/' . $model . '.php';

      // instantiere model
      return new $model();
    }

    // Indlæser view
    public function view($view, $data = []){
      // Tjekker om vores view fil ekistere
      if(file_exists('../app/views/' . $view . '.php')){
        require_once '../app/views/' . $view . '.php';
      } else {
        // View eksitere ikke 
        die('View does not exist');
      }
    }
  }