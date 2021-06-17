<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="images/bank_logo.png">
  
  <title>BANKING SYSTEM</title>
<style>

h2 {text-align: center;}


body {
  background-color: #ffff99;
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

.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #0000ff;
}

.button2:hover {
  background-color: #f44336;
  color: white;
}


</style>
</head>
<body>

<h2>CUSTOMERS:</h2>

<table>
  <tr>
    <th>id</th>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Email</th>
    <th>Account Balance</th>
    <th>operation</th>
  </tr>
  <?php
$conn = mysqli_connect("localhost", "root", "", "bank");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, firstname, lastname, Email, AccB FROM user_table";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
// output data of each row
while($row = $result->fetch_assoc()) { ?>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><?php echo $row['Email']; ?></td>
    <td><?php echo $row['AccB']; ?></td>
    <td><a href="transfermoney.php?id= <?php echo $row['id'] ;?>"> <button class="button button2">Transfer</button></a></td> 
  </tr>

<?php
}
?>
</table>



</body>
</html>
