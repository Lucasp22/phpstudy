<?php

    class User {
      public $name;
      public $age;
      public static $minPassLength = 6;

      public static function validatePass($pass){
        if(strlen($pass) >= self::$minPassLength){
          return true;

        }else {
          return false;
        }
      }
    }

    $password = 'lucas';
    if(User::validatePass($password)){
      echo 'Password Valid';
    }else {
      echo 'Password not Valid';
    }
