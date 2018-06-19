

   
   
<?php  
require_once("connection.php"); 
$class=$_POST['class'];
$subject=$_POST['subject'];
//if($marks2=empty($_POST['marks2'])?0:$_POST['marks2']);
//if($marks4=empty($_POST['marks4'])?0:$_POST['marks4']);
//if($marks6=empty($_POST['marks6'])?0:$_POST['marks6']);
//if($marks8=empty($_POST['marks8'])?0:$_POST['marks8']);
// echo $marks8;
//$maxmarks=$marks2*2+$marks4*4+$marks6*6+$marks8*8;
$qn=1;
$i=0;
//$mm=0;

echo "<html><h1 style="."text-align:center;".">Question Paper</h1>
           <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; class=".$class." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; subject=".$subject."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </h3><br>";

$query="SELECT question,marks,answer FROM `questionbank` WHERE class='$class'&& subject='$subject'" ;
// echo $query;

$result = mysqli_query($con, $query);

while($data = mysqli_fetch_array($result)) 
{ 
   //$table_data[]= array("class"=>$data[0],"subject"=>$data[1],"marks"=>$data[2],"question"=>$data[3],"status"=>$data[4]);
$ques[$i]= $data['question'];
$marks[$i]= $data['marks'];
$answer[$i]= $data['answer'];

echo $qn.".".$ques[$i]."&nbsp&nbsp&nbsp&nbsp[".$marks[$i]."]<br><br>";
echo "Ans:-".$answer[$i]."&nbsp&nbsp&nbsp&nbsp<br><br>";
$i++;
$qn++;
//$mm=$mm+8;
} 

/*
while($total>0) 
{ 
   //$table_data[]= array("class"=>$data[0],"subject"=>$data[1],"marks"=>$data[2],"question"=>$data[3],"status"=>$data[4]);
echo $var[$total]."<br/>";
echo $var2[$total]."<br/>";
echo $var3[$total]."<br/>";
echo $var4[$total]."<br/>";
$total--;
} 
*/
?>