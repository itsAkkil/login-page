<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo 'Registration Page'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <!-- header start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="gju_final_logo_one_new1.jpg" alt="logo" width="1100" height="150">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <span class="navbar-text">
                    <img src="gjulogofinalone.png" alt="logo" width="170" height="150">
                </span>
            </div>
        </div>
    </nav>
    <!-- Header end -->

    <!-- Navbar part 2 start -->
    <div class="nav2 mt-2">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="registration_page.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar part 2 end -->

    <main>
        
        <?php
        // Form Backend 
        
            
            
         
        ?>

<?php
    // Form Backend: Handle form submission
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        // Retrieve form data after form submission
        $ad_year = $_POST['admissionYear'];
        $programme = $_POST['programme'];
        $studentName = $_POST['studentName'];
        $fatherName = $_POST['fatherName'];
        $motherName = $_POST['motherName'];
        $feeCategory = $_POST['feeCategory'];
        $candidateCategory = $_POST['candidateCategory'];
        $applicationFee = $_POST['applicationFee'];
        $studentContactNo = $_POST['studentContactNo'];
        $alternateNumber = $_POST['alternateNumber'];
        $studentEmail = $_POST['studentEmail'];

        // Connection to database
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = "student";  // Corrected database name

        // Creating connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Sorry, we failed to connect: " . mysqli_connect_error());
        } else {
            // SQL query to insert data
            $sql = "INSERT INTO `registrationdetails` (`Admission Year`, `Programme`, `Student Name`, `Father Name`, `Mother Name`, `Fee Category`, `Candidate category`, `Application Fee( in Rs.)`, `Student Contact No.`, `Alternate Mobile Number`, `Student email`, `Date Time`) VALUES ('$ad_year', '$programme', '$studentName', '$fatherName', '$motherName', '$feeCategory', '$candidateCategory', '$applicationFee', '$studentContactNo', '$alternateNumber', '$studentEmail',NOW());";

            

            // Execute the query
            $result = mysqli_query($conn, $sql);

            // Display success or error message
            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Registration Success!</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
            } else {
                echo 'The record was not inserted successfully: error --> ' . mysqli_error($conn);
            }
        }
    }
    ?>




        <!-- REGISTRATION  start -->
        <div class="container mt-5">
            <h2 class="mb-4">Student Admission Form</h2>
            <form action="/php_lms/registration_page.php" method="post">

                <!-- Admission Year -->
                <div class="mb-3">
                    <label for="admissionYear" class="form-label">Admission Year</label>
                    <input type="number" name="admissionYear" class="form-control" id="admissionYear" required>
                </div>

                <!-- Programme -->
                <div class="mb-3">
                    <label for="programme" class="form-label">Programme*</label>
                    <select name="programme" class="form-select" id="programme" required>
                        <option value="">Select a Programme</option>
                        <option value="M.A. (Mass Communication)-Two Years">M.A. (Mass Communication)-Two Years</option>
                        <option value="M.Sc. (Mathematics)-Two Years">M.Sc. (Mathematics)-Two Years</option>
                        <option value="B.A. (Mass Comm.)-Three Years">B.A. (Mass Comm.)-Three Years</option>
                        <option value="B.A. (Bachelor of Arts)-Three Years">B.A. (Bachelor of Arts)-Three Years</option>
                        <option value="B.Com. (Bachelor of Commerce)-Three Years">B.Com. (Bachelor of Commerce)-Three Years</option>
                        <option value="MASTER OF COMMERCE (2 YEARS)">MASTER OF COMMERCE (2 YEARS)</option>
                        <option value="Master of Business Administration (2 YEARS)">Master of Business Administration (2 YEARS)</option>
                        <option value="Master of Computer Applications (2 Years)">Master of Computer Applications (2 Years)</option>
                        <option value="M.A.(Mass Communication) (Lateral Entry)-One Year">M.A.(Mass Communication) (Lateral Entry)-One Year</option>
                        <option value="MASTER OF BUSINESS ADMINISTRATION - Lateral Entry">MASTER OF BUSINESS ADMINISTRATION - Lateral Entry</option>
                        <option value="MBA ( With one Additional Specialization) (1 YEAR)">MBA ( With one Additional Specialization) (1 YEAR)</option>
                        <option value="MASTER OF BUSINESS ADMINSTRATIVE (MBA)">MASTER OF BUSINESS ADMINSTRATIVE (MBA)</option>
                        <option value="MASTER OF COMMERCE (M.COM)">MASTER OF COMMERCE (M.COM)</option>
                        <option value="M.A. (MASS COMMUNICATION)">M.A. (MASS COMMUNICATION)</option>
                        <option value="M.A. (MASS COMMUNICATION) LATERAL ENTRY">M.A. (MASS COMMUNICATION) LATERAL ENTRY</option>
                        <option value="MASTER OF COMPUTER APPLICATION (MCA)">MASTER OF COMPUTER APPLICATION (MCA)</option>
                        <option value="MASTER OF SCIENCE (MSC-MATH)">MASTER OF SCIENCE (MSC-MATH)</option>
                        <option value="B.A. (MASS COMMUNICATION)">B.A. (MASS COMMUNICATION)</option>
                        <option value="BACHELOR OF COMMERCE (B.COM.) ODL MODE">BACHELOR OF COMMERCE (B.COM.) ODL MODE</option>
                        <option value="BACHELOR OF ARTS (B.A.)">BACHELOR OF ARTS (B.A.)</option>
                        <option value="M.A. (English)">M.A. (English)</option>
                    </select>
                </div>

                        <!-- Registration Fee (Readonly) -->
                <div class="mb-3">
                    <label for="registrationFee" class="form-label">Registration Fee (in Rs.)</label>
                    <input type="text" name="registrationFee" class="form-control" id="registrationFee" readonly>
                </div>

                <!-- Eligibility Criteria (Readonly) -->
                <div class="mb-3">
                    <label for="eligibilityCriteria" class="form-label">Eligibility Criteria</label>
                    <textarea name="eligibilityCriteria" class="form-control" id="eligibilityCriteria" rows="3" readonly></textarea>
                </div>

                <!-- Student Name -->
                <div class="mb-3">
                    <label for="studentName" class="form-label">Student Name*</label>
                    <input type="text" name="studentName" class="form-control" id="studentName" required>
                </div>

                <!-- Father Name -->
                <div class="mb-3">
                    <label for="fatherName" class="form-label">Father Name*</label>
                    <input type="text" name="fatherName" class="form-control" id="fatherName" required>
                </div>
                <!-- Mother Name -->
                <div class="mb-3">
                    <label for="motherName" class="form-label">Mother Name*</label>
                    <input type="text" name="motherName" class="form-control" id="motherName" required>
                </div>

                <!-- Student Category -->
                <div class="mb-3">
                    <label for="studentCategory" class="form-label">Student Category*</label>
                    <select name="studentCategory" class="form-select" id="studentCategory" required>
                        <option value="">Select a Category</option>
                        <option value="General of Haryana">General of Haryana</option>
                        <option value="EWS of Haryana">EWS of Haryana</option>
                        <option value="SC of Haryana">SC of Haryana</option>
                        <option value="DSC of Haryana">DSC of Haryana</option>
                        <option value="BC-A of Haryana">BC-A of Haryana</option>
                        <option value="BC-B of Haryana">BC-B of Haryana</option>
                        <option value="General of Other State">General of Other State</option>
                        <option value="SC of Other State">SC of Other State</option>
                        <option value="ST of Other State">ST of Other State</option>
                        <option value="OBC of Other State">OBC of Other State</option>
                    </select>
                </div>



                <!-- Fee Category -->
                <div class="mb-3">
                    <label for="feeCategory" class="form-label">Fee Category*</label>
                    <select name="feeCategory" class="form-select" id="feeCategory" required>
                        <option value="">Select a Fee Category</option>
                        <option value="Full Fee Payable Category">Full Fee Payable Category</option>
                        <option value="University Employees GJUS&T, Hisar (50% concession)">University Employees GJUS&T, Hisar (50% concession)</option>
                        <option value="University Employees Class-III GJUS&T, Hisar (75% concession)">University Employees Class-III GJUS&T, Hisar (75% concession)</option>
                        <option value="University Employees Class-IV GJUS&T, Hisar (Full concession)">University Employees Class-IV GJUS&T, Hisar (Full concession)</option>
                        <option value="Wards of Deceased Employee GJUS&T, Hisar (100% Tuition Fee Waiver)">Wards of Deceased Employee GJUS&T, Hisar (100% Tuition Fee Waiver)</option>
                        <option value="Regular Courses Students (25% concession)">Regular Courses Students (25% concession)</option>
                        <option value="SC Students of Haryana (family income up to Rs.2.5 Lakhs)">SC Students of Haryana (family income up to Rs.2.5 Lakhs)</option>
                        <option value="Military Personnel & their Wards upto NCO Rank (25% concession)">Military Personnel & their Wards upto NCO Rank (25% concession)</option>
                        <option value="University Contractual Employees GJUS&T, Hisar (25% concession)">University Contractual Employees GJUS&T, Hisar (25% concession)</option>
                    </select>
                </div>

                <!-- Candidate Category -->
                <div class="mb-3">
                    <label for="candidateCategory" class="form-label">Candidate Category*</label>
                    <select name="candidateCategory" class="form-select" id="candidateCategory" required>
                        <option value="regular">Regular</option>
                        <option value="distance">Distance</option>
                        <option value="international">International</option>
                    </select>
                </div>
                <!-- Application Fee -->
                <div class="mb-3">
                    <label for="applicationFee" class="form-label">Application Fee (in Rs)</label>
                    <input type="number" name="applicationFee" class="form-control" id="applicationFee" required>
                </div>
                <!-- Student Contact No -->
                <div class="mb-3">
                    <label for="studentContactNo" class="form-label">Student Contact No*</label>
                    <input type="tel" name="studentContactNo" class="form-control" id="studentContactNo" pattern="[0-9]{10}" required>
                </div>
                <!-- Alternate Number -->
                <div class="mb-3">
                    <label for="alternateNumber" class="form-label">Alternate Number</label>
                    <input type="tel" name="alternateNumber" class="form-control" id="alternateNumber" pattern="[0-9]{10}">
                </div>
                <!-- Student Email -->
                <div class="mb-3">
                    <label for="studentEmail" class="form-label">Student Email*</label>
                    <input type="email" name="studentEmail" class="form-control" id="studentEmail" required>
                </div>
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <script>
            // Set the current year in the Admission Year field by default
            document.getElementById('admissionYear').value = new Date().getFullYear();
        </script>
        <!-- Login end -->
    </main>

    <footer>
        <!-- Add footer content here if needed -->
    </footer>

     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
    // When the program is changed, fetch the corresponding fee and eligibility criteria
    $('#programme').change(function() {
        var program_id = $(this).val();

        if (program_id) {
            $.ajax({
                url: 'get_program_info.php',  // PHP script to fetch program data
                type: 'GET',
                data: { program_id: program_id },
                dataType: 'json',
                success: function(data) {
                    if (data.error) {
                        alert(data.error);
                    } else {
                        // Populate the fee and eligibility fields
                        $('#fee').val(data.fee);
                        $('#eligibility').val(data.eligibility_criteria);
                    }
                },
                error: function(xhr, status, error) {
                    alert("An error occurred while fetching the data: " + error);
                }
            });
        } else {
            $('#fee').val('');
            $('#eligibility').val('');
        }
    });
</script>
</body>

</html>