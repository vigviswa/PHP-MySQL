<?php
session_start();
$conn = mysqli_connect("localhost", "root", "root", "PW7");
if(!$conn){

		// echo "Database connection failed!";
  }
  else{
    // echo "Connected Successfully!";
    $sql = "SELECT * FROM Books";

    $result = mysqli_query($conn, $sql);
    $json_array = array();
    while(($row = mysqli_fetch_object($result))){
      $json_array[] = $row;
}

  $final = json_encode($json_array);
  
  echo($final);
}
  session_destroy();
?>
