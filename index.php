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
</head>

<body>
    <?php
       session_start();
        $_SESSION['username']="Abc Xyz";
    ?>

     <div id="wrapper">        
        <div id="left_panel">
           <div style=" padding: 10px;">
              <img id="profile_imag" src="UI/imag/avatar.png" alt="">
              <br>
              Name:ABC
              <br>
              <span style="font-size: 12px; opacity: 0.5;">abc@gmail.com</span>
              <br><br><br>
              <div>
                <label id="label_chat" for="radio_chat">Chat <img src="UI/imag/demo.jpg" alt=""></label>
                <label id="label_contact" for="radio_contacts">Contacts <img src="UI/imag/demo.jpg" alt=""></label>
                <label id="label_setting" for="radio_setting">Setting <img src="UI/imag/demo.jpg" alt=""></label>
              </div> 
           </div>
        </div>
        <div id="right_panel">
           <div id="header">Let's Chat</div>
           <div id="container" style="display: flex;">
              <div id="inner_left_panel">
              
              </div>
              <input type="radio" id="radio_chat" name="myradio" style="display: none;">
              <input type="radio" id="radio_contacts" name="myradio" style="display: none;">
              <input type="radio" id="radio_setting" name="myradio" style="display: none;">
              <div id="inner_right_panel">
                 <div id="chat_msg"> 
                     <p>hiii</p>
                 </div>
                <hr>
                  <form action="" method="POST" id="messageForm">
                 
                    <textarea name="message"  class="textarea"id="" cols="50" rows="5"></textarea>
                 </form>
              </div>
           </div>
        </div>
    </div>
    <!--Jquery code for textarea to submit the message -->
    <script>
        LoadChat()
       function LoadChat()
       {
           $.post('handlers/messages.php?action=getMessages',function(response){
                  $('#chat_msg').html(response);
           });
       }
        $('.textarea').keyup(function(e)
        {
            //whenever user hit enter form submitted
            if(e.which == 13)
            {
                $('form').submit();
            } 
        });
        $('form').submit(function() 
        {
           var message = $('.textarea').val();
           $.post('handlers/messages.php?action=sendMessage&message='+message,function(response)
           {
              if(response==1)
              {
                  document.getElementById('messageForm').reset();
              }
           });
           return false;
        });
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