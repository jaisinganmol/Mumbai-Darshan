<!-- Index.php -->


<?php


// Basic includes that are the page name, header, navigation and db Connection

$path = './';
$page = 'home';
include $path . 'assets/inc/header.php';
include $path . 'assets/inc/nav.php';
include "../../dbConn.php";
?>

<?php

// Query from the database and display using PHP

if ($mysqli) {
  $sql = "SELECT * FROM finalData where id=1";
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

          // Footer tags
          
        include $path . 'assets/inc/footer.php';
        ?>
        