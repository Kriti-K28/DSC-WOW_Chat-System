<?php
   //we have to include config file of php
   include('../config.php');
   switch($_REQUEST['action'])
   {
       //sendMessage is a variable from jquery code in index.php file 
       case "sendMessage":
        //global $db;
        session_start();
        //pass query
          $query=$db->prepare("INSERT INTO messages SET user=? ,message=?");
          $run=  $query->execute([$_SESSION['username'],$_REQUEST['message']]);
        
          if ($run)
          {
             echo 1;
             exit;
          }
          break;

        case "getMessages":
            $query=$db->prepare("SELECT * FROM messages");
            $run=$query->execute();
            $rs=$query->fetchAll(PDO::FETCH_OBJ);
            //echo var_dump($rs);
     
           $chat='';
           foreach( $rs as $message)
          {
            // $chat .=$message->message.'<br />';
            $chat .='<div class="single-message">
                     <strong>'.$message->user.':</strong> '.$message->message.'
                    </div>';
          }
          echo $chat;
          break;
        
      
   }
 ?>