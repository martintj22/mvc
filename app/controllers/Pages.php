<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Spacepower',
        'description' => 'A true site for rockets'
      ];
     
      $this->view('spaceships/index', $data);
    }

    public function upload(){
      $data = [
        'title' => 'Spacepower',
        'description' => 'A true site for rockets'
      ];
     
      $this->view('upload/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to learn about spaceships'
      ];

      $this->view('pages/about', $data);
    }
  }