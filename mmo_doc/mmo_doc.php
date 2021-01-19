<!DOCTYPE HTML>
<html>
  <head>
    <title>MMO Docs</title>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <style>
      body{background-color:white}
    </style>
  </head>
  
  <body>


    <?php
       // define variables and set to empty values

       $text = "";

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
       if (empty($_POST["text"])) {
       $text = "";
       } else {
       $text = $_POST["text"];
       }

       }
       
       ?>

    
    <form method="post">
      Write something: <br> <textarea name="text" id="text" rows="5" cols="40"><?php echo $text;?></textarea>
      <br><br>

      <table>
	<tr>
	  <td> <input type="submit" name="submit" id="submit" value="Write to doc"> </td>
	  
	  <td> <input type="submit" name="erase" id="erase" value="Erase content"></td>
		      
	  <td> <input type="submit" name="display" id="display" value="Display content"> </td>
		      
	  <td> <a href = "target_file.txt" download> Download doc</a> </td>
	</tr>
    </table>
    </form>
    <br>

    <?php
       if (array_key_exists("submit", $_POST)) {
       $target_file = fopen("target_file.txt", "a+");              
       fwrite($target_file, $text.PHP_EOL);       
       fclose($target_file);       
       readfile("target_file.txt");
       }
       
       if(array_key_exists("erase",$_POST)){
       $target_file = fopen("target_file.txt", "w");
       fwrite($target_file, "");
       fclose($target_file);
       echo "<script>document.getElementById('text').value = '';</script>";
       }

       if (array_key_exists("display", $_POST)) {
       readfile("target_file.txt");
       }
       ?>



    

    

  </body>
</html>