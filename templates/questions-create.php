<?php include 'inc/header.php'; ?>

<h2 class="page-header">Create Question Listing</h2>
<form method="post" action ="createquestions.php">
	<div class="form-group">
		<label>Question Statement</label>
		<input type="text" class="form-control" name="question_statement">
	</div>
	<div class="form-group">
		<label>correct Answer ? </label>
		<input type="checkbox" name="is_correct1" value="1">
		<input type="text" class="form-control" name="answer_statement_1">
	</div>
	<div class="form-group">
		<label>correct Answer ? </label>
		<input type="checkbox" name="is_correct2" value="1">
		<input type="text" class="form-control" name="answer_statement_2">
	</div>
	<div class="form-group">
		<label>correct Answer ? </label>
		<input type="checkbox" name="is_correct3" value="1">
		<input type="text" class="form-control" name="answer_statement_3">
	</div>
	<div class="form-group">
		<label>correct Answer ? </label>
		<input type="checkbox" name="is_correct4" value="1">
		<input type="text" class="form-control" name="answer_statement_4">
	</div>
	<input type="submit" class="btn btn-default" value="Submit" name="submit">
</form>
<?php 
include 'inc/footer.php'; ?>