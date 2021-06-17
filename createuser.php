<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/bank_logo.png">

<title>BANKING SYSTEM</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #800080;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #000080;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

body {
  background-color: #800080;
}


</style>
</head>
<body>
  


<div class="container">
  <form action="form.php" method="POST">
    <h1 class="contact-heading">Create User</h1>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="Email">Email</label>
    <input type="text" id="Email" name="Email" placeholder="Your Email..">

    
    <label for="Balance">Account Balance</label>
    <input type="text" id="Balance" name="AccB" placeholder="Your acc balance..">
    
    <input type="submit" name="btn-submit" value="Submit" class="form-btn" />
  
  </form>
</div>





</body>
</html>
