<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "Sbharti@2305", "crud_test", 3306);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM `database`";
$result = mysqli_query($link, $sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miniproject01</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
    </script>
    <link rel="stylesheet" href="External_css_js/crud_table.css">
    <link rel="stylesheet" href="External_css_js/header_footer.css">
</head>

<body>

    <!-- Navbar code -->

    <?php include 'include_file/page-header.html' ?>
    <br>

    <br>


    <div class="container">

        <div class="table-responsive">
            <div class="table-wrapper" style="border: 1px solid #435d7d;">
                <div class="table-title" style="background-color: lightslategray;">
                    <div class="row">
                        <div class="col-12">
                            <h2 style="display: inline;">View / Filter <b>Employees Data</b>
                                <h4 style="display: inline;"><span id="total_record"></span></h4>
                            </h2>
                        </div>
                    </div>
                </div>
                <table class="table table-responsive table-hover " id="myTable">
                    <thead>
                        <tr>

                            <th>SNo.</th>
                            <th style="display: none;">ADHAR NO</th>
                            <th>Name</th>
                            <th style="display: none;">Father's Name</th>
                            <th>Gender</th>
                            <th>Mobile No.</th>
                            <th style="display: none;">Email</th>
                            <th style="display: none;">Address</th>
                            <th>QUALIFICATION</th>
                            <th>Job Profile</th>
                            <th>Department</th>
                            <th>Emp Category</th>
                            <th style="display: none;">Join Date</th>
                            <th style="display: none;">End Date</th>
                            <th style="display: none;">Salary</th>
                            <th style="display: none;">Action</th>
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
                                        <td><?php echo $row['MOBILE_NO'] ?></td>
                                        <td style="display: none;"><?php echo $row['EMAIL'] ?></td>
                                        <td style="display: none;"><?php echo $row['ADDRESS'] ?></td>
                                        <td><?php echo $row['QUALIFICATION'] ?></td>
                                        <td><?php echo $row['JOB_PROFILE'] ?></td>
                                        <td><?php echo $row['DEPARTMENT'] ?></td>
                                        <td><?php echo $row['EMP_CATEGORY'] ?></td>
                                        <td style="display: none;"><?php echo $row['JOIN_DATE'] ?></td>
                                        <td style="display: none;"><?php echo $row['END_DATE'] ?></td>
                                        <td style="display: none;"><?php echo $row['SALARY'] ?></td>

                                        <td style="display: none;">
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
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "lengthMenu": [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"]
                ],
                language: {
                    searchPlaceholder: "Filter Record.."
                },
            });

        });
    </script>
    <!-- footer code -->

    <?php include 'include_file/footer.html' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>


</html>