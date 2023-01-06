<?php
 $conn = mysqli_connect("localhost", "root", "", "formhandler");   
 if (!$conn) {
     echo "connection refuse";
 } else {
     echo "connection established";
 
$id = $_POST['id'];
 $name = $_POST['name'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];

  $query = "UPDATE intro SET `Name`='$name',`Contact`=$contact,`Address`='$address' WHERE `id`=$id";
 $q = mysqli_query($conn,$query);
 if(!$q){
    echo "bye";
 }else{
    echo "hi";
}
 }
?>
    <script>
    window.location.assign("showData.php");
</script>