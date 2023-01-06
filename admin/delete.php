<?php
$conn = mysqli_connect("localhost", "root", "", "formhandler"); 

if (!$conn) {
    echo "connection refuse";
}
else {
    echo "connection established";
}


   $id = $_GET["id"];

    $query = "DELETE FROM `intro` WHERE `id` = $id";

    mysqli_query($conn,$query);

?>

<script>
    window.location.assign("showData.php");
</script>