<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="images/bank_logo.png">
  
  <title>BANKING SYSTEM</title>
<style>

h2 {text-align: center;}


body {
  background-color: #FFE4B5;
}
table {
  width:100%;
}
table, th, td {
  border: 1px solid rgb(219, 18, 18);
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}


</style>
</head>
<body>

<h2>TRANSACTION HISTORY:</h2>

<table>
  <tr>
    
    <th>SENDER</th>
    <th>RECEIVER</th> 
    <th>AMOUNT</th>
    <th>DATE-TIME</th>
  </tr>
  <?php
$conn = mysqli_connect("localhost", "root", "", "bank");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM transaction";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
// output data of each row
while($row = $result->fetch_assoc()) { ?>
  <tr>
    <td><?php echo $row['sender']; ?></td>
    <td><?php echo $row['receiver']; ?></td>
    <td><?php echo $row['AccB']; ?></td>
    <td><?php echo $row['date-time']; ?></td>
   
  </tr>

<?php
}
?>
</table>



</body>
</html>