<?php include_once 'config/init.php'; ?>
<?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
	header("location:index.php");
	exit;
}
$user = new User;

if(isset($_POST['submit'])){
	$data=array();
	$data['username'] = $_POST['username'];
	$data['password'] = $_POST['password'];

	if($row=$user->validateCredentials($data)){
		$_SESSION["loggedin"]=true;
		$_SESSION["id"]=$row->id;
		$_SESSION["username"]=$row->username;
		redirect('index.php', 'Successful', 'success');
	}else{
		redirect('index.php', 'Not successful', 'error');
	}
}

//this is a template to the front page
$template = new Template('templates/signin.php');



echo $template;