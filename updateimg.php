<!DOCTYPE html>
<html lang="en">
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Update</title>

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
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
<?php
  include "config.php";

      $Title=$DatePost=$Firstline=$Secondline="";
      $ID=0; //variables

          if(isset($_GET['id']) and$_SERVER["REQUEST_METHOD"]=="GET")//request method to GET
          { 
              $ID=$_GET["id"];
              $sql = "SELECT * FROM blog WHERE ID_blogs=".$ID.""; //Query getting recent data
              $rs=$conn->query($sql);

                        if ($rs->num_rows > 0) 
                        {
                         
                               while($row = $rs->fetch_assoc()) 
                               {
                                $Title=$row["Title"];
                                $DatePost=$row["DatePost"];
                                $Firstline=$row["Firstline"];
                                $Secondline=$row["Secondline"];
                              }
                        }
          }

            if(isset($_POST['submit']) and $_SERVER["REQUEST_METHOD"]=="POST")//post method

            { 
                              $Title=$_POST["Title"];
                              $DatePost=$_POST["DatePost"];
                              $Firstline=$_POST["Firstline"];
                              $Secondline=$_POST["Secondline"];


                $sql = "UPDATE blog SET Title='$Title', DatePost='$DatePost', Firstline='$Firstline', Secondline='$Secondline' 
                WHERE ID_blogs='".intval($_REQUEST['id'])."'";


              if (mysqli_query($conn, $sql)) //checking query 

              { 
                echo "Updated record successfully";
                
              } 
              else 
              {
                echo "Error" . $sql . mysqli_error($conn);
              }
               mysqli_close($conn);
            }


?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Update Text
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Text Form
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="post" enctype='multipart/form-data'>

                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="Title" value="<?php echo $Title;?>">
                            </div>

                            <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category" disabled>
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
                                <input class="form-control" type="date" name="DatePost" value="<?php echo $DatePost;?>">
                            </div>
                            <div class="form-group">
                                <label>Header Image</label>
                                <input type="file" name="file" disabled>
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="fileA" disabled>
                                <input type="file" name="fileB" disabled>
                                <input type="file" name="fileC" disabled>
                                <input type="file" name="fileD" disabled>
                                <input type="file" name="fileE" disabled>
                            </div>

                            <div class="form-group">
                                <label>First Paragraph</label>
                                <textarea class="form-control" rows="3" name="Firstline" ><?php echo $Firstline;?></textarea>
                            </div>
                            <div class="form-group">
                                <textarea class='form-control ckeditor' name='Secondline' rows='3'><?php echo $Secondline;?></textarea>
                            </div>

                            <button type="submit" class="btn btn-default" name="submit">Update</button>
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

</html>
