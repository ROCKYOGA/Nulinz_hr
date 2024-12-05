<?php include 'header.php';?>
<?php include 'config.php';?>
<?php 
if (isset($_SESSION['success']) && ($_SESSION['success'] != "")) {
    $stat['success'] = $_SESSION['success'];
    unset($_SESSION['success']);
  }
  if (isset($_SESSION['error']) && ($_SESSION['error'] != "")) {
    $stat['danger'] = $_SESSION['error'];
    unset($_SESSION['error']);
  } 

?>

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
          <h3>Projects</h3>
          <p>10 active projects</p>
        </div>
        <div class="cards">
          <div class="card">
            <h3>Projects</h3>
            <p>10 active projects</p>
          </div>
          <div class="card">
            <h3>Tasks</h3>
            <p>50 tasks completed</p>
          </div>
          <div class="card">
            <h3>Resources</h3>
            <p>30 resources used</p>
          </div>
        </div>
        <table>
          <thead>
            <tr>
              <th>Nom</th>
              <th>Email</th>
              <th>Téléphone</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John Doe</td>
              <td>john@example.com</td>
              <td>555-1234</td>
              <td>
                <a href="#">Modifier</a>
                <a href="#">Supprimer</a>
              </td>
            </tr>
            <tr>
              <td>Jane Smith</td>
              <td>jane@example.com</td>
              <td>555-5678</td>
              <td>
                <a href="#">Modifier</a>
                <a href="#">Supprimer</a>
              </td>
            </tr>
            <tr>
              <td>Bob Johnson</td>
              <td>bob@example.com</td>
              <td>555-9012</td>
              <td>
                <a href="#">Modifier</a>
                <a href="#">Supprimer</a>
              </td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
</div>
