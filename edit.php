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
echo "ok";
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
</head>
<body>
  
<nav class="navbar navbar-light justify-cintent-center">
  php complete CREUD Application
</nav>
<div class="container">
  <div class="content">
    <h3>Edit Userr</h3>
    <p>click sur edit apres avoir editer ton user</p>
  </div>
  <?php
  $id = $_GET['id'];
  $sql = "SELECT * FROM `employer` WHERE id = $id LIMIT 1";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="content2">
    <form action="" method="post">
      <div class="row">
        <div class="col">  
          <label for="">First Name:</label>
          <input type="text" value="<?php echo $row['first_name']?> " name="first_name">
        </div>
        <div class="col">
          <label for="">Last Name:</label>
          <input type="text" value="<?php echo $row['last_name']?> " name="last_name">
        </div>
      </div>

      <div class="result">
          <label for="">Email:</label>
          <input type="email" value="<?php $row['email'] ?> " name="email" >
      </div>
      <div class="form-group"> 
        <label for="">Gender:</label> &nbsp;
        <input type="radio" name="gender" id="male" <?php echo ($row['gender'] == 'male')? "checked": "";?>>
         <label for="male">Male</label>
         &nbsp;
        <input type="radio" name="gender" value="female" id="female" <?php echo ($row['gender'] == 'female')? "checked": "";?>>
        <label for="female">Female</label>
      </div>

      <div class="btn">
        <button type="submit" class="btn btn-success" name="submit">Editer</button>
        <a href="./index.php">Cancel</a>
      </div>
    </form>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>