<?php
$link = mysqli_connect("localhost", "root", "Sbharti@2305", "crud_test", 3306);
// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$add_id = mysqli_real_escape_string($link, $_REQUEST['add_id']);
$add_name = mysqli_real_escape_string($link, $_REQUEST['add_name']);
$add_fname = mysqli_real_escape_string($link, $_REQUEST['add_fname']);
$add_gen = mysqli_real_escape_string($link, $_REQUEST['add_gen']);
$add_mobile = mysqli_real_escape_string($link, $_REQUEST['add_mobile']);
$add_email = mysqli_real_escape_string($link, $_REQUEST['add_email']);
$add_addr = mysqli_real_escape_string($link, $_REQUEST['add_addr']);
$add_qua = mysqli_real_escape_string($link, $_REQUEST['add_qua']);
$add_jobp = mysqli_real_escape_string($link, $_REQUEST['add_jobp']);
$add_dept = mysqli_real_escape_string($link, $_REQUEST['add_dept']);
$add_empcat = mysqli_real_escape_string($link, $_REQUEST['add_empcat']);
$add_joind = mysqli_real_escape_string($link, $_REQUEST['add_joind']);
$add_endd = mysqli_real_escape_string($link, $_REQUEST['add_endd']);
$add_sala = mysqli_real_escape_string($link, $_REQUEST['add_sala']);

// Attempt insert query execution
$sql = "INSERT INTO `database` (`ADHAR_NO`, `NAME`, `FATHER_NAME`, `GENDER`, `MOBILE_NO`, `EMAIL`, `ADDRESS`, `QUALIFICATION`, `JOB_PROFILE`, `DEPARTMENT`, `EMP_CATEGORY`, `JOIN_DATE`, `END_DATE`, `SALARY`) VALUES ('$add_id', '$add_name', '$add_fname', '$add_gen', '$add_mobile', '$add_email', '$add_addr', '$add_qua', '$add_jobp', '$add_dept', '$add_empcat', '$add_joind', '$add_endd', '$add_sala');";
if (mysqli_query($link, $sql)) {
    //echo "Records added successfully.";
    echo "<script>alert('Data Added')</script>";
    echo "<script>location.href='crud.php';</script>";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
