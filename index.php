

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple crud operation </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="bootstrap-5.3.0-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
  <body>
    <div class="container my-5">
        <?php
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
           '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    
        }

        ?>
      <button class="btn btn-primary mb-5"><a href="user.php" class="text-light" > add user</a></button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Home Address</th>
      <th scope="col">Present Address</th>
      <th scope="col">Contact</th>
      <th scope="col">Sex</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Email</th>
      <th scope="col">Place of Birth</th>
      <th scope="col">Civil Status</th>
      <th scope="col">Elementary</th>
      <th scope="col">Year Graduated</th>
      <th scope="col">High School</th>
      <th scope="col">Year Graduated</th>
      <th scope="col">Track and Strand</th>
      <th scope="col">Complete Name</th>
      <th scope="col">Date Signed</th>
      <th scope="col">Course to Be enrolled</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "connect.php";
    
    $sql = "SELECT * FROM `registration`";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
      <td><?php echo $row['lname']?></td>
      <td><?php echo $row['fname']?></td>
      <td><?php echo $row['mname']?></td>
      <td><?php echo $row['homeAdd']?></td>
      <td><?php echo $row['presentAdd']?></td>
      <td><?php echo $row['contact']?></td>
      <td><?php echo $row['sex']?></td>
      <td><?php echo $row['dateOfbirth']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['placeOfbirth']?></td>
      <td><?php echo $row['civilstatus']?></td>
      <td><?php echo $row['elementary']?></td>
      <td><?php echo $row['elemgraduated']?></td>
      <td><?php echo $row['highschool']?></td>
      <td><?php echo $row['highgraduated']?></td>
      <td><?php echo $row['shs']?></td>
      <td><?php echo $row['shsgraduated']?></td>
      <td><?php echo $row['track_strand']?></td>
      <td><?php echo $row['completename']?></td>
      <td><?php echo $row['datesigned']?></td>
      <td><?php echo $row['course']?></td>
      <td>
        <button class="btn btn-primary"><a href="update.php? id=<?php echo $row['id'];?>" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php ? deleteid=<?php echo $row['id'];?>" class="text-light">Delete</a></button>
      </td>
    </tr>
        <?php
    }
    ?>
    
    
  </tbody>
</table>
    </div>

    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
  </html>