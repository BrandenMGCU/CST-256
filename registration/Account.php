<?php
include 'registration.php';
include 'connection.php';

session_start();

if (isset($_POST['username1'])){
    $username = $_POST["username1"];

    $id = $_SESSION["id"];
    $stmt = $con->prepare("UPDATE users SET username = ? WHERE id = ?");
    $stmt->bind_param($username,$id,);
    $stmt->execute();
}

if($count == 1)
{
    echo "<h1><center> Login successful </center></h1>";
    echo '<script type="text/javascript">
    window.location.href = "Homepage.php";
    </script>';
}
else{
}


?>
