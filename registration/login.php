
<form class="form" method="post" name="login" action="login.php">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="userpassword" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">Signup</a></p>
        <p class="link"><a href="admin.php">Admin</a></p>
  </form>
  <!-- This code above will be for the html login code -->

 <?php
 include('connection.php');
session_start();
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['userpassword'];


    //to prevent from mysqli injection
    //$username = stripcslashes($username);
    //$password = stripcslashes($password);
    //$username = mysqli_real_escape_string($con, $username);
    //$password = mysqli_real_escape_string($con, $password);

}
// using sql to create a data entry query
$sql = "select * from Users where Username = '$username' and Password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

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
