<!DOCTYPE HTML>
<html>
  <head>
    <title>Johann</title>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <style>
      body{background-color:red}
    </style>
  </head>
  
  <body>

    Welcome to this site. It is a site.
    
    <h1>Visit <a href = "http://yyzjohann.com/mmo_doc/mmo_doc.php">mmo docs</a></h1><br><br>
    <h1> <a href = "http://yyzjohann.com/login/create_account.php">Create your own account</a></h1><br><br>

    <?php
       date_default_timezone_set("Europe/Stockholm");
       echo date('m/d/y h:i:sa', strtotime("today"));
       ?>

  </body>
</html>
