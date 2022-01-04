<?php

include("../conn/conn.php");


if(!isset($_POST["submit"])) {

  if( ($_REQUEST["p_name"] != "" ) && ($_REQUEST["p_no"] != "" ) 
      && ($_REQUEST["p_email"] != "" ) && ($_REQUEST["comp_name"] != "" ) 
      && ($_REQUEST["pkg_no"] != "" ) && ($_REQUEST["loc"] != "" )) {

    $p_name = $_REQUEST["p_name"];
    $p_no = $_REQUEST["p_no"];
    $p_email = $_REQUEST["p_email"];

    $comp_name = $_REQUEST[""];
    $pkg_no = $_REQUEST[""];
    $loc = $_REQUEST[""];
    // $p_no = $_REQUEST[""]; this is similer column in fisrt block so we dont need to check twise.

    $sql = "INSERT INTO `Personal_info`(`p_name`, `p_no`, `p_email`) VALUES ('$p_name','$p_no','$p_email');";
    $sql .= "INSERT INTO `comp_info`(`comp_name`, `pkg_no`, `loc`, `p_no`) VALUES ('$comp_name','$pkg_no','$loc','$p_no')";

    if ($conn->multi_query($sql) === TRUE) {
      echo "<br>New record created successfully";
      header("Location: ../index.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }else {
    echo "<br>Please enter all information.<br>";
  }
} else {
  echo "<br>Please click on submit.<br>";
}

$conn->close();
?>