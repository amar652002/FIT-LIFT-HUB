<?php
include "database.php";

if(isset($_GET["deleteid"])) {
  $id = $_GET["deleteid"];
  $sql = "DELETE FROM trainer WHERE TID='$id'";

  if ($db->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $db->error;
  }
}

$db->close();
?>
