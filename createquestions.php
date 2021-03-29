<?php include_once 'config/init.php'; ?>
<?php $quiz = new Quiz;
if(isset($_POST['submit'])){
	$data=array();
	$data['question_statement'] = $_POST['question_statement'];
	$data['answer_statement_1'] = $_POST['answer_statement_1'];
	$data['answer_statement_2'] = $_POST['answer_statement_2'];
	$data['answer_statement_3'] = $_POST['answer_statement_3'];
	$data['answer_statement_4'] = $_POST['answer_statement_4'];
	$data['is_correct1'] = $_POST['is_correct1'];
	$data['is_correct2'] = $_POST['is_correct2'];
	$data['is_correct3'] = $_POST['is_correct3'];
	$data['is_correct4'] = $_POST['is_correct4'];


	if($row=$quiz->createQuestions($data)){

		redirect('index.php','successful', 'success');
	}else{
		redirect('index.php', 'Something went wrong', 'error');
	}
}

//this is a template to the front page
$template = new Template('templates/questions-create.php');


echo $template;