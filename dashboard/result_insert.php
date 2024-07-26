<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentId = $_POST["studentId"];
    $maths = $_POST["mymaths"];
    $science = $_POST["myscience"];
    $english = $_POST["myeng"];
    $nepali = $_POST["mynepali"];
    $social = $_POST["mysocial"];
    $percent = $_POST["mypercent"];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "result");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    // Check if the result for the same student already exists
$resultCheck = mysqli_query($conn, "SELECT * FROM marksheet WHERE student_id = '$studentId'");

if (mysqli_num_rows($resultCheck) > 0) {
    echo "Result for this student already exists. You can update the existing record if needed.";
    echo "<br>";
    echo '<a href="javascript:history.go(-1)" class="goback-link">Go back</a>';
}  

else {
    // Fetch student information from the register table
    $result = mysqli_query($conn, "SELECT fullname, class, roll, symbol, dob FROM register WHERE id = $studentId");
    $studentInfo = mysqli_fetch_assoc($result);

    $studentName = $studentInfo['fullname'];
    $studentClass = $studentInfo['class'];
    $studentRoll = $studentInfo['roll'];
    $studentSymbol = $studentInfo['symbol'];
    $studentdob = $studentInfo['dob'];

    // Insert grades and student information into the marksheet table
    $sql = "INSERT INTO marksheet (student_id, student_name, rollno, class, maths, science, english, nepali, social, percentage, symbol, dob) 
            VALUES ('$studentId', '$studentName', '$studentRoll', '$studentClass', '$maths', '$science', '$english', '$nepali', '$social', '$percent', '$studentSymbol', '$studentdob')";

    if (mysqli_query($conn, $sql)) {
        echo "Grades submitted successfully";
        echo "<br>";
        echo '<a href="javascript:history.go(-1)" class="goback-link">Go back</a>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
}
?>
<style>
    .goback-link {
        display: inline-block;
        padding: 5px 10px;
        background-color: #3498db;
        color: #ffffff;
        text-decoration: none;
        border-radius: 3px;
        margin-top: 10px;
    }

    .goback-link:hover {
        background-color: #2980b9;
    }
</style>
