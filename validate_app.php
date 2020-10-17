<?php

session_start();


$con = mysqli_connect('localhost' , 'root');
if ($con){
	/*echo " Connection Successful";*/
	echo "Goto login page";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'login_session');

$name = $_POST['username'];
$pass = $_POST['password'];


$q = "select * from signin where username = '$name' && password = '$pass' ";


$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1){

	$_SESSION['username'] = $name;
	header('location:home.html');

}else{
		?>
		<script>
		
			Swal.fire({
			  icon: 'error',
			  title: 'Oops...',
			  text: 'Something went wrong!',
			  footer: '<a href>Why do I have this issue?</a>'
			})
		</script>
		<?php
		/*header('location:login.php');*/
	}
?>