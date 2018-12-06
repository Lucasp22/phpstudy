<?php

      class Posts extends Controller {

        public function __construct(){

          $this->postModel = $this->model('Post');
        }


       public function index(){
         // Get Post

         $posts = $this->postModel->getPosts();

          $data = [
            'posts' => $posts
          ];

          $this->view('posts/index', $data);
        }

        public function add(){
          $data = [
            'model' => '',
            'price' => '',
            'mileage' => '',
            'engine_capacity' => '',
            'manufacturer' => '',
            'year' => '',
            'body' => ''
          ];
          $this->view('posts/add', $data);
        }
      }

      /*
      FX that check if user is log in

       public function __construct(){
        if(!isLoggedIn()){
        rediret('user/login');
        }
      }
       */
