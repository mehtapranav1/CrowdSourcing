
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crowdsource";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$question=$_POST['question'];
$marks=$_POST['marks'];
// echo $question;
$sql = 'UPDATE `questionbank` SET `status`= "1" WHERE `question`like "'.$question.'" && `marks`="'.$marks.'"';
echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>