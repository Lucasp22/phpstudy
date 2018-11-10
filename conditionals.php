<?php
  #Conditionals
  /*
  - ==
  - ===
  - <
  - >
  - <=
  - >=
  - !=
  - =!
  */

  //
  // $num = 5;
  //
  // if($num == 5){
  //   echo '5 passed';
  //   elseif ($num == 6) {
  //     echo '6 passed';
  //   }
  // } else {
  //   echo 'did not passed';
  // }

  #Nesting if

  // $num = 6;
  // if ($num >5) {
  //   if($num <10){
  //     echo "num passed";
  //   }
  // }

  # Logical Operators

   // and &&
   // or ||
   // xor

    // if ($num > 4 or $num <10) {
    //   echo "$num passed";
    // }

    #Switch

    $favColor = 'blue';

    switch ($favColor) {
      case 'red':
        echo 'your color is red';
        break;
        case 'blue':
          echo 'your color is blue';
          break;
          case 'black':
            echo 'your color is black';
            break;
            case 'marrom':
              echo 'your color is marrom';
              break;
              default:
              echo 'Your favorite color is something else';
    }



 ?>
