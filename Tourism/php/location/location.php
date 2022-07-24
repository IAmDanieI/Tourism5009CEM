<?php
require '../config.php';
$location_name = $_GET['location_name'];
$sql = 'SELECT location_id, name, location_description FROM tourism_website.locations WHERE name="'.$location_name.'"';
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$location_id = $row['location_id'];
?>

<!DOCUMENT html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php echo'<title>'.$row["name"].'</title>';?>
<link rel="stylesheet" href="../../css/main.css"/>
<link href="../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../css/reviews.css" rel="stylesheet" type="text/css">

<link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
</head>
<?php
include '../navi/nav.html';
echo '<div class="featured-container-locations">';
echo '<h1>' . $row["name"] . '</h1>';
echo '</div>';
echo '<main>';
echo '<h2 class="subject-header">Description</h2>';
echo '<p class="location-description">' . $row["location_description"] . '</p>';
echo '<h2 class="subject-header">Location</h2>';
// embedded google map to show location
// works by taking in the name of location from database and "searching" it 
echo '<div style="width: 100%">
    <iframe 
        scrolling="no" 
        marginheight="0" 
        marginwidth="0" 
        src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=+('.$row["name"].' Penang)&amp;t=p&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" 
        width="100%" 
        height="600" 
        frameborder="0">
    </iframe>
</div>';
?>
</div>
</div>
<div class="w3-container w3-padding-64 w3-theme-l5 w3-center" id="contact">
<div class="w3-padding-16"></div>
</main>
<div class="content home">
		<h2 style="font-family: 'Montserrat'">Reviews</h2>
		<p style="font-family: 'Montserrat'">Below are the reviews for this location, feel free to add your own!</p>
		<div class="reviews"></div>
		<script>
		const location_id = <?= $location_id?>;
        console.log(location_id);
		fetch("../review/reviews.php?location_id=" + location_id).then(response => response.text()).then(data => {
			document.querySelector(".reviews").innerHTML = data;
			document.querySelector(".reviews .write_review_btn").onclick = event => {
				event.preventDefault();
				document.querySelector(".reviews .write_review").style.display = 'block';
				document.querySelector(".reviews .write_review input[name='name']").focus();
			};
			document.querySelector(".reviews .write_review form").onsubmit = event => {
				event.preventDefault();
				fetch("../review/reviews.php?location_id=" + location_id, {
					method: 'POST',
					body: new FormData(document.querySelector(".reviews .write_review form"))
				}).then(response => response.text()).then(data => {
					document.querySelector(".reviews .write_review").innerHTML = data;
				});
			};
		});
		</script>
	</div>
<?php include '../navi/footer.html'; ?>

</div>
</div>
