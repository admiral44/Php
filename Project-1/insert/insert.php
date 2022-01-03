<?php

include("../conn/conn.php");


$sql = "INSERT INTO `Personal_info`(`p_name`, `p_no`, `p_email`) VALUES ('vaishanvi','9049789306','vaishnavi@gmail.com')";

if ($conn->query($sql) === TRUE) {
  echo "<br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>