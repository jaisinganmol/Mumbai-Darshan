<!-- About.php -->


<?php

  // Include tags for header, navigation, database connection

$path = './';
$page = 'Mumbai Darshan';
include $path . 'assets/inc/header.php';
include $path . 'assets/inc/nav.php';
include "../../dbConn.php";
?>

<?php
if ($mysqli) {

  // Query from the database based on ID

  $sql = "SELECT * FROM finalData where id=2";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo "" . $row["data"] . "<br>";
    }
  } else {
    echo "0 results";
  }
  $mysqli->close();
}
?>
        <?php

        // Footer Include

        include $path . 'assets/inc/footer.php';
        ?>
        