<?php

include "./db_config.php";

$id = $_GET['id'];
$sql = "DELETE FROM `employer` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if($result){
  header("Location: index.php?msg=Enregistrerment effacees");
} else {
  echo "Echec: " . mysqli_error($conn);
}