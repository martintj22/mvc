<?php 
class Upload extends Controller {

  public function __construct() {
//   if(!isLoggedIn()){
//         redirect('users/login');
//       }
    $this->newsModel = $this->model('News');
    $this->userModel = $this->model('User');

  }
  
    public function index(){
       // Henter nyheder fra databese - kalder function i models/news.php
      $news = $this->newsModel->getNews();
        $data = [
          'news' => $news,
          'title' => 'Spacepower',
          'description' => 'A true site for rockets'
        ];
       
        $this->view('upload/index', $data);
      }




}