<?php
include('connection.php');
$ql="select * from students";
$select=mysqli_query($conn,$ql);
$rownum=mysqli_num_rows($select);
if($rownum >0)
{
echo"<center><caption><b><u><h2>LIST OF STUDENTS</h2></u></b></caption>";
echo"<table border=1 cellspacing=0>";
echo"<tr><th>ID</th><th>Photo</th><th>Firstname</th><th>Lastname</th><th>Sex</th><th>Date of birth</th></tr>";
while($row=mysqli_fetch_array($select))
{
    echo"<tr>";
    echo"<td>".$row['sid']."</td>";
    echo"<td><img src='data:image;base64,".$row["photo"]."'width=100></td>";
    echo"<td>".$row['firstname']."</td>";
    echo"<td>".$row['lastname']."</td>";
    echo"<td>".$row['sex']."</td>";
    echo"<td>".$row['dateofbirth']."</td>";

    echo"</tr>";
}
echo"</table></center>";
}
else{
    echo"No record found!";
}
mysqli_close($conn);
?>