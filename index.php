    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
    <br><br>
        <div class="home_page">
        <br>
        <div id="lets_chat">Let's Chat</div>
        <div style="color:  #e8e8e8; margin:-10px 0px 90px 180px; "><i>connecting people. connecting lives</i></div>
            <div class="login_area">
                    <h2>Login here</h2>
                    <form action="login.php" method="post">
                    <label for="">Username: </label>
                    <input type="text" name="uname" placeholder="User name"> <br> <br>
                    <label for="">Password: </label>
                    <input type="password" name="pass" placeholder="Password"> <br> <br>
                    <button type="submit" class="login_btn">Login</button>
                    </form>
                    <br><br><br>
                    Dont have an account? 

                    <input type="submit" style="background:none; color:white; border:none; text-decoration: underline" value="Sign Up" "> 
                    <!---<div action="signup.php" class="popup2"   >                      
                        <span class="popuptext" id="myPopup2">
                        <form action="signup.php" method="post">
            
            <label for="">Username: </label>
            <input type="text" name="uname" placeholder="Username"> <br> <br>
            <label for="">Email: </label>
            <input type="text" name="Email" placeholder="Email"> <br> <br>
            <label for="">Password</label>
            <input type="text" name="Password" placeholder="Password"> <br> <br>
            <button type="submit" class="signup_btn">Sign-up</button>
            </form>    
                     </span>
                  </div>
                  <script>
                  // When the user clicks on div, open the popup
                     function myFunction() {
                     var popup = document.getElementById("myPopup2");
                     popup.classList.toggle("show");
                  }
                  </script>
                    -->
                </div>

                
                    
                
                <!--   
                    <form action="signup.php" method="post">
            <h2>Don't have an account? sign up here</h2><br>
            <label for="">Username: </label>
            <input type="text" name="uname" placeholder="Username"> <br> <br>
            <label for="">Email: </label>
            <input type="text" name="Email" placeholder="Email"> <br> <br>
            <label for="">Password</label>
            <input type="text" name="Password" placeholder="Password"> <br> <br>
            <button type="submit" class="signup_btn">Sign-up</button>
            </form>    
                -->

            
        </div>
    </body>
    </html>
