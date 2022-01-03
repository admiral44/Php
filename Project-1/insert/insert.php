<?php

include("../conn/conn.php");

$p_name = $_REQUEST[""];
$p_no = $_REQUEST[""];
$p_email = $_REQUEST[""];

$sql = "INSERT INTO `Personal_info`(`p_name`, `p_no`, `p_email`) VALUES ('','','')";

if ($conn->query($sql) === TRUE) {
  echo "<br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>