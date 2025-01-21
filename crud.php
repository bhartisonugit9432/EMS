<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "Sbharti@2305", "crud_test", 3306);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM `database` ORDER BY `EMP_CATEGORY` ";
?>

<!--  save and edit php code -->

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Add1'])) {
    func();
}
function func()
{
    // do stuff 
    include 'crud_add.php';
}
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Update1'])) {
    func1();
}
function func1()
{
    // do stuff 
    include 'crud_update.php';
    //echo "<script>alert('Upadte Added')</script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!--     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="External_css_js/crud_table.css">
    <link rel="stylesheet" href="External_css_js/header_footer.css">
    <script src="External_css_js/crud.js"></script>
</head>

<body onload="count_record()">

    <!-- Navbar code -->

    <?php include 'include_file/page-header.html' ?>


    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-6">
                            <h2 style="display: inline;">Manage <b>Employees</b>
                                <h4 style="display: inline;"><span id="total_record"></span></h4>
                            </h2>
                        </div>
                        <div class="col-6">
                            <a href="#addEmployeeModal" data-bs-target="#addEmployeeModal" class="btn btn-success"
                                data-bs-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New
                                    Employee</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="mytable">
                    <thead>
                        <tr>

                            <th>SNo.</th>
                            <th style="display: none;">ADHAR NO</th>
                            <th>Name</th>
                            <th style="display: none;">Father's Name</th>
                            <th>Gender</th>
                            <th style="display: none;">Mobile No.</th>
                            <th style="display: none;">Email</th>
                            <th>Address</th>
                            <th>QUALIFICATION</th>
                            <th>Job Profile</th>
                            <th>Department</th>
                            <th>Emp Category</th>
                            <th style="display: none;">Join Date</th>
                            <th style="display: none;">End Date</th>
                            <th style="display: none;">Salary</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        if ($result = mysqli_query($link, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                    <tr>

                                        <td><?php echo $i ?></td>
                                        <td style="display: none;"><?php echo $row['ADHAR_NO'] ?></td>
                                        <td><?php echo $row['NAME'] ?></td>
                                        <td style="display: none;"><?php echo $row['FATHER_NAME'] ?></td>
                                        <td><?php echo $row['GENDER'] ?></td>
                                        <td style="display: none;"><?php echo $row['MOBILE_NO'] ?></td>
                                        <td style="display: none;"><?php echo $row['EMAIL'] ?></td>
                                        <td><?php echo $row['ADDRESS'] ?></td>
                                        <td><?php echo $row['QUALIFICATION'] ?></td>
                                        <td><?php echo $row['JOB_PROFILE'] ?></td>
                                        <td><?php echo $row['DEPARTMENT'] ?></td>
                                        <td><?php echo $row['EMP_CATEGORY'] ?></td>
                                        <td style="display: none;"><?php echo $row['JOIN_DATE'] ?></td>
                                        <td style="display: none;"><?php echo $row['END_DATE'] ?></td>
                                        <td style="display: none;"><?php echo $row['SALARY'] ?></td>

                                        <td>
                                            <a href="#editEmployeeModal" data-bs-target="#editEmployeeModal"
                                                <?php echo "id=e" . $i . "" ?> class="edit" data-bs-toggle="modal"
                                                onClick="reply_click(this.id)"><i class="material-icons" data-toggle="tooltip"
                                                    title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" data-bs-target="#deleteEmployeeModal"
                                                <?php echo "id=d" . $row['ADHAR_NO'] . "" ?> class="delete" data-bs-toggle="modal"
                                                onClick="del_click(this.id)"><i class="material-icons" data-toggle="tooltip"
                                                    title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                    <?php $i = $i + 1; ?>
                        <?php   }

                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                echo "No records matching your query were found.";
                            }
                        } else {
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }

                        // Close connection
                        mysqli_close($link);
                        ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>



    <!-- add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade " data-bs-keyboard="false" data-bs-backdrop="static">
        <div class="modal-dialog ">
            <div class="modal-content modal-dialog modal-dialog-scrollable">
                <form method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Employee</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>ADHAR ID</label>
                            <input type="number" class="form-control" id='add_id' name="add_id" required>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" id='add_name' name="add_name" required>
                        </div>
                        <div class="form-group">
                            <label>Father Name</label>
                            <input type="text" class="form-control" id='add_fname' name="add_fname" required>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" class="form-control" id='add_gen' name="add_gen" readonly required>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-select form-control" id="add_sel_gen" onChange="add_sel_gen1(this);"
                                required>
                                <option value="">Select Gender</option>
                                <option>Male</option>
                                <option>Female</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" class="form-control" id='add_mobile' name="add_mobile" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" id='add_email' name="add_email" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" id='add_addr' name="add_addr" required>
                        </div>
                        <div class="form-group">
                            <label>Qualification</label>
                            <input type="text" class="form-control" id='add_qua' name="add_qua" readonly required>
                        </div>
                        <div class="form-group">
                            <label>Qualification</label>
                            <select class="form-select form-control" id="add_sel_qua" onChange="add_sel_qua1(this);"
                                required>
                                <option value="">Select Qualification</option>
                                <option>10th</option>
                                <option>12th</option>
                                <option>Graduation</option>
                                <option>B.Tech</option>
                                <option>M.Tech</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Job Profile</label>
                            <input type="text" class="form-control" id='add_jobp' name="add_jobp" readonly required>
                        </div>
                        <div class="form-group">
                            <label>Job Profile</label>
                            <select class="form-select form-control" id="add_sel_job" onChange="add_sel_job1(this);"
                                required>
                                <option value="">Select Profile</option>
                                <option>Asst.Professor</option>
                                <option>Reception</option>
                                <option>Accounts</option>
                                <option>Registar</option>
                                <option>Drivers</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" class="form-control" id='add_dept' name="add_dept" readonly required>
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <select class="form-select form-control" id="add_sel_dept" onChange="add_sel_dept1(this);"
                                required>
                                <option value="">Select Dept.</option>
                                <option>B.Tech-CS</option>
                                <option>B.Tech-CE</option>
                                <option>B.Tech-ME</option>
                                <option>B.Tech-EN</option>
                                <option>B.Tech-EC</option>
                                <option>B.Tech-AG</option>
                                <option>REGISTAR</option>
                                <option>ACCOUNTS</option>
                                <option>CARETAKERS</option>
                                <option>LIBRARIAN</option>
                                <option>RECEPTION</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Emp Category</label>
                            <input type="text" class="form-control" id='add_empcat' name="add_empcat" readonly required>
                        </div>
                        <div class="form-group">
                            <label>Emp Category</label>
                            <select class="form-select form-control" id="add_sel_emp" onChange="add_sel_emp1(this);"
                                required>
                                <option value="">Select Emp. Cat.</option>
                                <option>Academic</option>
                                <option>Non Academic</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Join Date</label>
                            <input type="date" class="form-control" id='add_joind' name="add_joind" required>
                        </div>
                        <div class="form-group">
                            <label>End Date</label>
                            <input type="text" class="form-control" id='add_endd' name="add_endd" value="Active"
                                readonly required>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" class="form-control" id='add_sala' name="add_sala" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add" name="Add1">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>ADHAR ID</label>
                            <input type="text" class="form-control" id='edit_id' name="edit_id" readonly required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" id='edit_name' name="edit_name" required>
                        </div><br>
                        <div class="form-group">
                            <label>Father Name</label>
                            <input type="text" class="form-control" id='edit_fname' name="edit_fname" required>
                        </div><br>
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" class="form-control" id='edit_gen' name="edit_gen" readonly required>
                        </div><br>
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-select form-control" id="edit_sel_gen" onChange="edit_sel_gen1(this);"
                                required>
                                <option value="">Select Gender</option>
                                <option>Male</option>
                                <option>Female</option>

                            </select>
                        </div><br>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" class="form-control" id='edit_mobile' name="edit_mobile" required>
                        </div><br>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" id='edit_email' name="edit_email" required>
                        </div><br>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" id='edit_addr' name="edit_addr" required>
                        </div><br>
                        <div class="form-group">
                            <label>Qualification</label>
                            <input type="text" class="form-control" id='edit_qua' name="edit_qua" readonly required>
                        </div><br>
                        <div class="form-group">
                            <label>Qualification</label>
                            <select class="form-select form-control" id="edit_sel_qua" onChange="edit_sel_qua1(this);"
                                required>
                                <option value="">Select Qualification</option>
                                <option>10th</option>
                                <option>12th</option>
                                <option>Graduation</option>
                                <option>B.Tech</option>
                                <option>M.Tech</option>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label>Job Profile</label>
                            <input type="text" class="form-control" id='edit_jobp' name="edit_jobp" readonly required>
                        </div><br>
                        <div class="form-group">
                            <label>Job Profile</label>
                            <select class="form-select form-control" id="edit_sel_job" onChange="edit_sel_job1(this);"
                                required>
                                <option value="">Select Profile</option>
                                <option>Asst.Professor</option>
                                <option>Reception</option>
                                <option>Accounts</option>
                                <option>Registar</option>
                                <option>Drivers</option>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" class="form-control" id='edit_dept' name="edit_dept" readonly required>
                        </div><br>
                        <div class="form-group">
                            <label>Department</label>
                            <select class="form-select form-control" id="edit_sel_dept" onChange="edit_sel_dept1(this);"
                                required>
                                <option value="">Select Dept.</option>
                                <option>B.Tech-CS</option>
                                <option>B.Tech-CE</option>
                                <option>B.Tech-ME</option>
                                <option>B.Tech-EN</option>
                                <option>B.Tech-EC</option>
                                <option>B.Tech-AG</option>
                                <option>REGISTAR</option>
                                <option>ACCOUNTS</option>
                                <option>CARETAKERS</option>
                                <option>LIBRARIAN</option>
                                <option>RECEPTION</option>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label>Emp Category</label>
                            <input type="text" class="form-control" id='edit_empcat' name="edit_empcat" readonly
                                required>
                        </div><br>
                        <div class="form-group">
                            <label>Emp Category</label>
                            <select class="form-select form-control" id="edit_sel_emp" onChange="edit_sel_emp1(this);"
                                required>
                                <option value="">Select Emp. Cat.</option>
                                <option>Academic</option>
                                <option>Non Academic</option>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label>Join Date</label>
                            <input type="text" class="form-control" id='edit_joind' name="edit_joind"
                                placeholder="dd/mm/yyyy" required>
                        </div><br>
                        <div class="form-group">
                            <label>End Date</label>
                            <input type="text" class="form-control" id='edit_endd' name="edit_endd"
                                placeholder="dd/mm/yyyy">
                        </div><br>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="number" class="form-control" id='edit_sala' name="edit_sala" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Update Data" name='Update1'>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                        <a href="crud_delete.php?id=4" id="delete_href">
                            <!-- <input type="text" value="3" name="id"> -->
                            <input type="button" class="btn btn-danger" value="Delete">
                            <!-- <span class="btn btn-danger" >Delete</span> -->
                        </a>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer code -->

    <?php include 'include_file/footer.html' ?>
</body>

</html>