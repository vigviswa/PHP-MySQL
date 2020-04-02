<?php
session_start();
$url = $_SERVER['REQUEST_URI'];
$id = substr($url, 7);
$conn = mysqli_connect("localhost", "root", "root", "PW7");
if(!$conn){

		// echo "Database connection failed!";
  }
  else{
    // echo "Connected Successfully!";
    if(is_numeric($id) && strlen($id) == 10 ){
    $sql = "SELECT * FROM Books WHERE ISBN = $id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==0){$sql = "SELECT * FROM Books";}
    }
    else{
      $sql = "SELECT * FROM Books";
    }
    $result = mysqli_query($conn, $sql);
    $json_array = array();
    while(($row = mysqli_fetch_object($result))){
      $json_array[] = $row;
}

  $final = json_encode($json_array);
  if(is_null($final)){
    echo "NULL";
  }
  echo($final);
}
  session_destroy();
?>
