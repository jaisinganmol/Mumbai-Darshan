<!-- references.php -->


<?php
$path = './';
$page = 'references';
include $path . 'assets/inc/header.php';
include $path . 'assets/inc/nav.php';
include "../../dbConn.php";
?>

<?php
if ($mysqli) {
  $sql = "SELECT * FROM finalData where id=11";
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
        include $path . 'assets/inc/footer.php';
        ?>
        