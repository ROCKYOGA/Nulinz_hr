<?php include 'header.php';?>
<?php include 'config.php';?>

<div class="main-content">
      <header class="topbar">
        <h1>Nulinz</h1>
        <div class="user-info">
          <p>Welcome, User</p>
          <a href="login.php">Logout</a>
        </div>
      </header>
      <div class="content">

        <div class="card">
                                 
<div class="col-lg-12">
            <div class="row">

                <div class="col-md-12" style="padding: 5px;">

                <div class="card" style="padding: 10px;">                    

                <h2></h2>

                     <table class="table table-bordered table-striped table-hover mgt-20">

                        <thead>

                            <tr>

                                <th>S.No</th>
                                <th>Employee User</th>
                                <th>Assigned Employee</th>  
                                <th>Employee Task</th>
                                <th>Employee Task Status</th>
                                <th>assigned_by<th>
                                
                                                          

                            </tr>

                        </thead>

                        <tbody>

                            <?php 

                      

$counter = 0;
$users = $db->getRows("SELECT * FROM `employee_update`");

if (count($users) > 0) {
    foreach ($users as $data) {
        // print_r($data);
        $t_id = $data["update_id"];
        $employee_user = $data["employee_user"];
        $assigned_employee = $data["assigned_employee"];
        $employee_task = $data["employee_task"];
        $employee_task_stauts = $data["employee_task_stauts"];
        $assined_by = $data["assigned_by"];
       
        $counter++;
    
                                            ?><tr>

                                       <td><?=$counter?></td>
                                       <td><?= $employee_user?></td>
                                         <td><?= $assigned_employee?></td>
                                         <td><?= $employee_task?></td>
                                         <td><?= $employee_task_stauts?></td>
                                         <td><?= $assined_by?></td>
                                        
                                     </tr><?php $counter++;

                                 }

                             }

                            ?>                        

                        </tbody>

                    </table>



                            </div>
                            </div>


        </div>

      </div>
    </div>
</div>
                            </div>