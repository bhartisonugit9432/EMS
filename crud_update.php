<?php
if (isset($_POST['edit_id'])) {
    $link = mysqli_connect("localhost", "root", "Sbharti@2305", "crud_test", port: 3306);
    // Check connection
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $edit_id = mysqli_real_escape_string($link, $_REQUEST['edit_id']);
    $edit_name = mysqli_real_escape_string($link, $_REQUEST['edit_name']);
    $edit_fname = mysqli_real_escape_string($link, $_REQUEST['edit_fname']);
    $edit_gen = mysqli_real_escape_string($link, $_REQUEST['edit_gen']);
    $edit_mobile = mysqli_real_escape_string($link, $_REQUEST['edit_mobile']);
    $edit_email = mysqli_real_escape_string($link, $_REQUEST['edit_email']);
    $edit_addr = mysqli_real_escape_string($link, $_REQUEST['edit_addr']);
    $edit_qua = mysqli_real_escape_string($link, $_REQUEST['edit_qua']);
    $edit_jobp = mysqli_real_escape_string($link, $_REQUEST['edit_jobp']);
    $edit_dept = mysqli_real_escape_string($link, $_REQUEST['edit_dept']);
    $edit_empcat = mysqli_real_escape_string($link, $_REQUEST['edit_empcat']);
    $edit_joind = mysqli_real_escape_string($link, $_REQUEST['edit_joind']);
    $edit_endd = mysqli_real_escape_string($link, $_REQUEST['edit_endd']);
    $edit_sala = mysqli_real_escape_string($link, $_REQUEST['edit_sala']);

    // Attempt insert query execution
    //$sql = "INSERT INTO login (ID, NAME, PASSWORD) VALUES ('$first_name', '$last_name', '$email')";
    $sql = "UPDATE `database` SET `NAME` = '$edit_name', `FATHER_NAME` = '$edit_fname', `GENDER` = '$edit_gen',`MOBILE_NO`='$edit_mobile', `EMAIL` = '$edit_email', `ADDRESS` = '$edit_addr', `QUALIFICATION` = '$edit_qua', `JOB_PROFILE` = '$edit_jobp', `DEPARTMENT` = '$edit_dept', `EMP_CATEGORY` = '$edit_empcat', `JOIN_DATE` = '$edit_joind', `END_DATE` = '$edit_endd', `SALARY` = '$edit_sala' WHERE `database`.`ADHAR_NO` = '$edit_id';";
    if (mysqli_query($link, $sql)) {
        //echo "Records added successfully.";
        echo "<script>alert('Data Updated')</script>";
        echo "<script>location.href='crud.php';</script>";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    // Close connection
    mysqli_close($link);
} else {
    echo "404 Not Found !!";
}
