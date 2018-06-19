<?php  
require_once("connection.php"); 
$cclass=$_POST['cclass'];
$subject=$_POST['subject'];
$marks=$_POST['marks'];
$question=$_POST['question'];
$answer=$_POST['answer'];
$val=0;
$check1='select * from questionbank where`question`="'.$question.'"';
$result = mysqli_query($GLOBALS["___mysqli_ston"], $check1);
while($data = mysqli_fetch_array($result))
{
	$val=$val+1;
} 
echo $val;

if($val>0){
	$data = array("status"=>"error", "message"=>"Question Already Exist !");
    echo(json_encode($data));
    exit();
}else{

$query = 'Insert into questionbank values("'.$cclass.'", "'.$subject.'","'.$marks.'","'.$question.'","'.$answer.'","0")';
echo $query;
$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);  
if(isset($result))
{
$data = array("status"=>"success", "message"=>"data submited!");

    }
    else
    {
       $data = array("status"=>"error", "message"=>"database query failed !");
  
    }
    echo(json_encode($data));
}

exit();
?>