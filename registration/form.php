<?php
    // getting all values from the HTML form

use Dotenv\Parser\Value;


    if(isset($_POST['submit']))
    {
        $FirstName = $_POST['fname'];
        $LastName = $_POST['lname'];
        $Email = $_POST['email'];
        $id = $_POST['id'];
        $Username = $_POST['username'];
        $Password = $_POST['userpassword'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $Email = $_POST['email'];
        $Address = $_POST['Address'];
    }

    // database details
    $host = "localhost:3306";
    $username = "root";
    $password = "pokemon1";
    $dbname = "CST256";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!"); //. mysqli_connect_error("EXAMPLE!"));
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO CST256.Users (id, FirstName, LastName, Email, Username, Password, PhoneNumber, Address) VALUES ('$id', '$FirstName', '$LastName', '$Email','$Username', '$Password', '$PhoneNumber', '$Address')";

    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Your information was submitted successfully!", "<br>";

        echo "<br>";

        echo "The information you submitted was" . "<br> First Name: {$FirstName} <br> Last Name: {$LastName} <br> Email: {$Email} <br> <br> Username: {$Username} <br> Password: {$Password} <br>";

	    // This was a youtube video that was played in the background. echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/1YvRfUZRXNU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    }

    // close connection
    mysqli_close($con);

?>

<html>
    <head>
        <meta http-equiv="refresh" content="10;url=http://localhost:8888/Milestone2%20copy/registration/login.php" />
    </head>
    <body>
        <h1>Redirecting in 10 seconds...</h1>
    </body>
</html>
<!--
<script type="text/javascript">
window.location.href = 'login.php';
</script>
-->
