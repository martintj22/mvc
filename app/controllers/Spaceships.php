<?php
  class Spaceships extends Controller {
    public function __construct(){

      $this->postModel = $this->model('Post');
    }

    public function index(){
      // Get spaceships
      $spaceships = $this->postModel->getSpaceships();
      $spaceshipsOld = $this->postModel->getSpaceshipsOldest();
      $data = [
        'spaceships' => $spaceships,
        'spaceshipsOld' => $spaceshipsOld
      ];

      $this->view('spaceships/index', $data);
    }

    public function about(){
      // Get spaceships
      $spaceships = $this->postModel->getSpaceships();
      $spaceshipsOld = $this->postModel->getSpaceshipsOldest();
      $data = [
        'spaceships' => $spaceships,
        'spaceshipsOld' => $spaceshipsOld
      ];

      $this->view('pages/about', $data);
    }


    
    public function admin(){
      // Get spaceships
      $spaceships = $this->postModel->getSpaceships();
      $spaceshipsOld = $this->postModel->getSpaceshipsOldest();
      $data = [
        'spaceships' => $spaceships,
        'spaceshipsOld' => $spaceshipsOld
      ];

      $this->view('spaceships/admin', $data);
    }



    public function show($id){
      $spaceships = $this->postModel->getPostById($id);  
      $data = [
        'spaceships' => $spaceships
      ];
  
      $this->view('spaceships/show', $data);
    }

  }



