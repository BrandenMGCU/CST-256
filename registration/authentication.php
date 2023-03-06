<?php
include('connection.php');
    // getting all values from the HTML form


    if(isset($_POST['submit']))
    {
        $accountuser = $_POST['username'];
        $accountpass = $_POST['userpassword'];


        //to prevent from mysqli injection
        $accountuser = stripcslashes($accountuser);
        $accountpass = stripcslashes($accountpass);
        $accountuser = mysqli_real_escape_string($con, $accountuser);
        $accountpass = mysqli_real_escape_string($con, $accountpass);

    }
    // using sql to create a data entry query
    $sql = "Select * from Users where username = '$accountuser' and password = '$accountpass'";

    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count = 1)
    {
        echo "Welcome: $accountuser!";
        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/1YvRfUZRXNU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    }
    else
    {
        echo "Login Attempt failed, please try again!";
    }

    // close connection
   // mysqli_close($con);

?>
<script type="text/javascript">
window.location.href = 'login.php';
</script>
<?php
    include('connection.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

        $sql = "select * from users where Username = '$username' and Password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            echo "<h1><center> Login successful </center></h1>";
            echo '<script type="text/javascript">
            document.write("Hello World!");
        </script>';
        }
        else{
            echo "<h1> Login failed. Invalid username or password.</h1>";

        }
?>
