<?php
require 'config.php';
$sql = 
"SELECT *  
FROM tourism_website.locations 
ORDER BY overall_rating DESC";
$result = mysqli_query($conn, $sql);
$resultsCheck = mysqli_num_rows($result);
echo '<!DOCUMENT html>';
echo '<html>';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Penang Tourism Guides</title>';
echo '<link rel="stylesheet" href="../css/main.css"/>';
echo '<link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> ';
echo '</head>';
echo '<body>';
include 'navi/nav.html';
echo '<!--Featured image-->';
echo '<div class="featured-container">';
echo '<div class="overlay">';
echo '<h1 class="top-intro-header">Penang Tourism Guides</h1>';
echo '</div>';
echo '</div>';
echo '';
echo '<main>';
echo '<div align="center">';
echo '<input type="text" id="searchInput" onkeyup="myFunction()" placeholder="Search for Attractions" title="Type in a place">';
echo '</div>';
/*table id so that js script can work*/
echo '<table id="places" class="table-sort">';
echo '<thead>';
echo '<tr>';
echo '<th>Attraction</th>';
echo '<th>Average Rating</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
if ($resultsCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td><a class =\"table-row-link\" href=\"location/location.php?location_name=" . $row['name'] ."\"> " . $row['name'] . "</a></td>";
    echo "<td>" . $row['overall_rating'] . "</td>";
  }
}
echo '</tbody>';
echo '</table>';
echo '</main>';
include 'navi/footer.html';
?>
<script src="../scripts/tableSorter.js"></script>
<script src="../scripts/tableSearch.js"> </script>
</body>
</html>

