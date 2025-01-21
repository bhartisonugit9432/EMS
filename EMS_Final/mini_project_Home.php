<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "Sbharti@2305", "crud_test", port: "3306");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Use a non-reserved table name or ensure it's properly escaped
$sql = "SELECT * FROM `database`"; // Updated table name
$result = mysqli_query($link, $sql);

// Handle potential errors in the query execution
if ($result === false) {
    die("ERROR: Could not execute $sql. " . mysqli_error($link));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mini project Home New</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"
        integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="External_css_js/header_footer.css">
    <script src="External_css_js/Home-js.js"></script>
    <style>
    body {
        font-family: 'Varela Round', sans-serif;
    }

    .h2_padding {
        padding: 11px;
    }

    #emp_cat>thead,
    #course_wise>thead,
    #nonacademic_wise>thead {
        background-color: rgba(0, 128, 128, 0.651);
        color: whitesmoke;
    }

    .card_height {
        height: 180px;
    }

    svg {
        opacity: 0.4;
    }
    </style>


</head>

<body>

    <!-- Navbar code -->

    <?php include 'include_file/page-header.html' ?>

    <div class="container my-5">
        <div class="row">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-4 card_height bg-opacity-75">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h2 class="card-title display-counter" style="display: inline;">260</h2>
                                    <h2 style="display: inline;">+</h2>
                                    <p class="card-text">Total Employee</p>
                                </div>
                                <div class="col">
                                    <svg style="width: -webkit-fill-available;height: inherit;" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-info mb-4 card_height">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h2 class="card-title display-counter" style="display: inline;">30</h2>
                                    <h2 style="display: inline;">+</h2>
                                    <p class="card-text">Female Employee</p>
                                </div>
                                <div class="col">
                                    <svg style="width:fit-content;height:inherit;" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M11.94 3C9.75 3.03 8 4.81 8 7C7.94 8.64 7.81 10.47 7.03 11.59C9.71 13.22 12 13 12 13C12 13 14.29 13.22 16.97 11.59C16.12 10.22 15.94 8.54 16 7C16 4.79 14.21 3 12 3H11.94M8.86 13.32C6 13.93 4 15.35 4 17V21H12L9 17H6.5M12 21L13.78 13.81C13.78 13.81 13 14 12 14C11 14 10.22 13.81 10.22 13.81M12 21H20V17C20 15.35 18 13.93 15.14 13.32L17.5 17H15Z" />
                                    </svg>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-danger bg-opacity-75 mb-4 card_height">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h2 class="card-title display-counter1" style="display: inline;">1800000</h2>
                                    <h2 style="display: inline;">+</h2>
                                    <p class="card-text">Estimated Cost</p>
                                </div>
                                <div class="col">
                                    <svg style="width:fit-content;height:inherit" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M13.66 7C13.1 5.82 11.9 5 10.5 5H6V3H18V5H14.74C15.22 5.58 15.58 6.26 15.79 7H18V9H16C15.73 11.8 13.37 14 10.5 14H9.77L16.5 21H13.73L7 14V12H10.5C12.26 12 13.72 10.7 13.96 9H6V7H13.66Z" />
                                    </svg>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <!-- div for category -->
    <div id="category" class="my-5">
        <div class="container" style="border: 1px solid teal;">
            <div class="row">
                <div class="col bg-success bg-opacity-75">
                    <h2 class="text-center text-white h2_padding">Category wise</h2>
                </div>
            </div>
            <br>
            <div class="container" style="padding: 29px 0;">
                <div class="row">
                    <div class="col-md-4 d-flex">
                        <table class="table table-bordered" id="emp_cat">
                            <thead>
                                <tr>
                                    <th>S NO.</th>
                                    <th>Categary</th>
                                    <th>Total Emp</th>
                                    <th>Expense</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Academic</td>
                                    <td>32</td>
                                    <td>507</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Non Academic</td>
                                    <td>12</td>
                                    <td>15</td>
                                </tr>
                            </tbody>

                        </table>


                    </div>
                    <div class="col-md-4">
                        <canvas id="myChart" style="width:100%; height: 350px;"></canvas>

                        <script>
                        emp_cat_line();
                        </script>


                    </div>

                    <div class="col-md-4">
                        <canvas id="myChart1" style="width:100%;height: 350px;"></canvas>
                        <script>
                        emp_cat_Bar_expense();
                        </script>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- div for Academic course -->
    <div id="course" class="my-5 ">
        <div class="container" style="border: 1px solid teal;">
            <div class="row">
                <div class="col bg-danger bg-opacity-75 ">
                    <h2 class="text-center text-white h2_padding">Academic Department Wise</h2>
                </div>
            </div>
            <br>
            <div class="container" style="padding: 29px 0;">
                <div class="row">
                    <div class="col-md-4 d-flex order-3">
                        <table class="table table-bordered" id="course_wise">
                            <thead>
                                <tr>
                                    <th>S NO.</th>
                                    <th>Course</th>
                                    <th>Total Emp</th>
                                    <th>Expense</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>B.Tech</td>
                                    <td>27</td>
                                    <td>220</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>MBA</td>
                                    <td>05</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>ITI</td>
                                    <td>04</td>
                                    <td>180</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>BTC</td>
                                    <td>05</td>
                                    <td>60</td>
                                </tr>
                            </tbody>

                        </table>


                    </div>
                    <div class="col-md-4 order-2">
                        <canvas id="myChart_course_emp_line" style="width:100%; height: 350px;"></canvas>

                        <script>
                        emp_course_line();
                        </script>


                    </div>

                    <div class="col-md-4 order-1">
                        <canvas id="myChart1_course_cost_bar" style="width:100%;height: 350px;"></canvas>
                        <script>
                        emp_course_Bar_expense();
                        </script>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- div for Non Academic  -->
    <div id="course" class="my-5">
        <div class="container" style="border: 1px solid teal;">
            <div class="row">
                <div class="col bg-primary bg-opacity-75">
                    <h2 class="text-center text-white h2_padding">Non-Academic Department Wise</h2>
                </div>
            </div>
            <br>
            <div class="container" style="padding: 29px 0;">
                <div class="row">
                    <div class="col-md-4 d-flex ">
                        <table class="table table-bordered" id="nonacademic_wise">
                            <thead>
                                <tr>
                                    <th>S NO.</th>
                                    <th>Department</th>
                                    <th>Total Emp</th>
                                    <th>Expense</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>REGISTAR</td>
                                    <td>27</td>
                                    <td>220</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>ACCOUNTS</td>
                                    <td>05</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>LIBRARIAN</td>
                                    <td>04</td>
                                    <td>180</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Other</td>
                                    <td>05</td>
                                    <td>60</td>
                                </tr>
                            </tbody>

                        </table>


                    </div>
                    <div class="col-md-4 ">
                        <canvas id="myChart_nonacademic_emp_line" style="width:100%; height: 350px;"></canvas>

                        <script>
                        emp_nonacdemic_line();
                        </script>


                    </div>

                    <div class="col-md-4 ">
                        <canvas id="myChart1_nonacademic_cost_bar" style="width:100%;height: 350px;"></canvas>
                        <script>
                        emp_nonacademic_Bar_expense();
                        </script>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- database table data -->
    <div class="container" style="display: none;">

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
    $(".display-counter").each(function() {
        $(this)
            .prop("Counter", 0)
            .animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: "swing",
                step: function(now, tween) {
                    // Check added for decimal number
                    if (parseInt(tween.end) == parseFloat(tween.end)) {
                        $(this).text(Math.ceil(now));
                    } else {
                        $(this).text(now.toFixed(2));
                    }
                },
            });
    })
    $(".display-counter1").each(function() {
        $(this)
            .prop("Counter", 0)
            .animate({
                Counter: $(this).text()
            }, {
                duration: 8000,
                easing: "swing",
                step: function(now, tween) {
                    // Check added for decimal number
                    if (parseInt(tween.end) == parseFloat(tween.end)) {
                        $(this).text(Math.ceil(now));
                    } else {
                        $(this).text(now.toFixed(2));
                    }
                },
            });
    })
    </script>

    <!-- footer code -->

    <?php include 'include_file/footer.html' ?>

</body>





</html>