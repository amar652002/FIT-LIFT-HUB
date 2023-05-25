<?php
  include "database.php";
  if(isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];
    $sql_payment = "DELETE FROM payment WHERE MID='$deleteid'";
    if ($db->query($sql_payment) === TRUE) {
      $sql_member = "DELETE FROM member WHERE MID='$deleteid'";
      if ($db->query($sql_member) === TRUE) {
        header("Location: display_member.php");
        exit();
      } else {
        echo "Error deleting record: " . $db->error;
      }
    } else {
      echo "Error deleting record: " . $db->error;
    }
  }
  $db->close();
?>
