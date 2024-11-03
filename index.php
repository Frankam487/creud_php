 
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <a href="./add_new.php" class="btn btn-dark">Ajouter</a>
      <table class="table table-hover text-center">
        <thead class="table-dark">
           <?php
  include "./db_config.php";
  ?>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
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
              <a href="./edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3">R</i></a>
              <a href="./sup.php?id=<?php echo $row['id'] ?>" class="link-dark"><i>D</i></a>
            </td>
          </tr>
            <?php 
          } 
            ?>
        
          
        </tbody>
      </table>
    </div>
  </body>
  </html>