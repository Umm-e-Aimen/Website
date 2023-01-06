<?php
 $conn = mysqli_connect("localhost", "root", "", "formhandler");         //hostname username password databasename
 if (!$conn) {
     echo "connection refuse";
 } else {
     echo "connection established";
 }


     $id = $_GET['id'];
     $row = mysqli_fetch_assoc(mysqli_query($conn,"select * from intro where id='$id'"));
 
        ?>
    

<html>
<head>

<title>Form</title>
<style>
         .btn:hover{
            cursor:pointer;
            background-color:black;
            font-weight:bold;
            color:white;
         }
      </style>
</head>
<body style="background: rgb(240,248,255);
background: radial-gradient(circle, rgba(240,248,255,1) 1%, rgba(0,0,0,1) 79%);">

<nav style="width:100%; height:60px; background-color:black; position:fixed; top:0;">
         <ul style="float:right; color:white; ">
            <li style="text-decoration:none; display:inline-block; margin-right:20px; font-size:20px; ">Home</li>
            <li style="text-decoration:none; display:inline-block; margin-right:20px; font-size:20px; ">About</li>
            <li style="text-decoration:none; display:inline-block; margin-right:20px; font-size:20px; ">Contact</li>
         </ul>
      </nav>

     <div style="width:40%; height:50%; background-color:transparent; border-top: white solid 5px; border-bottom: white solid 5px; margin-top:160px; margin-left:400px;">
     <center><h1>Introduction</h1></center>
     <form action="update.php" method="post">
      <form>

      <lable style="font-size:20px; margin-right:10px; margin-left:35px; position:relative;top:-5px; "><b>id</b></lable>

      <input type="text" value="<?= $row['id'] ?>"   readonly placeholder=" Enter your id" name="id" style="height:30px; width:73%; border-top:transparent; border-left:transparent; border-right:transparent; position:relative; top:-12px; background-color:transparent; " required>
      <br>

      <lable style="font-size:20px; margin-right:10px; margin-left:20px; position:relative; top:10px;"><b>Name</b></lable>

      <input type="text" value="<?= $row['name'] ?>" placeholder=" Enter your Full Name" name="name" style="height:30px; width:73%; border-top:transparent; border-left:transparent; border-right:transparent; background-color:transparent; " required>
      <br>
      <lable style="font-size:20px; margin-right:10px; margin-left:20px; position:relative; top:30px;"><b>Contact</b></lable>

      <input type="text" value="<?= $row['contact'] ?>" placeholder=" Enter your Contact" name="contact" style="height:30px; width:70%;position:relative; top:20px; border-top:transparent; border-left:transparent; border-right:transparent; background-color:transparent; " required>
      <br>
      <lable style="font-size:20px; margin-right:10px; margin-left:20px; position:relative; top:50px;"><b>Address</b></lable>

      <input type="text" value="<?= $row['address'] ?>" placeholder=" Enter your Address" name="address" style="height:30px; width:70%; position:relative; top:40px; border-top:transparent; border-left:transparent; border-right:transparent; background-color:transparent; " required>

      <input type="submit" value="submit" style="position:relative; top:65px; left:200px; width:100px; "class="btn">
      </form>
    </div>

</body>
</html>