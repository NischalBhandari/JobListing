<?php include 'inc/header.php'; ?>
<div class="row">
  <div class="column-left">
    <div class="quizbox">
    <h2 id="quizzer">Take a Quiz</h2>
    <button><a href="createquestions.php">Create Questions</a></button>
    <br>
    <div>
      <h3 id="question">

      <?php 
      $count=0;
      foreach($questions as $question ):
        $count +=1 ;
      endforeach;
      $myquestion=rand(1,$count-1); 
      echo $questions[$myquestion]->question_statement;
      $myquestion_id = $questions[$myquestion]->id;
      echo $myquestion_id;
      echo $count;
       ?>
    </h3>
      <br>

        <form method="GET" action="index.php" >
          <select name="question" class="form-control">
            <?php for($i=0;$i<=$count;$i++) 
               if($questions[$i]->question_id == $myquestion_id){ ?>
    <option value="<?php echo $questions[$i]->is_correct; ?>"><?php echo $questions[$i]->answer_statement;?> </option>

    <?php }?>
      </select>
      <input type="submit" class="btn btn-lg btn-success" value="submit">
    </form>
    <span><?php if(isset($answer)) echo $answer; ?></span>
  </div>
</div>
  </div>
  <div class="column-right">
      <div class="jumbotron">
        <h1 class="display-3">Find a Job</h1>
        <form method="GET" action="index.php"> 
          <select name="category" class="form-control">
            <option value="0">Choose Category</option>
            <?php foreach($categories as $category): ?>
              <option value="<?php echo $category->id; ?>"><?php echo $category->name;?> </option>
            <?php endforeach; ?>
          </select><br>
          <input type="submit" class="btn btn-lg btn-success" value="FIND">
        </form>
      </div>
      <h3><?php echo $title ?></h3>
      <?php foreach($jobs as $job): ?>
      <div class="row marketing">
        <div class="col-md-10">
          <h4><?php echo $job->job_title; ?></h4>
          <p><?php echo $job->description; ?></p>
        </div>
        <div class ="col-md-2">
        	<a class="btn btn-default" href="job.php?id=<?php echo $job->id;?>">View</a>
        </div>
    </div>
<?php endforeach; ?>
</div>
</div>
<?php 
include 'inc/footer.php'; ?>