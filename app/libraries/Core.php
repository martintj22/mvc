<?php
  /*
   * App Core Class
   * Opretter URL & indlæser core controller
   * URL FORMAT - /controller/method/params
   */
  class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
      //print_r($this->getUrl()); 

      $url = $this->getUrl();

      // Tjekker controller for første værdi
      if(file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
        // Eksistere filen skal controlleren bruges 
        $this->currentController = ucwords($url[0]);
        // Unset 0 Index
        unset($url[0]);
      }

      // Indlæser controller 
      require_once '../app/controllers/'. $this->currentController . '.php';

      // instansere controller class
      $this->currentController = new $this->currentController;

      // tjkker den sidste del af url
      if(isset($url[1])){
        // Tjekker om metoden eksitere i controlleren 
        if(method_exists($this->currentController, $url[1])){
          $this->currentMethod = $url[1];
          // Unset 1 index
          unset($url[1]);
        }
      }

      // Henter parameter
      $this->params = $url ? array_values($url) : [];

      // Laver et callback med et array af parameter
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl(){
      if(isset($_GET['url'])){
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
      }
    }
  } 
  
  