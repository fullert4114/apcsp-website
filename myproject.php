<!DOCTYPE html>
<html>
<body>

<h2>What Animal Are You?</h2>
<p> Find out if you're a dog, bird, or cat! </p>

<?php
      $walks = $seeds = $naps = $fish = $hights = $mailmen = $run = $scream = $retc = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $walks = test_input($_POST["walks"]);
         $seeds = test_input($_POST["seeds"]);
         $naps = test_input($_POST["naps"]);
         $fish = test_input($_POST["fish"]);
         $hights = test_input($_POST["hights"]);
         $mailmen = test_input($_POST["mailmen"]);
         $run = test_input($_POST["run"]);
         $scream = test_input($_POST["scream"]);
         exec("/usr/lib/cgi-bin/sp2a/actionPage " . $walks . " " . $seeds, $naps, $fish, $hights, $mailmen, $run, $scream, $output, $retc); 
      }

         function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>  
 <?php
       
       if (is_numeric($retc)) {
 echo "<h2>Congratulations! You're a... :</h2>";
         foreach ($output as $line) {
           echo $line;
           echo "<br>";
}
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"

Do you like to go on walks?(yes/no)<br>

  <br> 
  Do you like to go on walks?(yes/no)<br>
<br>  
<input type="text" name="walks" value="">
  <br>
 <br>
  <br>
Do you like seeds?(yes/no)<br>
  <br>
 <input type="text" name="seeds" value="">
  <br>
  <br>
  <br> 
 Do you take naps?(yes/no)<br>
<br>  
<input type="text" name="naps" value="">
   <br>
  <br>
 <br>
  Do you like fish?(yes/no)<br>
<br>  
<input type="text" name="fish" value="">
   <br>
  <br>
 <br>
  Are you scared of hights?(yes/no)<br>
<br>  
<input type="text" name="hights" value="">
  <br>
  <br>
 <br>
  Do mailmen make you upset?(yes/no)<br>
<br>  
<input type="text" name="mailmen" value="">
   <br>
  <br>
 <br>
  Do you like to run around at 3 am?(yes/no)<br>
<br>  
<input type="text" name="run" value=""
 <br>
  <br> 
<br>
  Do you like to scream for no reason?(yes/no)<br>
<br>  
<input type="text" name="scream" value="">
  <br>
 <br>
  <br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>
