<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
   <html lang="en">
      <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Secured Page</title>

         <!-- custom css file link  -->
         <link rel="stylesheet" href="css/styles.css">

      </head>
      <body>
         
      <div class="container">

         <div class="content">
            <h3>Hi, <span><?php echo $_SESSION['user_name'] ?></span></h3>
            <h1>Welcome <span>to your secure page</span></h1>
            <p>
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
               when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
               It has survived not only five centuries, but also the leap into electronic typesetting, remaining 
               essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
               with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <a href="logout.php" class="btn">Logout</a>
         </div>

      </div>

      </body>
   </html>