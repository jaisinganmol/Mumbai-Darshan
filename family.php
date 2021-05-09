<!-- About.php -->

<?php

// Includes

$path = './';
$page = 'family';
include $path . 'assets/inc/header.php';
include $path . 'assets/inc/nav.php';
include "../../dbConn.php";
?>

<?php
if ($mysqli) {

  // fetching data based on id
  
  $sql = "SELECT * FROM finalData where id=6";
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
          // php to get the footer
        include $path . 'assets/inc/footer.php';
        ?>
        