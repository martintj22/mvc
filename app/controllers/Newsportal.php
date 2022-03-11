<?php 
class Newsportal extends Controller {

  public function __construct() {
  if(!isLoggedIn()){
        redirect('users/login');
      }
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
       
        $this->view('newsportal/index', $data);
      }

      

       // Opret nyheder  
      public function add(){


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          // Sanitize POST array
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
          $data = [
            'title' => trim($_POST['title']),
            'body' => trim($_POST['body']),
            'user_id' => $_SESSION['user_id'],
            'title_err' => '',
            'body_err' => ''
          ];

         
  
          // Tjekker efter tomme felter
          if(empty($data['title'])){
            $data['title_err'] = 'Please enter title';
          }
          if(empty($data['body'])){
            $data['body_err'] = 'Please enter body text';
          }
  
          // Make sure no errors
          if(empty($data['title_err']) && empty($data['body_err'])){
            // Validated
            if($this->newsModel->addNews($data)){
              flash('post_message', 'Post Added');
              redirect('newsportal');
            } else {
              die('Something went wrong');
            }
          } else {
            // Load view with errors
            $this->view('newsportal/add', $data);
          }
  
        } else {
          $data = [
            'title' => '',
            'body' => ''
          ];
    
          $this->view('newsportal/add', $data);
        }
      }
  

      // Fil upload

        



}