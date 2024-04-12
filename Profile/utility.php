<?php
  if($_POST["message"]) {

    mail("inamyek9044@gmail.com", "A new message from your site",
    
    $_POST["message"]. "From: ".$_POST["email"]);
    
    }
?>