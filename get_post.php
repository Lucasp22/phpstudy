<?php
  /*
  if(isset($_GET['name'])){
    print_r($_GET);
    $name = echo htmlentities($_GET['name']);
    echo $name;
  }

  if(isset($_POST['name'])){
    $name = htmlentities($_POST['name']);
    echo $name;
  }

  if(isset($_REQUEST['name'])){
    print_r($_REQUEST);
    $name = htmlentities($_REQUEST['name']);
    echo $name;
  }
  */

  echo $_SERVER['QUERY_STRING'];


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Website</title>
  </head>
  <body>

  <form method="GET" action="get_post.php">
      <div>
        <label>Name</label>
        <input type="text" name="name" >
      </div>

      <div>
        <label>Email</label>
        <input type="text" name="email" >
      </div>

      <input type="submit"  value="Submit">
  </form>


  </body>
</html>
