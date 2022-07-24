<?php
require '../config.php';
include '../navi/admin-nav.html';
try {
    $pdo = new PDO('mysql:host=' . $dbServername . ';dbname=' . $dbName . ';charset=utf8', $dbUsername);
  } catch (PDOException $exception) {
    // If there is a problem, stop and display error.
    exit('Failed to connect to database!');
  }
if (isset($_POST['added'])) {
    $location_name = $_POST["name"];
    $location_description = $_POST["description"];
  if (!empty($location_name)) {
    $stmt_location = $pdo->prepare("INSERT INTO locations (name, location_description) 
                      VALUES (:location_name, :location_description)");
    $stmt_location->bindParam(':location_name', $location_name);
    $stmt_location->bindParam(':location_description', $location_description);
    $stmt_location->execute();
    if ($stmt_location) {
      echo '<!DOCUMENT html>';
      echo '<html>';
      echo '<head>';
      echo '<title>Add | Admin Panel</title>';
      echo '<link rel="stylesheet" href="../../css/admin.css">';
      echo '<link rel="preconnect" href="https://fonts.gstatic.com">';
      echo '<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed&display=swap" rel="stylesheet">';
      echo '</head>';
      echo '<body>';
      echo '<div id="main-container">';
      echo '<h1 style="text-align:center">New Location Successfully Added</h1>';
      echo '</div>';
      echo '</body>';
      echo '</html>';
    } else {
      print mysqli_error($conn);
    }
  }
}
  ?>
  <!DOCUMENT html>
  <html>
    <head>
      <link rel = "icon" href="../../images/title_icon.png" type="image/x-icon"/>
      <title>Add Location | Admin Panel</title>
      <link rel="stylesheet" href="../../css/admin.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed&display=swap" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
    <div class="main-container">
    <h1 align="center">New Location</h1>
    <div class="form-center">
    <form action="add.php" method="POST">
    <label for="name">Location Name: </label>
    <input type="text" name="name" id="name" />
    <br/>
    <br/>
    <textarea rows="4" cols="104" name="description" id="description" placeholder="Location Description"></textarea>
          <br/>
          <br/>
          <br/>
          <input class="save-button" type="submit" name="submit" value="Add Location" />
          <input type='hidden' name='added' value='true' /> 
          </form>
      </div>
      </div>
    </body>
</html>
