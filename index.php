<?php
if(isset($_GET['msg'])){
$msg = $_GET['msg'];
  echo '<div class="alert">
  <h1>
 Employé Ajouté avec succes!!
  </h1>
  </div>';
}
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <a href="./add_new.php" class="btn btn-dark mt-">Ajouter</a>
      <table class="table table-hover text-center">
        <thead class="table-dark">
    
          <tr>
            <th >ID</th>
            <th >First Name</th>
            <th >Last Name</th>
            <th >Email</th>
            <th >Gender</th>
            <th >Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "db_config.php";
       

          $sql = "SELECT * FROM `employer`";
          $result = mysqli_query($conn, $sql);
          
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
          <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['first_name']?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['gender']?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3">R</i></a>


              <a href="sup.php?id=<?php echo $row['id'] ?>" class="link-dark"><i>D</i></a>
            </td>
          </tr>
            <?php 
          } 
            ?>
        
          
        </tbody>
      </table>
    </div>
    <script src="./app.js"></script>
  </body>
  </html>