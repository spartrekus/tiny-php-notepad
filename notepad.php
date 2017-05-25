<!DOCTYPE HTML>  
<html>
<head>
 <title>Tiny Notepad PHP</title>


 
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
//  This is a comment:
//  Tiny PHP code for a notepad for education purpose and students (*easily hackable, no warranty!*) 
include('blablawebpage.html'); 
?>

 
 
 <hr/> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
// echo "<h2>Your Input:</h2>";
echo "<br>";
echo $comment;
?>



<?php    
/// do not forget to make the txt file, to make it work
$now = time();
$num = date("w");
if ($num == 0)
{ $sub = 6; }
else { $sub = ($num-1); }
$WeekMon  = mktime(0, 0, 0, date("m", $now)  , date("d", $now)-$sub, date("Y", $now));    //monday week begin calculation
$todayh = getdate($WeekMon); //monday week begin reconvert

$dd = $todayh[mday];
$mm = $todayh[mon];
$yy = $todayh[year];
$timenow = date("Ymd-His-w"); 

if(isset($_POST['submit'])){ 
$input = $_POST['comment']; //get input text
echo "|IM Sent!| You entered: ".$input . "<br>" ;
echo '<br><br>' ;
$txt = "";
$myfile = fopen("blablabla-textfile.txt", "ab+") or die("Unable to open file!");
//fwrite($myfile, $yy);
//fwrite($myfile, $mm);
//fwrite($myfile, $dd);
//fwrite($myfile, "-");
fwrite($myfile, $timenow );
fwrite($myfile, " ; ");
$txt = $input ;
fwrite($myfile, $txt);
fwrite($myfile, "\n");
fclose($myfile);
}    
?>

 


<br/><br/>

</body>
</html>



