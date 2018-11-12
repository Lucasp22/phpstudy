<?php

  class User {
    public $name;
    public $age;

    // Runs when an obj is created
    public function __construct($name, $age){
      // echo 'constructor ran...';
      echo 'Class' . __CLASS__ . ' instantiated<br>';
      $this->name = $name;
      $this->age = $age;

    }

    public function sayHello(){
      return $this->name . ' Says Hello';
    }
    // Called when no other references to a certain object
    // Used for cleanup, closing conections, etc
    public function __destruct(){
      echo '<br>';
      echo 'destructor ran....';
      echo '<br>';

    }

  }

  $user1 = new User('Lucas', 33);
  $user2 = new User('Tiago', 28);


  // $user2 = new User();

  echo $user1->name . ' is ' . $user1->age . ' years old';
  echo '<br>';
  echo $user1->sayHello();

  echo '<br>';

  echo $user2->name . ' is ' . $user2->age . ' years old';
  echo '<br>';
  echo $user2->sayHello();
