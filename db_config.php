<?php 

$conn = mysqli_connect("localhost", "root", "", "creud");

if(!$conn){
die("connexion echouee..." . mysqli_connect_error());
}