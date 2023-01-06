<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>      
        <style>
         .btn:hover{
            cursor:pointer;
            background-color:deepskyblue;
            font-weight:bold;
            color:white;
         }
      </style>
    </head>
   <body style="background: rgb(255,255,255);
   background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(0,191,255,1) 79%);">
   
      <nav style="width:100%; height:70px; position:fixed; top:0; border-bottom:solid 2px white">
         <a href="course.php" style="color:black;"><i class="fa-solid fa-book-open-reader" style="font-size:35px; position:relative; top:10px; left:42%;  "></i><div style="display:inline-block; width:100px; height:30px; position:relative; top:12px;left:43%; font-size:33px; font-weight:bold;">Edukate</div></a>
      </nav>

     <div style="display;inline-block; width:80%; height:65%; background-color:transparent; border-top: white solid 5px; border-bottom: white solid 5px; padding-top:20px; position:relative; top:140px; left:100px;">
     <center><h2>New Course</h2></center>
     <br>
     <form action="newcourse.php" method="post">
      <form>
      <lable style="font-size:20px; margin-right:10px; margin-left:20px; position:relative; left:50px;"><b>Instructor Name</b></lable>
      <input type="text" placeholder=" Enter Instructor Name" name="name" style="height:30px; width:30%; border-top:transparent; border-left:transparent; border-right:transparent; background-color:transparent;  position:relative; left:50px;" required>
      <br>
      <lable style="font-size:20px; margin-right:10px; margin-left:550px; position:relative; top:-25px; left:60px;"><b>Lectures</b></lable>
      <input type="text" placeholder=" Lectures" name="contact" style="height:30px; width:30%;position:relative; top:-30px; left:60px; border-top:transparent; border-left:transparent; border-right:transparent; background-color:transparent; " required>
      <br>
      <lable style="font-size:20px; margin-right:10px; margin-left:20px; position:relative; top:0px; left:60px;"><b>Duration</b></lable>
      <input type="text" placeholder=" Duration" name="address" style="height:30px; width:35%; position:relative; top:0px; left:60px; border-top:transparent; border-left:transparent; border-right:transparent; background-color:transparent;" required>
      <lable style="font-size:20px; margin-right:10px; margin-left:20px; position:relative; top:10px; left:75px;"><b>Skill Level</b></lable>
      <input type="text" placeholder=" Skill Level" name="address" style="height:30px; width:30%; position:relative; top:7px; left:75px; border-top:transparent; border-left:transparent; border-right:transparent; background-color:transparent; " required>
      <lable style="font-size:20px; margin-right:10px; margin-left:20px; position:relative; top:70px; left:-910px;"><b>Language</b></lable>
      <input type="text" placeholder=" Language" name="address" style="height:25px; width:35%; position:relative; top:40px; left:180px; border-top:transparent; border-left:transparent; border-right:transparent; background-color:transparent; " required>
      <lable style="font-size:20px; margin-right:10px; margin-left:20px;position:relative; top:40px; left:180px;"><b>Course Price</b></lable>
      <input type="text" placeholder=" Course" name="address" style="height:30px; width:29%; position:relative; top:40px; left:180px; border-top:transparent; border-left:transparent; border-right:transparent; background-color:transparent; " required>
      
      <input type="submit" value="submit" style="position:relative; top:130px; left:-350px; width:100px; "class="btn">

      </form>
    </div>

    <?php
    error_reporting(0);
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $conn = mysqli_connect("localhost", "root", "", "formhandler");   
    if (!$conn) {
        echo "connection refuse";
    }

    $query = "insert into intro values (null,'$name',$contact,'$address')";
    $q = mysqli_query($conn, $query);
    if (!$q) {
        echo "query not exectired";
    } else {
        echo "query sucess";
        
    }
   
    ?>

   </body>
</html>