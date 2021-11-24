
<?php
  
  $name = $_POST["username"];
  $password = $_POST["password"];

  $file = fopen('password.txt', 'r');
  while($line = fgets($file)){
      $arr = explode("*", $line);
      if ($name == $arr[0] && $password == $arr[1] && trim($arr[2]) == "dog"){
          echo '<img src="https://www.petfirst.com/wp-content/uploads/2021/02/shutterstock_37260766.jpg">';
      }
      elseif($name == $arr[0] && $password == $arr[1] && trim($arr[2]) == "cat"){
          echo '<img src="https://d2zp5xs5cp8zlg.cloudfront.net/image-31454-800.jpg">';      
      }

      $date_time = date('Y-m-d;H:i');
          fclose($file);
          $file1 = fopen('log.csv', 'a+') or die('Cannot write to file');
          if($name == $arr[0]){
          fwrite($file1, $name.';'.$date_time."\n");
          fclose($file1);
        }
          break;
  } 
?>
