<?php
if (isset($_GET['id'])) {
  $servername = "localhost";
  $username = "root";
  $password = "Sbharti@2305";
  $dbname = "crud_test";
  // ("localhost", "root", "Sbharti@2305", "crud_test",3306)

  $emp_id = $_GET['id'];

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // sql to delete a record
  $sql = "DELETE FROM `database` WHERE `ADHAR_NO`={$emp_id}";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data Deleted')</script>";
    echo "<script>location.href='crud.php';</script>";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
} else {
  echo "failed";
}
