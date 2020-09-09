<?php




 ?>


 <html>
      <head>
        <title></title>
      </head>
      <body>
     <form action="signup.php" methode="post">
        <input type="text" name="fname" placeholder="Firstname" required /><br>
        <input type="text" name="mname" placeholder="Middlename" /><br>
        <input type="text" name"lname" placeholder="Lastname" required/><br>
        <input type="email" name"email" placeholder="Email" required/><br>
        <input type="text" name="uname" placeholder="Username" required/><br>
        <input type="password" name="pwd" placeholder="Password" required/><br>
        <input type="password" name="rpwd" placeholder="Repeat Password" required/><br>
        <input type="submit" value="Sign up!"/>
        <a href="index.php"> I already have an account. Login!</a>

      </form>
      </body>

 </html>
