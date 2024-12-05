
<?php

session_start();

 $page=basename($_SERVER["SCRIPT_NAME"]);

 

 if($page=='index.php'){

    
 }



 else{
if(empty($_SESSION["adminlogin"])) {   
    echo "<script>window.location.href='login.php';</script>";
   
  }
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Nulinz</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
  <div class="dashboard-container">
    <nav class="sidebar">
      <div class="sidebar-header">
        <h2>Menu</h2>
      </div>
      <ul class="sidebar-menu">
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="task.php">Tasks</a></li>
        <li><a href="resources.php">Resources</a></li>
        <li><a href="reports.php">Reports</a></li>
        <li><a href="settings.php">Settings</a></li>
      </ul>
    </nav>
    
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>