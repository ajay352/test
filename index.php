<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<style>
    .adjust {
        padding-left: 60px;
        padding-top: 20px;
        font-family: verdana;


    }

    .form-group {
        
        font-family: verdana;


    }

    
</style>


<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 " style="margin-top: 10px; padding-left: 200px;">
                <h3 class="adjust">Admin Panel</h3>






                <div class="card shadow " style="width: 16rem;">


                    <div class="card-body">
                        <p class="card-title">Add Packages</p>
                        <form action="demo.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group ">

                                <input type="text" class="form-control" name='package_name' placeholder="package name"><br>
                            </div>
                            <div class="form-group">

                                <input type="text" name='descrip' class="form-control" placeholder="discription"><br>

                            </div>

                            <div class="form-group">

                               <input type="text" name='productlink' class="form-control" placeholder="productlink"><br>

                            </div>
                            <div class="form-group">

                                <input type="file" class="form-control"  name='photo'>

                            </div>
                            <div class="form-group">

                                <input type="submit" value="submit"   name="submit" class="btn btn-primary" style="margin-top: 10px;">
                            </div>
                        </form>





                    </div>
                    <div class="my">

                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
            </script>

</body>

</html>