<?php

      class Posts extends Controller {

        public function __construct(){
          if(!isLoggedIn()){
            redirect('users/login');
          }

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
          if($_SERVER['REQUEST_METHOD'] == 'POST'){

            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
              'model' => trim($_POST['model']),
              'price' => trim($_POST['price']),
              'mileage' => trim($_POST['mileage']),
              'engine' => trim($_POST['engine']),
              'brand' => trim($_POST['brand']),
              'body' => trim($_POST['body']),
              'year' => trim($_POST['year']),
              'user_id' => $_SESSION['user_id'],
              'model_err' => '',
              'price_err' => '',
              'mileage_err' => '',
              'engine_err' => '',
              'brand_err' => '',
              'year_err' => '',
              'body_err' => ''
            ];

            // Validate data
            if(empty($data['model'])){
              $data['model_err'] = 'Please enter model';
            }
            if(empty($data['price'])){
              $data['price_err'] = 'Please enter the price';
            }
            if(empty($data['mileage'])){
              $data['mileage_err'] = 'Please enter the mileage';
            }
            if(empty($data['engine'])){
              $data['engine_err'] = 'Please enter the engine capacity';
            }
            if(empty($data['brand'])){
              $data['brand_err'] = 'Please enter the car brand';
            }
            if(empty($data['body'])){
              $data['body_err'] = 'Please enter body text';
            }
            if(empty($data['year'])){
              $data['year_err'] = 'Please enter the car year';
            }

            //Make sure no errors
            if(empty($data['model_err']) && empty($data['body_err']) && empty($data['price_err']) && empty($data['mileage_err']) && empty($data['engine_err']) && empty($data['brand_err']) && empty($data['year_err'])){
              // Validated
              if($this->postModel->addPost($data)){
                flash('post_message', 'Post Added');
                redirect('posts');
              } else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
              $this->view('posts/add', $data);
            }

          } else {

            $data = [
              'model' => '',
              'price' => '',
              'mileage' => '',
              'engine' => '',
              'brand' => '',
              'year' => '',
              'body' => ''
            ];
            $this->view('posts/add', $data);
          }
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
