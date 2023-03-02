<?php
include_once 'test.php';
include_once 'package.php';


if (isset($_POST['submit'])) {
  $package_name = $_POST['package_name'];
  $descrip = $_POST['descrip'];
  $prolink = $_POST['productlink'];
  $photo = $_FILES['photo']['name'];
  $tmpphoto = $_FILES['photo']['tmp_name'];
  $folder = "./images/" . $photo;

  $sql = "INSERT INTO packages (packagename,description,packagelink,photo)
VALUES ('$package_name','$descrip','$prolink','$photo')";
  mysqli_query($conn, $sql);
  /*
  if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
  mysqli_close($conn);
  }
  */
  move_uploaded_file($tmpphoto, $folder);


}
?>
<html>

<head>
  <title>Documents</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<style>
  .card-img-top{
    width: 100%;
    height: 15vw;
    object-fit: cover;
    

  }
  .row{
    font-family: Verdana;

  }
</style>


<body>
  <?php
  $sql = "select * from packages";
  $res = mysqli_query($conn, $sql);

  ?>
  <div class="container">
    <div class="row">
      <?php while ($data = mysqli_fetch_assoc($res)) { ?>
        <div class="col-md-4"style='margin-top:30px'>
          <div class="card border-0 shadow-lg"style='width:10rem'>
            <img src="./images/<?php echo $data['photo']; ?>" class="card-img-top img-fluid" alt="">
            <div class="card-body">
              <p class="card-title"><?php echo $data['packagename']?></p>
              <small class="card-text"><?php echo $data['description'] ?></small><br>
              <a href="<?php echo $data['packagelink']?>" class="btn btn-primary" style="--bs-btn-padding-y: .25rem;margin-top:1rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Book Now</a>
            </div>
          </div>

        </div>
      <?php } ?>


    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>
</body>








</html>