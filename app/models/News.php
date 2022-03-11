<!-- Denne model bruges til nyheds artikler -->

<?php
  class News {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Henter nyhder fra vores database tabel newsportal
    public function getNews(){
        $this->db->query('SELECT *,
                          newsportal.id as newsID,
                          users.id as userId
                          From newsportal
                          INNER JOIN users
                          on newsportal.user_id = users.id
                          ORDER BY newsportal.created_at ASC 
                          ');
        $results = $this->db->resultSet();
        return $results;
      }
      

      public function addNews($data) {
        $this->db->query('INSERT INTO newsportal (title, user_id, body) VALUES(:title, :user_id, :body)');
        // Bind values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':body', $data['body']);
  
        // Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }

  }