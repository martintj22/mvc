<?php
  class Post {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Henter fra database spaceships tabel
    public function getSpaceships(){
      $this->db->query('SELECT *,
                        spaceships.id as RocketID,
                        users.id as userId,
                        spaceships.created_at as postCreated,
                        users.created_at as userCreated
                        FROM spaceships
                        INNER JOIN users
                        ON spaceships.user_id = users.id
                        ORDER BY spaceships.id ASC
                        ');

      $results = $this->db->resultSet();

      return $results;
    }


    // Henter fra databasase ældest post først
    public function getSpaceshipsOldest(){
      $this->db->query('SELECT *,
                        spaceships.id as RocketID,
                        users.id as userId,
                        spaceships.created_at as postCreated,
                        users.created_at as userCreated
                        FROM spaceships
                        INNER JOIN users
                        ON spaceships.user_id = users.id
                        ORDER BY spaceships.id DESC
                        ');
      $results = $this->db->resultSet();
      return $results;
    }

    // Henter det enkelte spaceship id
    public function getPostById($id){
      $this->db->query('SELECT * FROM spaceships WHERE id = :id');
      $this->db->bind(':id', $id);
      $row = $this->db->single();
      return $row;
    }
  }