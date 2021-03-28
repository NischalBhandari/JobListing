<?php include_once 'config/init.php'; ?>


<?php

$user = new User;

if(isset($_POST['submit'])){
	$data=array();
	$data['username'] = $_POST['username'];
	$data['password'] = $_POST['password'];

	if($user->create($data)){
		redirect('index.php', 'Your account has been created', 'success');
	}else{
		redirect('index.php', 'Something went wrong', 'error');
	}
}

//this is a template to the front page
$template = new Template('templates/signup.php');

$template->users = $user->getUsers();

echo $template;