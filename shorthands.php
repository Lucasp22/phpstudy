<?php

  $loogedIn = false;
  $arr = [1,2,3,4];
  /*
  if ($loogedIn) {
    echo 'You are logged in';
  } else {
    echo 'You are NOT logged in';
  }
  */
  #shor version
  /*
  echo ($loogedIn) ? 'You are logged in' : 'You are NOT logged in';

  $isRegistered = ($loogedIn == true) ? true : false;
  echo $isRegistered;


  $age = 8;
  $score = 15;

  echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average': 'Exceptional'):($age > 10 ? 'horrible':'Average'));
  */
  ?>



  <div>
    <?php if($loogedIn) { ?>
      <h1>Welcome User</h1>
    <?php } else { ?>
      <h1>Loging Please</h1>
    <?php } ?>
  </div>


    <div>
      <?php if($loogedIn): ?>
        <h1>Welcome User</h1>
      <?php endif; ?>
    </div>


    <div>
      <?php foreach($arr as $val): ?>
          <?php echo $val; ?>
      <?php endforeach; ?>
    </div>

    <div>
      <?php for ($i=0; $i < 10; $i++): ?>
        <li><?php echo $i ?></li>
      <?php endfor; ?>
    </div>
