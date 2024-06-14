<?php 
include 'connect.php';
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

    $sql="INSERT INTO `registration`(`lname`, `fname`, `mname`, `homeAdd`, `presentAdd`, `contact`, `sex`, `dateOfbirth`, `email`, `placeOfbirth`, `civilstatus`, `elementary`, `elemgraduated`, `highschool`, `highgraduated`, `shs`, `shsgraduated`, `track_strand`, `completename`, `datesigned`, `course`) VALUES ('$lname','$fname','$mname','$homeAdd','$presentAdd','$contact','$sex','$dateOfbirth','$email','$placeOfbirth','$civilstatus','$elementary','$elemgraduated','$highschool','$highgraduated','$shs','$shsgraduated','$track_strand','$completename','$datesigned','$course')";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: index.php?msg=New record created successfully"); 
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
        <form method="POST">
  <div class="form-group">
    <label >Last Name:</label>
    <input type="text" class="form-control" placeholder="Enter your LastName" name="lname" required>    
  </div>
   <div class="form-group">
    <label >First Name:</label>
    <input type="text" class="form-control" placeholder="Enter your FirstName" name="fname" required>    
  </div>
   <div class="form-group">
    <label >Middle Name:</label>
    <input type="text" class="form-control" placeholder="Enter your MiddleName" name="mname" required >    
  </div>
   <div class="form-group">
    <label >Home Address:</label>
    <input type="text" class="form-control" placeholder="Enter your Home Address" name="homeAdd" required >    
  </div>
  <div class="form-group">
    <label >Present Address:</label>
    <input type="text" class="form-control" placeholder="Enter your Present Address" name="presentAdd" required>    
  </div>
  <div class="form-group">
    <label >Contact:</label>
    <input type="text" class="form-control" placeholder="Enter your Contact" name="contact" maxlength="11" required>    
  </div>
  <div class="form-group">
    <!-- <label >Sex:</label> -->
    <!-- <input type="text" class="form-control" placeholder="Enter your Home " name="sex" >    -->
     <label for="">Sex</label>
                <select class="form-control" name="sex" required>
                     <option value="">Select</option>  
                     <option value="Male">Male</option>  
                     <option value="Female">Female</option>  
                 </select> 
  </div>
  <div class="form-group">
    <label >Date Of Birth:</label>
    <input type="date" class="form-control" placeholder="Enter your Date Of Birth" name="dateOfbirth" required>    
  </div>
  <div class="form-group">
    <label >Email:</label>
    <input type="email" class="form-control" placeholder="Sample@gmail.com" name="email" required>    
  </div>
  <div class="form-group">
    <label >Place Of Birth:</label>
    <input type="text" class="form-control" placeholder="Enter your Place of Birth" name="placeOfbirth" required>    
  </div>
  <div class="form-group">
    <label >Civil Status:</label>
    <!-- <input type="text" class="form-control" placeholder="Enter your Civil Status" name="civilstatus" required>    -->
     <select class="form-control" name="civilstatus" required>
                     <option value="">Select</option>  
                     <option value="Single">Single</option>  
                     <option value="Married">Married</option>
                     <option value="Widow">Widow</option>  
                 </select>  
  </div>
  <div class="form-group">
    <label >Elementary:</label>
    <input type="text" class="form-control" placeholder="Enter your Elementary School" name="elementary" required>    
  </div>
  <div class="form-group">
    <label >Year Graduated:</label>
    <input type="text" class="form-control" placeholder="Enter Year Graduated" name="elemgraduated" required>    
  </div>
  <div class="form-group">
    <label >High School:</label>
    <input type="text" class="form-control" placeholder="Enter your High School" name="highschool" required>    
  </div><div class="form-group">
    <label >Year Graduated:</label>
    <input type="text" class="form-control" placeholder="Enter Year Graduated" name="highgraduated" required>    
  </div>
  <div class="form-group">
    <label >SHS:</label>
    <input type="text" class="form-control" placeholder="Enter your SHS " name="shs" required>    
  </div>
  <div class="form-group">
    <label >Year Graduated:</label>
    <input type="text" class="form-control" placeholder="Enter Year Graduated " name="shsgraduated" required>    
  </div>
  <div class="form-group">
    <label >Track and Strand:</label>
    <input type="text" class="form-control" placeholder="Enter your Track And Strand" name="track_strand" required>    
  </div>
  <div class="form-group">
    <label >Complete Name:</label>
    <input type="text" class="form-control" placeholder="Complete Name" name="completename" required>    
  </div>
  <div class="form-group">
    <label >Date Signed:</label>
    <input type="date" class="form-control" placeholder="Enter Date Signed" name="datesigned" required>    
  </div>
  <div class="form-group">
    <label >Course to be Enrolled:</label>
    <!-- <input type="text" class="form-control" placeholder="Enter your Home Address" name="course" > -->
     <!-- <label for="" class="control-label">Client Status</label> -->
                <select class="form-control" name="course"  required>
                     <option value="">Select</option>  
                     <option value="BSIT">Bachelor Of Science in Information Technology</option>  
                     <option value="BSBA"> Bachelor of Science in Business Administration (Major in Financial)</option>  
                     <option value="BSHM">Bachelor of Science in Hospitality Management</option>
                     <option value="BEED">Bachelor of Elementary Education</option>
                     <option value="BSED">Bachelor of Secondary Education</option>  
                 </select>    
  </div>
<br>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button></br>
</form>
    </div>

    
  </body>
  <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</html>