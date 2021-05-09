<?php
$path = "./";
$page = "commentsForm";
include $path . "assets/inc/header.php";
include $path . "assets/inc/nav.php";
include "../../dbConn.php";
?>

<?php if ($mysqli) {
	if (!empty($_POST["name"]) && !empty($_POST["comments"]) && !empty($_POST["email"])) {
		$stmt = $mysqli->prepare("INSERT INTO `finalComments` (`name`, `comments`, `email`) VALUES (?, ?, ?);");
		$stmt->bind_param("sss", $_POST["name"], $_POST["comments"], $_POST["email"]);
		$stmt->execute();
		$stmt->close();
	}
	$res = $mysqli->query("select * from finalComments");
	if ($res) {
		while ($rowHolder = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
			$records[] = $rowHolder;
		}
	}
} ?>



<!DOCTYPE html>
<html lang="en">

<head>
	<title>Mumbai Darshan</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<div class="banner-area-2">
		<div class="overlay"></div>
		<div class="background-banner"></div>
		<div class="banner-text-2">
			<h3>Comments Form</h3>
		</div>
	</div>


	<div class="tile-text">
            <h2>You can leave your details, I'll email you back!! </h2>
            <p class="body-text"></p>
        </div>

	<div id="error"> </div>
	<form id="form" name="commentsForm" action="<?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit="formValidation()" method="POST">
		<div>
			<label>Name: </label>
			<input type="text" name="name" size="30" id="name" />
		</div>
		<div>
			<label>Comments: </label>
			<input type="text" name="comments" size="50" id="comments" />
		</div>
		<div>
			<label>Email: </label>
			<input type="text" name="email" size="30" id="email" />
		</div>
		<div class="button">
			<input type="submit" name="submit" value="Submit Form"></input>
		</div>
		<br />
		<br />
		<br />
	</form>

	<?php
	function sanitize($str, $length = 50)
	{
		$str = trim($str);
		$str = htmlentities($str, ENT_QUOTES, "UTF-8");
		return substr($str, 0, $length);
	}

	if (!empty($_POST['name'])) {
		sanitize($_POST['name']);
	}

	if (!empty($_POST['comments'])) {
		sanitize($_POST['comments']);
	}

	if (!empty($_POST['email'])) {
		sanitize($_POST['email']);
	}
	?>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Comments</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<tr>

				<?php foreach ($records as $this_row) { ?>
			<tr>
				<td><?php echo $this_row["id"]; ?></td>
				<td><?php echo $this_row["name"]; ?></td>
				<td><?php echo $this_row["comments"]; ?></td>
				<td><?php echo $this_row["email"]; ?></td>
			</tr>
		<?php
				} ?>
		</tr>
		</tbody>
	</table>



	<?php include $path . "assets/inc/footer.php";
	?>