<?php

  # LOOPS
  /*
    - For
    - While
    - Do..While
    - Foreach
  */

      #For Loop
        // @params - init, condition, inc

        // for ($i=0; $i <= 10 ; $i++) {
        //   echo 'Number' .$i;
        //   echo '<br>';
        // }


      #While Loop
      #params - condition

      // $i = 0;
      //
      // while ($i < 10) {
      //   echo $i;
      //   echo '<br>';
      //   $i++;
      // }

      # Do..While
     # @params - condition

     // $i = 0;
     //
     // do{
     //   echo $i;
     //   echo '<br>';
     //   $i++;
     // }
     // while($i < 10);

     #Foreach Loop - Arrays
     // $people = array('Brad', 'Jose', 'William');
     //
     // foreach ($people as $person) {
     //   echo $person;
     //   echo '<br>';
     // }

    #
     $people = array('Brad' => 'brag@g.com', 'Jose' => 'jose@g.com', 'William' => 'willian@g.com');

     foreach ($people as $person => $email) {
       echo $person.': '.$email;
       echo '<br>';
     }



 ?>
