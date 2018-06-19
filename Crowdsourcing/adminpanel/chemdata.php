<?php  
require_once("connection.php"); 
$query = "select * from questionbank where status='0'";  
$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);  
while($data = mysqli_fetch_array($result)) 
{
   $table_data[]= array("class"=>$data[0],"subject"=>`ch`,"marks"=>$data[2],"question"=>$data[3],"status"=>$data[4],"answer"=>$data[5],"ans_status"=>$data[6]);

} 
echo json_encode($table_data);
?>