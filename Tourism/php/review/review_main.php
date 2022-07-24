<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Visitor Reviews</title>
	<link href="../../css/style.css" rel="stylesheet" type="text/css">
	<link href="../../css/reviews.css" rel="stylesheet" type="text/css"> 
</head>

<body>
    <?php include '../navi/nav.html';?>
		<script>
		const reviews_page_id = 1;
		// get code from reviews.php page by the location id
		fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
			document.querySelector(".reviews").innerHTML = data;
			document.querySelector(".reviews .write_review_btn").onclick = event => {
				event.preventDefault();
				document.querySelector(".reviews .write_review").style.display = 'block';
				document.querySelector(".reviews .write_review input[name='name']").focus();
			};
			// activate this when user submits
			document.querySelector(".reviews .write_review form").onsubmit = event => {
				event.preventDefault();
				fetch("reviews.php?page_id=" + reviews_page_id, {
					method: 'POST',
					body: new FormData(document.querySelector(".reviews .write_review form"))
				}).then(response => response.text()).then(data => {
					document.querySelector(".reviews .write_review").innerHTML = data;
				});
			};
		});
		</script>
	</div>
</body>
</html>
