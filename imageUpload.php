<?php
  include "../../dbConn.php";

  if($mysqli){
    $msg = "";

    if (isset($_POST['upload'])) {
        $image = $_FILES['image']['name'];
        $image_text = mysqli_real_escape_string($mysqli, $_POST['image_text']);
        $target = "images/".basename($image);
        

        echo(" ");
        echo ($target);

         // INSERT INTO images (`image`, `image_text`) VALUES ("images/9582266.jpg", "test"); 
        $stmt = $mysqli->prepare("INSERT INTO images (`image`, `image_text`) VALUES (?, ?);");
        $stmt->bind_param("ss",$_POST['target'], $_POST['image_text']);
        $stmt->execute();
		  $stmt->close();

    
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
echo(" ");
echo($target_file);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }


    
  /*    
  echo($_FILES['image']['tmp_name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
    */
    
      }
  }
  $result = $mysqli->query('select * from images');
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style>
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="imageUpload.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>
