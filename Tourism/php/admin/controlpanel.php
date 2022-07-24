<?php
define('ADMIN_LOGIN','admin'); 
define('ADMIN_PASSWORD','admin'); // Could be hashed too.
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) 
    || ($_SERVER['PHP_AUTH_USER'] != ADMIN_LOGIN) 
    || ($_SERVER['PHP_AUTH_PW'] != ADMIN_PASSWORD)) { 
  header('HTTP/1.1 401 Unauthorized'); 
  header('WWW-Authenticate: Basic realm="Password For Admin"'); 
  exit("Access Denied: Username and password required."); 
} 
require '../config.php';
include '../navi/admin-nav.html';
$sql = "SELECT * FROM tourism_website.locations";
$result = mysqli_query($conn, $sql);
$resultsCheck = mysqli_num_rows($result);
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../css/admin.css">
<title>Control Panel | Admin</title>
</head>
<body>
<div class="main-container">
<h1 align="center">Control Panel</h1>
<a class = "add-button" href="add.php" >Add Location</a>
<table class="listing" width="500">
<tr>
<th>Name</th>
<th></th>
</tr>
  <?php
  if ($resultsCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <td><?= $row['name'] ?></td>
      <td>
        <div>
          <a class='delete-button' href='remove.php?id=<?= $row['location_id']?>'onClick="return confirm('Are you sure you want to delete this item');">
          Delete
          </a>
        </div>
      </td>
    </tr>
    <?php
    }
  }
  ?>
  </table>
  </div>
  </body>
  </html>
  <?php
?>
