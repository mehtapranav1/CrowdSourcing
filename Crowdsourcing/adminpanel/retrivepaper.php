

   
   
<?php  
require_once("connection.php"); 
$class=$_POST['class'];
$subject=$_POST['subject'];
if($marks2=empty($_POST['marks2'])?0:$_POST['marks2']);
if($marks4=empty($_POST['marks4'])?0:$_POST['marks4']);
if($marks6=empty($_POST['marks6'])?0:$_POST['marks6']);
if($marks8=empty($_POST['marks8'])?0:$_POST['marks8']);
// echo $marks8;
$total=$marks2+$marks4+$marks6+$marks8;
$maxmarks=$marks2*2+$marks4*4+$marks6*6+$marks8*8;
$qn=1;
$mm=0;

echo "<html><h1 style="."text-align:center;".">Question Paper</h1>
           <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; class=".$class." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; subject=".$subject."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M.M.=".$maxmarks."</h3><br>";

$query="SELECT question,marks FROM `questionbank` WHERE class='$class'&& subject='$subject'&& marks='2'&&status='1' ORDER by rand() limit $marks2" ;

$query2="SELECT question,marks FROM `questionbank` WHERE class='$class'&& subject='$subject'&& marks='4'&&status='1' ORDER by rand() limit $marks4" ;

$query3="SELECT question,marks FROM `questionbank` WHERE class='$class'&& subject='$subject'&& marks='6'&&status='1' ORDER by rand() limit $marks6" ;
// echo $query3;

$query4="SELECT question,marks FROM `questionbank` WHERE class='$class'&& subject='$subject'&& marks='8'&&status='1' ORDER by rand() limit $marks8" ;

$result = mysqli_query($con, $query);


   $var[]= array();
   $i=0;

while($data = mysqli_fetch_array($result)) 
{ 
   //$table_data[]= array("class"=>$data[0],"subject"=>$data[1],"marks"=>$data[2],"question"=>$data[3],"status"=>$data[4]);
$var[$i]= $data['question'];
echo $qn.".".$var[$i]."&nbsp&nbsp[2]&nbsp&nbsp<br><br>";
$i++;
$qn++;
$mm=$mm+2;
}


$result = mysqli_query($con, $query2);


   $var2[]= array();
   $i=0;

while($data = mysqli_fetch_array($result)) 
{ 
   //$table_data[]= array("class"=>$data[0],"subject"=>$data[1],"marks"=>$data[2],"question"=>$data[3],"status"=>$data[4]);
$var2[$i]= $data['question'];
echo $qn.".".$var2[$i]."&nbsp&nbsp[4]&nbsp&nbsp<br><br>";
$i++;
$qn++;
$mm=$mm+4;
}


$result = mysqli_query($con, $query3);


   $var3[]= array();
   $i=0;

while($data = mysqli_fetch_array($result)) 
{ 
   //$table_data[]= array("class"=>$data[0],"subject"=>$data[1],"marks"=>$data[2],"question"=>$data[3],"status"=>$data[4]);
$var3[$i]= $data['question'];
echo $qn.".".$var3[$i]."&nbsp&nbsp[6]&nbsp&nbsp<br><br>";
$i++;
$qn++;
$mm=$mm+6;
}


$result = mysqli_query($con, $query4);


   $var4[]= array();
   $i=0;

while($data = mysqli_fetch_array($result)) 
{ 
   //$table_data[]= array("class"=>$data[0],"subject"=>$data[1],"marks"=>$data[2],"question"=>$data[3],"status"=>$data[4]);
$var4[$i]= $data['question'];
echo $qn.".".$var4[$i]."&nbsp&nbsp[8]&nbsp&nbsp<br><br>";
$i++;
$qn++;
$mm=$mm+8;
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