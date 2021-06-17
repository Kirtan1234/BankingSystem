<?php


session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'bank');


    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$Email = $_POST['Email'];
	$AccB = $_POST['AccB'];


    
	if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['Email']) || empty($_POST['AccB'] )) {
		?>
		<script>
			alert("Please fill again");
		</script>
		<?php
    
  } else {
  	$reg = " insert into user_table(firstname, lastname, Email, AccB) values ('$firstname' ,'$lastname', '$Email', '$AccB')";
	$res = mysqli_query($con, $reg);
	if($res){
                     echo "<script> alert('User Created');
                                     window.location='banking.php';
                           </script>";
   
		}

   }
	
?>
