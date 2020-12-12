<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>My Chat</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" 
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
    </script>
     <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
</head>
<body>
<div id="header">Let's Chat</div>
     <div id="wrapper">        
        <div id="left_panel">
           <div style=" padding: 10px;">
              <img id="profile_imag" src="assets/images/user.png" alt="">
              <br>
              <p> Name: <?php echo $_SESSION['name']?></p>
              
              <span style="font-size: 12px; opacity: 0.5;">abc@gmail.com</span>
              <br><br><br>
              <div style="color:#30475e">
                <label id="label_chat" for="radio_chat">Chat <img src="assets/images/chat.png" alt="" style="margin:-7px 30px 0px -20px"></label>
                <label id="label_contact" for="radio_contacts">Contacts <img src="assets/images/contact.png" alt="" style="margin:-7px 30px 0px -20px"></label>
                <label id="label_setting" for="radio_setting">Setting <img src="assets/images/setting.png" alt="" style="margin:-7px 30px 0px -20px"></label>
                <!-- Logout session start here -->
                <input type="submit" class="button"  value="Logout" onclick="myFunction()">
                <div action="logout.php" class="popup"   >                      
                      <span class="popuptext" id="myPopup">Are you sure? 
                      <form  method="POST" action="logout.php">  
                          <input type="submit"  class="button" value="yes" id="yes_btn">
                      </form> 
                       <input type="submit"  class="button" value="No" id="no_btn">
                    </span>
               </div>
                <script>
                 // When the user clicks on div, open the popup
                    function myFunction() {
                    var popup = document.getElementById("myPopup");
                    popup.classList.toggle("show");
                 }
                </script>
                <!-- Logout out session end here -->
               </div> 
           </div>
        </div>
        <div id="right_panel">
           
           <div id="container" style="display: flex;">
              <div id="inner_left_panel">
               <br><br>
              <div class="contact_class">
                 <img id="contact_img"  src="assets/images/user.png" alt="">
                 <p id="contact_text">Contact 1 </p>
               </div>
               <div class="contact_class">
                 <img id="contact_img" src="assets/images/user.png" src="assets/images/user.png" alt="">
                 <p id="contact_text">Contact 1 </p>
               </div>
               <div class="contact_class">
                 <img id="contact_img"src="assets/images/user.png" src="assets/images/user.png" alt="">
                 <p id="contact_text">Contact 1 </p>
               </div><div class="contact_class">
                 <img id="contact_img"  src="assets/images/user.png" alt="">
                 <p id="contact_text">Contact 1 </p>
               </div>
               <div class="contact_class">
                 <img id="contact_img" src="assets/images/user.png" src="assets/images/user.png" alt="">
                 <p id="contact_text">Contact 1 </p>
               </div>
               <div class="contact_class">
                 <img id="contact_img"src="assets/images/user.png" src="assets/images/user.png" alt="">
                 <p id="contact_text">Contact 1 </p>
               </div>
               <div class="contact_class">
                 <img id="contact_img" src="assets/images/user.png" src="assets/images/user.png" alt="">
                 <p id="contact_text">Contact 1 </p>
               </div>
              
              </div>
              <input type="radio" id="radio_chat" name="myradio" style="display: none;">              
              <input type="radio" id="radio_contacts" name="myradio" style="display: none;">
              <input type="radio" id="radio_setting" name="myradio" style="display: none;">
              <div id="inner_right_panel">
                 <div id="chat_msg"> 
                 <?php 
                  include 'dbh.php';
                  $sql="SELECT * FROM posts";
                  // global $conn;
                  $result = $conn->query($sql);
                  if($result->num_rows >= 0)
                 {
                   while($row = $result->fetch_assoc())
                   {
                     echo "<span style='padding:5px;'><strong>" .$row["name"] ."</strong></span>" .": ". $row["msg"]."<span style='float:right;padding-right:5px;'>".$row["date"]."</span>";
                     
                    echo "<br>";
                     echo "<br>";
                     
                   }
                }
                 else
                 {
                   echo "0 result";
                 }
                 $conn->close();
               ?>
                 </div>
                 
                         <form  method="POST" id="messageForm" onSubmit="window.location.reload()" action="send.php">  
                         <textarea name="msg"  class="textarea" class="form-control" cols="50" rows="3" style="width:70% padding:0 0 5px 20px; border-radius:10px; " ></textarea>
                      <br>
                         <input type="submit"  id="send" class="button"  value="Send" > 
                         <br>             
                    </tr>
                 </table>
                
                    
                   
                 </form> 
                
              </div>
           </div>
        </div>
    </div>
    <!--Jquery code for textarea to submit the message -->
     <script>
      //   LoadChat();
      //  setInterval(function()
      //  {
      //   LoadChat();
      //  },1000);
      //  function LoadChat()
      //  {
      //      $.post('handlers/messages.php?action=getMessages',function(response){
      //              var scrollpos=$('#chat_msg').scrollTop();
      //              var scrollpos=parseInt(scrollpos) + 440;
      //              var scrollHeight=$('#chat_msg').prop('scrollHeight');
      //             $('#chat_msg').html(response);
      //             if(scrollpos < scrollHeight)
      //              {}
      //             else{
      //               $('#chat_msg').scrollTop($('#chat_msg').prop('scrollHeight'));
      //             }
                  
      //      });
      //  }
      $(document).ready(function() { 
            $("button").click(function() { 
                $(document).scrollTop($(document).height()); 
            }); 
        }); 
        $('.textarea').keyup(function(e)
        {
            //whenever user hit enter form submitted
            if(e.which == 13)
            {
                $('form').submit();
            } 
        });
      //   $('form').submit(function() 
      //   {
      //      var message = $('.textarea').val();
      //      $.post('handlers/messages.php?action=sendMessage&message='+message,function(response)
      //      {
      //         if(response==1)
      //         {
      //             document.getElementById('messageForm').reset();
      //         }
      //      });
      //      return false;
      //   });
    </script>  
</body>
</html>
<!-- JS code for animation of panel  -->
<script type="text/javascript">
    function _(element)
    {
       return document.getElementById(element);
    }
    var label=_("label_chat");
    label.addEventListener("click",function(){
      var inner_panel= _("inner_left_panel");
      var ajax=new XMLHttpRequest();
      ajax.onload=function()
      {
         if(ajax.status==200|| ajax.readyState==4)
         {
            inner_panel.innerHTML=ajax.responseText;
         }
      }
      ajax.open("POST","file.php",true);
      ajax.send();
    });
</script>
