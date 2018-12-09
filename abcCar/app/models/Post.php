<?php

class Post {
  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function getPosts(){
    $this->db->query('SELECT *,
                      posts.id as postId,
                      users.id as userId,
                      posts.created_at as postCreated,
                      users.created_at as userCreated
                      FROM posts
                      INNER JOIN users
                      ON posts.user_id = users.id
                      ORDER BY posts.created_at DESC
                      ');

    $results = $this->db->resultSet();

    return $results;
  }

  public function addPost($data){
    $this->db->query('INSERT INTO posts (model, price, miliage, engine, brand, body, year, user_id) VALUES(:model, :price, :miliage, :engine, :brand, :body, :year, :user_id)');
    // Bind values
    $this->db->bind(':model', $data['model']);
    $this->db->bind(':price', $data['price']);
    $this->db->bind(':mileage', $data['mileage']);
    $this->db->bind(':engine', $data['engine']);
    $this->db->bind(':manufacturer', $data['manufacturer']);
    $this->db->bind(':year', $data['year']);
    $this->db->bind(':body', $data['body']);
    $this->db->bind(':user_id', $data['user_id']);

    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }
}
