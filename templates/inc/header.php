<!DOCTYPE html>
<html>
<head>
	<title>Job Lister</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Creat Listing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="createuser.php">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Sign In</a>
            </li>
            <li class="nav-item">
              <span class="nav-link" ><?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) { echo "Hello " .$_SESSION["username"];
                echo '<a class="nav-link" href="logout.php">Sign Out</a>';
               } else {echo '';} ?></span>
              
            </li>
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
      </div>
      <?php displayMessage(); ?>