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
    <title>certificate generation wizard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
    </script>
    <link rel="stylesheet" href="gen.css">
    <link rel="stylesheet" href="External_css_js/header_footer.css">
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
    <script>
        function search() {
            var ser = document.getElementById('inputEmail3').value;
            var tb = document.getElementById('myTable');
            var row = 0;
            //alert(ser);
            for (i = 1; i <= 188; i++) {
                if (tb.rows[i].cells[4].innerHTML == ser) {
                    row = i;
                    break;
                }

            }
            if (row != 0) {
                document.getElementById('name').value = tb.rows[row].cells[1].innerHTML;
                document.getElementById('fname').value = tb.rows[row].cells[2].innerHTML;
                document.getElementById('dept').value = tb.rows[row].cells[8].innerHTML;
                document.getElementById('profile').value = tb.rows[row].cells[7].innerHTML;
                document.getElementById('joindate').value = tb.rows[row].cells[11].innerHTML;
            }
            if (row == 0) {
                document.getElementById('name').value = "";
                document.getElementById('fname').value = "";
                document.getElementById('dept').value = "";
                document.getElementById('profile').value = "";
                document.getElementById('joindate').value = "";
                alert('Data Not Found');
            }
        }

        function gen() {
            document.getElementById('c_name').innerHTML = document.getElementById('name').value;
            document.getElementById('c_fname').innerHTML = document.getElementById('fname').value;
            document.getElementById('c_dept').innerHTML = document.getElementById('dept').value;
            document.getElementById('c_profile').innerHTML = document.getElementById('profile').value;
            document.getElementById('c_joindate').innerHTML = document.getElementById('joindate').value;
            document.getElementById('c_enddate').innerHTML = document.getElementById('enddate').value;

            document.getElementById('gen_form').style.display = 'none';
            document.getElementById('certif').style.display = '';
            $("#certif").fadeIn("slow");
        }
    </script>


</head>

<body>
    <!-- Navbar code -->

    <?php include 'include_file/page-header.html' ?>


    <!-- div for genrate certificate -->
    <div id="gen_form" class="my-5">
        <!-- Equal width cols, same on all screen sizes -->

        <div class="row">
            <div class="col" style="font-size:35px;" align="center">
                <u><b>Certificate Generation Wizard</b></u>
            </div>

        </div>
        <br>

        <!-- Equal width cols, same on all screen sizes -->
        <div class="container">
            <div class="row">
                <div class="col" align="center">
                    <div style="height: 50px;width: 200px;align-items: center;">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label"> </label>
                            <div class="col-sm-10"
                                style="height: 35px;width: 300px;border-radius: 10px;text-align: left;align-items: center;">
                                <input type="email" class="form-control" id="inputEmail3"
                                    placeholder="      Enter Emp ID">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2" align="center">
                                <button type="search" class="btn btn-primary" onclick="search()">Search</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <br>
            <br>
            <br>
            <br>

            <!-- Equal width cols, same on all screen sizes -->
            <div class="container" id="gen_form" style="display: none;">
                <div class="row">
                    <div class="col" style="font-size:15px;" align="center">
                        <table bgcolor=white bordercolor="black" style="height: 400px;width: 400px;">
                            <tr>
                                <td>


                                    <div class="card-body" align="center">
                                        <h3 class="card-title"><u>Record Details</u></h3>
                                        <br>

                                        <div>
                                            <div class="container" align="left">
                                                Name-: <input type="text" placeholder="Name" id="name"
                                                    class="form-control">
                                                <br>
                                                Father Name-: <input type="text" placeholder="Father Name" id="fname"
                                                    class="form-control">
                                                <br>
                                                Dept.-: <input type="text" placeholder="Dept." id="dept"
                                                    class="form-control">
                                                <br>
                                                Profile-: <input type="text" placeholder=" Profile" id="profile"
                                                    class="form-control">
                                                <br>
                                                Join_Date.-: <input type="text" placeholder="Join_Date" id="joindate"
                                                    class="form-control">
                                                <br>
                                                End_Date.-: <input type="date" id="enddate" class="form-control">
                                                <br>

                                            </div>
                                            <div class="card-header">

                                                <button class="btn btn-primary" id="gen"
                                                    onclick="gen()">Generate</button>
                                            </div>
                                        </div>
                                    </div>


                                </td>

                            </tr>

                        </table>
                    </div>


                </div>
            </div>
        </div>

        <br>

        <!-- Equal width cols, same on all screen sizes -->


    </div>
    `

    <!-- certificate code -->

    <div style="display: none;" id="certif">
        <div class="container w-75">
            <!-- Equal width cols, same on all screen sizes -->
            <div class="container">
                <div class="row">
                    <div class="col-2" align="right">
                        <img src="himalayan logo.jpg" class="img-fluid" alt="Responsive image">


                    </div>
                    <div class="col-10" align="center">
                        <div style="font-size: 85px;font-family: ui-sans-serif;"><b>HIMALAYAN</b></div>
                        <div style="font-size: 30px;font-family: 'Times New Roman', Times, serif;"><b><u>INSTITUTE OF
                                    TECHNOLOGY AND
                                    MANAGEMENT</u></b></div>
                        <div style="font-size: 25px;font-family: 'Times New Roman', Times, serif;">Approved by AICTE,
                            Govt. of India Affiliated to AKTU, Lucknow.</div>
                        <div style="font-size: 15px;font-family: 'Times New Roman', Times, serif;">(College Code- 465)
                        </div>
                        <div style="font-size: 25px;font-family: 'Times New Roman', Times, serif;">
                            <b><u>www.hitmlucknow.ac.in</u></b>
                        </div>


                    </div>
                </div>
            </div>
            <br>

            <!-- Equal width cols, same on all screen sizes -->
            <div class="container" align="center">
                <div class="row">
                    <div class="col">
                        <div style="font-size: 20px;font-family: 'Times New Roman', Times, serif;">
                            <B>Ref.No:</B>HITM/2021/870
                        </div>
                    </div>

                    <div class="col">
                        <div style="font-size: 20px;font-family: 'Times New Roman', Times, serif;">
                            <B>Date:</B>DD/MM/YY
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!-- Equal width cols, same on all screen sizes -->
            <div class="container" align="center">
                <div class="row">
                    <div class="col">
                        <div style="font-size: 25px;font-family: 'Times New Roman', Times, serif;"><b><u>TO WHOM IT MAY
                                    CONCERN</u></b>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Equal width cols, same on all screen sizes -->
            <div class="container" align="center">
                <div class="row">
                    <div class="col">
                        <!--  This is to certify that <b>Sonu Bharti, Sarvajeet Singh, Aakash Singh,</b> are students of B.tech (Computer Science and Engineering Branch) second year session 2021-22 Himalayan Institute of Technology And Management,Bakshi Ka Talab ,Lucknow-227005
                    Approved By AICTE , New Delhi , Affliated By Dr. A.P.J. Abdul Kalam Technical University , Lucknow. This Certificate is Being Issue on his request , as Bonafide Certificate of the Institution . -->
                        This is to certify that Mr/Ms <b id="c_name">xx</b> S/o <b id="c_fname">xx</b> worked in our
                        Department <b id="c_dept">xx</b> as <b id="c_profile">xx</b> from date <b id="c_joindate">xx</b>
                        to <b id="c_enddate">xx</b>. He/she was very hardworking employee. He/she was sincere in all
                        duties.
                        <br> We wish him all the best for future ventures. Please feel free to contact us for any other
                        information required.
                    </div>
                </div>
            </div>
            <br>

            <!-- Equal width cols, same on all screen sizes -->
            <div class="container" align="right">
                <div class="row">
                    <div class="col">
                        <h4><b>Director</b></h4+>
                    </div>
                </div>
            </div>
            <br>

            <!-- Equal width cols, same on all screen sizes -->
            <div class="container" align="center">
                <div class="row">
                    <div class="col">
                        <div
                            style="font-size: 25px;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                            HITM</div>
                        Banke Nagar Chauraha , Bakshi Ka Talab , Lucknow-227005 City Office: B-4 Lekhraj-1 , Faizabad
                        Road , Indra Nagar , Lucknow-226016 Contact No: 7897000465 , 0522-2351662, Fax No.:0522-4075328
                        , 7311111465
                        <b>E-mail: <u>hitmlkoedu465@gmail.com</u></b>
                    </div>
                </div>
            </div>
            <br>
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

    <!-- footer code -->

    <?php include 'include_file/footer.html' ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>


</html>