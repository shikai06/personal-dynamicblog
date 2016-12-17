
<!DOCTYPE html>
<html lang="en">
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Insert</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="forms.php">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Jinkee<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                 <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="addblog.php"><i class="fa fa-fw fa fa-pencil"></i>Add Blog</a>
                    </li>
                    <li>
                        <a href="addcategory.php"><i class="fa fa-fw fa fa-pencil"></i>Add Category</a>
                    </li>
                    <li class="">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Edit Forms <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="editabout.php">About</a>
                            </li>
                            <li>
                                <a href="editquotes.php">Quotes</a>
                            </li>
                        </ul>
                        <li>
                            <a href="editimg.php"><i class="fa fa-fw fa-wrench"></i>Update Blog</a>
                        </li>
                        <li>
                            <a href="editcategory.php"><i class="fa fa-fw fa fa-trash-o"></i>Delete Category</a>
                        </li>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blog Form
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Blog Form
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"enctype='multipart/form-data'>

                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="Title">
                            </div>

                            <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category">
                                                <?php
                                                    include "config.php";
                                                     $sql = "SELECT * FROM category";
                                                        $rs = $conn->query($sql);

                                                        if ($rs->num_rows > 0) {
                                                            while($row = $rs->fetch_assoc()) {
                                                                 echo "<option value='".$row["Name"]."'>".$row["Name"]."</option>" ;
                                                             }
                                                             } else {
                                                                 echo "0 results";
                                                             }
                                                    ?>      
                                            </select>
                            </div>

                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="date" name="DatePost">
                            </div>

                            <div class="form-group">
                                <label>Header Image</label>
                                <input type="file" name="file">
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="fileA">
                                <input type="file" name="fileB">
                                <input type="file" name="fileC">
                                <input type="file" name="fileD">
                                <input type="file" name="fileE">
                            </div>

                            <div class="form-group">
                                <label>First Paragraph</label>
                                <textarea class="form-control" rows="3" name="Firstline"></textarea>
                            </div>
                             <div class="form-group">
                                <textarea class='form-control ckeditor' name='Secondline' rows='6'></textarea>
                            </div>

                            <button type="submit" class="btn btn-default" name="submit">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>

                        </form>

                    </div>
                    <div class="col-lg-6">
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
<?php include"config.php";
$Title=$category=$image=$DatePost=$Firstline=$Secondline=$imageA=$imageB=$imageC=$imageD=$imageE="";
$ID_category=0;
if(isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") //checking request method
{
                    $Title=$_POST["Title"];
                    $category=$_POST["category"];
                    $DatePost=$_POST["DatePost"];
                    $Firstline=$_POST["Firstline"];
                    $Secondline=$_POST["Secondline"];
            
            $sql = "SELECT * FROM category WHERE Name='".$category."'";
            $rs = $conn->query($sql);

                    if ($rs->num_rows > 0) {
                        while($row = $rs->fetch_assoc()) {
                            $ID_category = $row["ID_category"];
                        }
                    } else {
                        echo "0 results";
                    }
   $allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
   $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
   $extensionA = pathinfo($_FILES['fileA']['name'], PATHINFO_EXTENSION);
   $extensionB = pathinfo($_FILES['fileB']['name'], PATHINFO_EXTENSION);
   $extensionC = pathinfo($_FILES['fileC']['name'], PATHINFO_EXTENSION);
   $extensionD = pathinfo($_FILES['fileD']['name'], PATHINFO_EXTENSION);
   $extensionE = pathinfo($_FILES['fileE']['name'], PATHINFO_EXTENSION);

                if ((($_FILES["file"]["type"] == "image/pjpeg")
                || ($_FILES["file"]["type"] == "image/gif")
                || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/JPG"))

                && ($_FILES["file"]["size"] < 1000000000000000000000000000000000000000000000)
                && in_array($extension, $allowedExts))

                  {

                  if ($_FILES["file"]["error"] > 0)
                    {
                    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
                    }
                  else
                    {
                      $image=$_FILES["file"]["name"];
                    }
                  }
                else
                  {
                  echo "Invalid file";
                  }

/////////////////////////////////////I M A G E - A//////////////////////////////////////////////////////////////////////////
                if ((($_FILES["fileA"]["type"] == "image/pjpeg")
                || ($_FILES["fileA"]["type"] == "image/gif")
                || ($_FILES["fileA"]["type"] == "image/jpeg")
                || ($_FILES["fileA"]["type"] == "image/JPG"))

                && ($_FILES["fileA"]["size"] < 1000000000000000000000000000000000000000000000)
                && in_array($extensionA, $allowedExts))

                  {

                  if ($_FILES["fileA"]["error"] > 0)
                    {
                    echo "Return Code: " . $_FILES["fileA"]["error"] . "<br />";
                    }
                  else
                    {
                   
                      $imageA=$_FILES["fileA"]["name"];
                    
                    }
                  }
                else
                  {
                  echo "Invalid fileA";
                  }
/////////////////////////////////////I M A G E - B//////////////////////////////////////////////////////////////////////////
                if ((($_FILES["fileB"]["type"] == "image/pjpeg")
                || ($_FILES["fileB"]["type"] == "image/gif")
                || ($_FILES["fileB"]["type"] == "image/jpeg")
                || ($_FILES["fileB"]["type"] == "image/JPG"))

                && ($_FILES["fileB"]["size"] < 1000000000000000000000000000000000000000000000)
                && in_array($extensionB, $allowedExts))

                  {

                  if ($_FILES["fileB"]["error"] > 0)
                    {
                    echo "Return Code: " . $_FILES["fileB"]["error"] . "<br />";
                    }
                  else
                    {
                    
                      $imageB=$_FILES["fileB"]["name"];
                      
                    }
                  }
                else
                  {
                  echo "Invalid fileB";
                  }
/////////////////////////////////////I M A G E - C//////////////////////////////////////////////////////////////////////////
                if ((($_FILES["fileC"]["type"] == "image/pjpeg")
                || ($_FILES["fileC"]["type"] == "image/gif")
                || ($_FILES["fileC"]["type"] == "image/jpeg")
                || ($_FILES["fileC"]["type"] == "image/JPG"))

                && ($_FILES["fileC"]["size"] < 1000000000000000000000000000000000000000000000)
                && in_array($extensionC, $allowedExts))

                  {

                  if ($_FILES["fileC"]["error"] > 0)
                    {
                    echo "Return Code: " . $_FILES["fileC"]["error"] . "<br />";
                    }
                  else
                    {
                    
                      $imageC=$_FILES["fileC"]["name"];
                    }
                  }
                else
                  {
                  echo "Invalid fileC";
                  }
/////////////////////////////////////I M A G E - D//////////////////////////////////////////////////////////////////////////
                if ((($_FILES["fileD"]["type"] == "image/pjpeg")
                || ($_FILES["fileD"]["type"] == "image/gif")
                || ($_FILES["fileD"]["type"] == "image/jpeg")
                || ($_FILES["fileD"]["type"] == "image/JPG"))

                && ($_FILES["fileD"]["size"] < 1000000000000000000000000000000000000000000000)
                && in_array($extensionD, $allowedExts))

                  {

                  if ($_FILES["fileD"]["error"] > 0)
                    {
                    echo "Return Code: " . $_FILES["fileD"]["error"] . "<br />";
                    }
                  else
                    {
                    
                      $imageD=$_FILES["fileD"]["name"];
                    
                    }
                  }
                else
                  {
                  echo "Invalid fileD";
                  }
/////////////////////////////////////I M A G E - E//////////////////////////////////////////////////////////////////////////
                if ((($_FILES["fileE"]["type"] == "image/pjpeg")
                || ($_FILES["fileE"]["type"] == "image/gif")
                || ($_FILES["fileE"]["type"] == "image/jpeg")
                || ($_FILES["fileE"]["type"] == "image/JPG"))

                && ($_FILES["fileE"]["size"] < 1000000000000000000000000000000000000000000000)
                && in_array($extensionE, $allowedExts))

                  {

                  if ($_FILES["fileE"]["error"] > 0)
                    {
                    echo "Return Code: " . $_FILES["fileE"]["error"] . "<br />";
                    }
                  else
                    {
                    
                      $imageE=$_FILES["fileE"]["name"];
                    
                    }
                  }
                else
                  {
                  echo "Invalid fileE";
                  }
                }
  //SQL query for inserting data in the database
$mysqli = "INSERT INTO blog (Title, ID_category, DatePost, Image, Firstline, Secondline, ImageA, ImageB, ImageC, ImageD, ImageE)
  VALUES('$Title','$ID_category','$DatePost','$image','$Firstline','$Secondline','$imageA','$imageB','$imageC','$imageD','$imageE')";
  if(mysqli_query($conn,$mysqli)){ //checking
    echo "Recorded Succesfully";
  }
  else{
    echo "ERROR: " .$mysqli. "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
   move_uploaded_file($_FILES["file"]["tmp_name"],"../WEBDEVDYNAMICNEW/article/" . $_FILES["file"]["name"]);
   move_uploaded_file($_FILES["fileA"]["tmp_name"],"../WEBDEVDYNAMICNEW/article/" . $_FILES["fileA"]["name"]);
   move_uploaded_file($_FILES["fileB"]["tmp_name"],"../WEBDEVDYNAMICNEW/article/" . $_FILES["fileB"]["name"]);
   move_uploaded_file($_FILES["fileC"]["tmp_name"],"../WEBDEVDYNAMICNEW/article/" . $_FILES["fileC"]["name"]);
   move_uploaded_file($_FILES["fileD"]["tmp_name"],"../WEBDEVDYNAMICNEW/article/" . $_FILES["fileD"]["name"]);
   move_uploaded_file($_FILES["fileE"]["tmp_name"],"../WEBDEVDYNAMICNEW/article/" . $_FILES["fileE"]["name"]);


?>


</html>
