<?php
include_once 'test.php';
 

if(isset($_POST['submit']))
{
$package_name=$_POST['package_name'];
$descrip=$_POST['descrip'];
$photo=$_FILES['photo']['name'];
$tmpphoto=$_FILES['photo']['tmp_name'];
$folder="./images/" .$photo;

$sql="INSERT INTO packages (packagename,description,photo)
VALUES ('$package_name','$descrip','$photo')";
mysqli_query($conn,$sql);
/*
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);

}
*/
move_uploaded_file($tmpphoto,$folder);


}
?>