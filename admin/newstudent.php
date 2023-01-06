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
         <a href="student.php" style="color:black;"><i class="fa-solid fa-book-open-reader" style="font-size:35px; position:relative; top:10px; left:42%;  "></i><div style="display:inline-block; width:100px; height:30px; position:relative; top:12px;left:43%; font-size:33px; font-weight:bold;">Edukate</div></a>
      </nav>

      <div style="display;inline-block; width:40%; height:65%; background-color:transparent; border-top: white solid 5px; border-bottom: white solid 5px; padding-top:20px; position:relative; top:140px; left:400px;">
     <center><h2>New Student</h2></center>
     <br>
     <form action="newstudent.php" method="post">
      <form>
      <lable style="font-size:20px; margin-right:10px; margin-left:20px; position:relative; left:20px;"><b>Name</b></lable>
      <input type="text" placeholder=" Enter Full Name" name="name" style="height:30px; width:73%; border-top:transparent; border-left:transparent; border-right:transparent; background-color:transparent; position:relative; left:20px;" required>
      <br>
      <lable style="font-size:20px; margin-right:10px; margin-left:20px; position:relative; top:30px; left:12px;"><b>Contact</b></lable>
      <input type="text" placeholder=" Enter Contact" name="contact" style="height:30px; width:70%;position:relative; top:30px; left:20px; border-top:transparent; border-left:transparent; border-right:transparent; background-color:transparent; " required>
      <br>
      <lable style="font-size:20px; margin-right:10px; margin-left:20px; position:relative; top:60px; left:10px;"><b>Address</b></lable>
      <input type="text" placeholder="Enter Address" name="address" style="height:30px; width:70%; position:relative; top:60px; left:15px; border-top:transparent; border-left:transparent; border-right:transparent; background-color:transparent; " required>
      <lable style="font-size:20px; margin-right:10px; margin-left:20px; position:relative; top:90px; left:20px;"><b>Email</b></lable>
      <input type="text" placeholder="Enter Email" name="address" style="height:30px; width:75%; position:relative; top:90px; left:20px; border-top:transparent; border-left:transparent; border-right:transparent; background-color:transparent; " required>
      <input type="submit" value="submit" style="position:relative; top:120px; left:220px; width:100px; "class="btn">
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