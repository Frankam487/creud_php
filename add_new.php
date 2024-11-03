<?php
include "./db_config.php";
if(isset($_POST['submit'])){
  $fistName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  
}
  $sql = "INSERT INTO `employer`(`id`, `first_name`, `last_name`, `email`, `gender`)VALUES(NULL, '$fistName', '$lastName', '$email', '$gender')";
$result = mysqli_query($conn, $sql);
if ($result) {
  header("Location: index.php?msg=New record created successfully ");

} else {
  echo "failed: " . mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" 
  content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
  <title>add task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!- font awsome->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" >
  php complete CREUD Application
</nav>
<div class="container">
  <div class="content">
    <h3>Add New Userr</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
  </div>
  <div class="content2">
    <form action="" method="post">
      <div class="row">
        <div class="col">
          <label for="">First Name:</label>
          <input type="text" name="first_name">
        </div>
        <div class="col">
          <label for="">Last Name:</label>
          <input type="text" name="last_name">
        </div>
      </div>

      <div class="result">
          <label for="">Email:</label>
          <input type="email" name="email" >
      </div>
      <div class="form-group"> 
        <label for="">Gender:</label> &nbsp;
        <input type="radio" name="gender" id="male" value="male">
         <label for="male">Male</label>
         &nbsp;
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>
      </div>

      <div class="btn">
        <button type="submit" name="submit">Save</button>
        <a href="index.php">Cancel</a>
      </div>
    </form>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>