<?php
include_once 'test.php';
$sql="select * from packages";
$result=mysqli_query($conn,$sql);

while($data=mysqli_fetch_assoc($result)){
 $packadename=$data['packagename'];
 $description=$data['description'];
 $packagelink=$data['packagelink'];
 $photo=$data['	photo'];

}

?>