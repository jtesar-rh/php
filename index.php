<?php
<?php
$host = 'backend:3306';
$user = 'jtesar';
$pass = 'redhat';
$dbname = 'db';
$conn = mysqli_connect($host, $user, $pass,$dbname);
if(!$conn){
  die('Could not connect: '.mysqli_connect_error());
}
echo 'Connected successfully<br/>';

$sql = 'SELECT * FROM names';
$retval=mysqli_query($conn, $sql);

if(mysqli_num_rows($retval) > 0){
 while($row = mysqli_fetch_assoc($retval)){
    echo "$row['name']";
    echo "\n";
 } //end of while
}else{
echo "0 results";
}
mysqli_close($conn);
?>
?>
