<?php


    #Substr()
    #Returns a portion of string

    // // $output = substr('Hello', 1, 3);//1 start 3 end
    // $output = substr('Hello', -2);
    // echo $output;

    #strlen()
    #Returns the length of a string
    // $output = strlen('Hello Lucas :-)');
    // echo $output;

    #strpos()
    #Finds the position of the first occurence of a sub string
    // $output = strpos('Hello Lucas :-)', 'L');
    // echo $output;

    #strrpos()
    #Finds the position of the last occurence of a sub string
    // $output = strrpos('Hello Lucas :-)L', 'L');
    // echo $output;

    #trim()
    #Strips whitespace
    // $text = 'Lucas :-)         ';
    // // var_dump($text);
    // $trimmed = trim($text);
    // var_dump($trimmed);

    #strtoupper
    # Makes everythinh uppercase
    // $output = strtoupper('hello lucas');
    // echo $output;

    #strtlower
    # Makes everythinh lowercase
    // $output = strtolower('HELLO LUCAS');
    // echo $output;

    #ucwords()
    #Capitalise every word
    // $output = ucwords('hello lucas');
    // echo $output;

    #str_replace()
    #Replace all occurence of a search string with a replacement

    // $text = 'Hello World';
    // $output = str_replace('World', 'Everyone', $text);
    // echo $output

    #is_string()
    #Check if string
    /*
    $val = 'Hello';
    $output = is_string($val);

    echo $output;

    $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

    foreach($values as $value){
      if(is_string($value)){
        echo "{$value} is a string<br>";
      }

    }
    */

    #gzcompress()
    #Compress a string

    $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

    $compressed = gzcompress($string);
    // echo $compressed;

    $original = gzuncompress($compressed);
    echo $original;
