<?php include_once 'config/init.php'; ?>
<?php $job = new Job;
$questions = new Quiz;

//this is a template to the front page
$template = new Template('templates/frontpage.php');
$category = isset($_GET['category']) ? $_GET['category']: null;
$question = isset($_GET['question']) ? $_GET['question']: null;

if($category){
	$template->jobs = $job->getByCategory($category);
	$template->title = 'Jobs In '.$job->getCategory($category)->name;
}else{
	$template->title = 'Latest Jobs';
	$template->jobs=$job->getAllJobs();
}
if($question){
	$template->answer = "correct";
}
else{
	$template->answer = "not correct";
}
$template->categories = $job->getCategories();
$template ->questions = $questions->getQuestions();

echo $template;