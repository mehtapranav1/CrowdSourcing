<?php  
require_once("connection.php"); 
$query = "select * from questionbank where subject='chemistry' AND status='0'";  
$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);  
while($data = mysqli_fetch_array($result)) 
{ 
   $table_data[]= array("class"=>$data[0],"subject"=>$data[1],"marks"=>$data[2],"question"=>$data[3],"status"=>$data[5],"answer"=>$data[4]);

} 
echo json_encode($table_data);
?>