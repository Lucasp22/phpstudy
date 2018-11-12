<?php

// echo 'test';

// Define a Class
class user {
  // Properties(attributes)

    public $name = 'Lucas';

  // Methods

  public function sayHello(){
    return $this->name .'Says Hello';
  }
}

// Instatiate a user object from the user class

  $user1 = new User();
  echo $user1->name;

  echo '<br>';

  echo $user1->sayHello();
