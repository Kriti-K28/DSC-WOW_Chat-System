<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="info">
       <h2>Login here</h2>
       <form action="login.php" method="post">
           <label for="">Username: </label>
           <input type="text" name="uname" placeholder="User name"> <br> <br>
           <label for="">Password: </label>
           <input type="password" name="pass" placeholder="Password"> <br> <br>
           <button type="submit">Login</button>
       </form>

       <form action="signup.php" method="post">
          <h2>Don't have an account sign up here</h2>
          <label for="">Username: </label>
          <input type="text" name="uname" placeholder="Username"> <br> <br>
          <label for="">Email: </label>
          <input type="text" name="Email" placeholder="Email"> <br> <br>
          <label for="">Password</label>
          <input type="text" name="Password" placeholder="Password"> <br> <br>
          <button type="submit">Sign-up</button>
        </form>
    </div>
</body>
</html>