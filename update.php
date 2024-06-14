<?php 
include 'connect.php';

$id = $_GET['id'];
if(isset($_POST['submit'])){
    $lname=$_POST['lname'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $homeAdd=$_POST['homeAdd'];
    $presentAdd=$_POST['presentAdd'];
    $contact=$_POST['contact'];
    $sex=$_POST['sex'];
    $dateOfbirth=$_POST['dateOfbirth'];
    $email=$_POST['email'];
    $placeOfbirth=$_POST['placeOfbirth'];
    $civilstatus=$_POST['civilstatus'];
    $elementary=$_POST['elementary'];
    $elemgraduated=$_POST['elemgraduated'];
    $highschool=$_POST['highschool'];
    $highgraduated=$_POST['highgraduated'];
    $shs=$_POST['shs'];
    $shsgraduate=$_POST['shsgraduated'];
    $track_strand=$_POST['track_strand'];
    $completename=$_POST['completename'];
    $datesigned=$_POST['datesigned'];
    $course=$_POST['course'];

    $sql="UPDATE `registration` SET `lname`='$lname',`fname`='$fname',`mname`='$mname',`homeAdd`='$homeAdd',`presentAdd`='$presendtAdd',`contact`='$contact',`sex`='$sex',`dateOfbirth`='$dateOfbirth',`email`='$email',`placeOfbirth`='$placeOfbirth',`civilstatus`='$civilstatus',`elementary`='$elementary',`elemgraduated`='$elemgraduated',`highschool`='$highschool',`highgraduated`='$highgraduated',`shs`='$shs',`shsgraduated`='$shsgraduated',`track_strand`='$track_strand',`completename`='$completename',`datesigned`='$datesigned',`course`='$course' WHERE id= $id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: index.php?msg=Record Updated successfully"); 
    }else{

        echo "Failed" . mysqli_error($conn);
    }
}


?>

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
        
        $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <form method="POST">
  <div class="form-group">
    <label >Name:</label>
    <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" >    
  </div>
   <div class="form-group">
    <label >Mobile Number:</label>
    <input type="text" class="form-control" value="<?php echo $row['mobile_num'];?>" name="mobile_num" >    
  </div>
   <div class="form-group">
    <label >Email:</label>
    <input type="email" class="form-control" value="<?php echo $row['email'];?>" name="email" >    
  </div>
   <div class="form-group">
    <label >Password:</label>
    <input type="text" class="form-control" value="<?php echo $row['password'];?>" name="password" >    
  </div>
<br>
  <button type="submit" class="btn btn-primary" name="submit">Update</button></br>
</form>
    </div>

    
  </body>
  <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</html>