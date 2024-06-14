<?php
include "connect.php";
$id = $_GET['deleteid'];
$sql = "DELETE FROM `registration` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if ($result){
    header("Location: index.php?msg=Record deleted succesfully");

}
else{
    echo "Failed:" . mysqli_error($conn);
}

?>
