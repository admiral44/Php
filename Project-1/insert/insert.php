<?php

include("../conn/conn.php");


if(!isset($_POST["submit"])) {

  if(($_REQUEST["p_name"] != "" ) && ($_REQUEST["p_no"] != "" ) && ($_REQUEST["p_email"] != "" )) {

    $p_name = $_REQUEST["p_name"];
    $p_no = $_REQUEST["p_no"];
    $p_email = $_REQUEST["p_email"];

    $sql = "INSERT INTO `Personal_info`(`p_name`, `p_no`, `p_email`) VALUES ('$p_name','$p_no','$p_email')";

    if ($conn->query($sql) === TRUE) {
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