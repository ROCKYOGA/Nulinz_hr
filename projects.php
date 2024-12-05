<?php include 'header.php';?>
<?php include 'config.php';?>

<?php 
// $to/daydate = date("Y-m-d");
if (isset($_POST["submit"])){
  //  echo(hello);exit;
      $task_name = $_POST["ename"];
    $data = [
        "employee_name" => $_POST["ename"],
        "task_name" => $_POST["tname"],
        "description" => $_POST["description"],
        "employee_user" => $_POST["euser"],
        "employee_pass" => $_POST["epass"],
        "assined_by" => $_POST["assigned_by"],
        "time" => $_POST["time"],
        "date" => $_POST["date"],
        
    ];
      
    $rest = $db->insertAry('nulinz_hr',$data);
    if(!is_null($rest)){
  
      echo "<script>alert('Task Assigned to $task_name');</script>";

  
    }else{ 
  
      echo "insert failed!"; 
  
      // redirect('projects.php'); 
  
    }
  } 
  
  
?>
<style>


.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}
.d-flex {
  display: flex;
  flex-direction: row;
  background: #f6f6f6;
  border-radius: 0 0 5px 5px;
  padding: 25px;
}
form {
  flex: 4;
}
.Yorder {
  flex: 2;
}
.title {
  background: -webkit-gradient(
    linear,
    left top,
    right bottom,
    color-stop(0, #5195a8),
    color-stop(100, #70eaff)
  );
  background: -moz-linear-gradient(top left, #5195a8 0%, #70eaff 100%);
  background: -ms-linear-gradient(top left, #5195a8 0%, #70eaff 100%);
  background: -o-linear-gradient(top left, #5195a8 0%, #70eaff 100%);
  background: linear-gradient(to bottom right, #5195a8 0%, #70eaff 100%);
  border-radius: 5px 5px 0 0;
  padding: 20px;
  color: #f6f6f6;
}
h2 {
  margin: 0;
  padding-left: 15px;
}
.required {
  color: red;
}
label,
table {
  display: block;
  margin: 15px;
}
label > span {
  float: left;
  width: 25%;
  margin-top: 12px;
  padding-right: 10px;
}
input[type="text"],
input[type="tel"],
input[type="email"],
select {
  width: 70%;
  height: 30px;
  padding: 5px 10px;
  margin-bottom: 10px;
  border: 1px solid #dadada;
  color: #888;
}
select {
  width: 72%;
  height: 45px;
  padding: 5px 10px;
  margin-bottom: 10px;
}
.Yorder {
  margin-top: 15px;
  height: 600px;
  padding: 20px;
  border: 1px solid #dadada;
}
table {
  margin: 0;
  padding: 0;
}
th {
  border-bottom: 1px solid #dadada;
  padding: 10px 0;
}
tr > td:nth-child(1) {
  text-align: left;
  color: #2d2d2a;
}
tr > td:nth-child(2) {
  text-align: right;
  color: #52ad9c;
}
td {
  border-bottom: 1px solid #dadada;
  padding: 25px 25px 25px 0;
}

p {
  display: block;
  color: #888;
  margin: 0;
  padding-left: 25px;
}
.Yorder > div {
  padding: 15px 0;
}

button {
  width: 100%;
  margin-top: 10px;
  padding: 10px;
  border: none;
  border-radius: 30px;
  background: #52ad9c;
  color: #fff;
  font-size: 15px;
  font-weight: bold;
}
button:hover {
  cursor: pointer;
  background: #428a7d;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  float:right;
}
</style>
<div class="main-content">
      <header class="topbar">
        <h1>Nulinz</h1>
        <div class="user-info">
          <p>Welcome, User</p>
          <a href="login.php">Logout</a>
        </div>
      </header>
      <div class="content">

        
        <div class="container">
  <div class="title">
    <h2>Task Assigned To Employee</h2>
  </div>
  <div class="d-flex">
  <form id="form-search" class="form" enctype="multipart/form-data" method="POST" action="" >
      <div class="container">
      <div class="row">
      <div class="col-sm-12">
      <label> 
        <span class="ename">Employee Name <span class="required">*</span></span>
        <input type="text" name="ename" class="form-control" placeholder="Employee Name" required>
      </label>
      </div>
      <div class="col-sm-12">
      <label>
        <span>Task Name<span class="required">*</span></span>
        <input type="text" name="tname" class="form-control" placeholder="Task Name" required>
      </label>
      </div>
      
      <label>
        <div class="row">
        <div class="col-sm-3">
        <span style="margin-left:18px;">Description <span class="required">*</span></span>
        </div><div class="col-sm-6">
        <textarea type="text" name="description" class="form-control" placeholder="Description" required></textarea>
      
      </div>
      
      <div class="col-sm-12">
      <label> 
        <span class="euser">Employee UserId <span class="required">*</span></span>
        <input type="text" name="euser" class="form-control" placeholder="Employee User Id" required>
      </label>
      </div>
      <div class="col-sm-12">
      <label> 
        <span class="epass">Employee Password <span class="required">*</span></span>
        <input type="text" name="epass" class="form-control" placeholder="Employee Password" required>
      </label>
      </div>
      </div>
      </label>
      
      <div class="col-sm-12">
      <label>
        <span>Assigned By <span class="required">*</span></span>
        <input type="text" name="assigned_by" class="form-control" placeholder="Assigned By"required>
      </label>
      </div>
      <div class="col-sm-6">
          <label>
            <span>Time<span class="required">*</span></span>
        
              <input type="time" name="time" class="form-control" required>
          </label></div>
          <div class="col-sm-6">
      <label>
        <span>Date<span class="required">*</span></span>
        <input type="date" name="date" class="form-control" required>
      </label>
      
      </div></div>
      <input id="submit" class="btns hvr-sweep-to-rightss" type="submit" value="Submit" name="submit" >

    </form>
    
  </div>
</div>
        
      </div>
    </div>
</div>
