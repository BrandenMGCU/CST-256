<html>
 <head>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
 </head>
 <body>
   <div class="form" text-align="center">
    <form class="pure-form" method="POST" action="form.php" >
        <p>
            <input type="hidden" value="0" id="number" name="id" id="id"/><br>
      <p>
      <label for="fname">First Name </label><br>
      <input type="text" name="fname" id="fname">
      </p>
      <p>
      <label for="lname">Last Name </label><br>
      <input type="text" name="lname" id="lname">
      </p>
      <p>
      <label for="email"> Email </label><br>
      <input type="text" name="email" id="email">
      </p>
      <p>
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username">
        </p>
        <p>
            <label for="userpassword">Password</label><br>
            <input type="password" name="userpassword" id="userpassword">
            </p>
      <p>
      <label for="PhoneNumber">Phone Number:</label><br>
  <input type="text" id="PhoneNumber" name="PhoneNumber" placeholder="000-000-0000"><br><br>

  <label for="Address">Address:</label><br>
  <input type="text" id="address" name="address" placeholder="Home Address 123 Dr."><br><br>

      <input type="submit" name="submit" id="submit" value="Submit">
      <input type="reset" name="reset" id="reset" value="Reset">
      </p>
    </form>
 </body>
</html>
