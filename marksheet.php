<?php include 'For/crud/connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Mark</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f8f8f8;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        .status {
            width: 120px;
            height: 30px;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            margin-top: 20px;
        }

        .pass {
            background-color: #4CAF50; 
        }

        .fail {
            background-color: #FF5733; 
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Mark Sheet</h1>
    <?php 
    if(isset($_POST['mybtn'])){
        $symbol = $_POST['mysymbol'];
        $dob = $_POST['mydob'];

        $query = "SELECT * FROM marksheet WHERE symbol='$symbol' AND dob='$dob'";
        $data = mysqli_query($connection, $query);
        $result = mysqli_num_rows($data);

        if($result > 0) {
            while ($row = mysqli_fetch_assoc($data)) {
    ?>
                <p><b>Student name:</b> <?php echo $row['student_name']; ?></p>
                <p><b>Roll number: </b> <?php echo $row['rollno']; ?></p>
                <p><b>Class:</b> <?php echo $row['class']; ?></p>
                <p><b>Symbol No:</b> <?php echo $row['symbol']; ?></p>
                <p><b>Date Of Birth:</b> <?php echo $row['dob']; ?></p>

                <table>
                    <tr>
                        <th>Subject</th>
                        <th>Marks</th>
                    </tr>
                    <tr>
                        <td>Math</td>
                        <td><?php echo $row['maths']; ?></td>
                    </tr>
                    <tr>
                        <td>Science</td>
                        <td><?php echo $row['science']; ?></td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td><?php echo $row['english']; ?></td>
                    </tr>
                    <tr>
                        <td>Nepali</td>
                        <td><?php echo $row['nepali']; ?></td>
                    </tr>
                    <tr>
                        <td>Social</td>
                        <td><?php echo $row['social']; ?></td>
                    </tr>

                    <tr>
                        <td>Percentage</td>
                        <td><?php echo $row['percentage']; ?>%</td>
                    </tr>
                    <tr>
                        <td> <b> Grade </b></td>
                        <td><b>
                            <?php 
                            $percentage = $row['percentage'];

                            // Check if any subject has marks less than 40
                            if ($row['maths'] < 40 || $row['science'] < 40 || $row['english'] < 40 || $row['nepali'] < 40 || $row['social'] < 40) {
                                // If failed, set grade to 'NG'
                                echo '<b>NG</b>';
                            } else {
                                // If passed, display grade based on percentage
                                if ($percentage >= 90) {
                                    echo '<b>A+</b>';
                                } elseif ($percentage >= 80) {
                                    echo '<b>A</b>';
                                } elseif ($percentage >= 70) {
                                    echo '<b>B+</b>';
                                } elseif ($percentage >= 60) {
                                    echo '<b>B</b>';
                                } elseif ($percentage >= 50) {
                                    echo '<b>C+</b>';
                                } elseif ($percentage >= 40) {
                                    echo '<b>C</b>';
                                } else {
                                    // This case should not occur, but handle it just in case
                                    echo '<b>NG</b>';
                                }
                            }
                            ?></b>
                        </td>
                    </tr>
                    <tr>
                        <td> <b> Status </b></td>
                        <td><b>
                            <?php 
                            $maths = $row['maths'];
                            $science = $row['science'];
                            $english = $row['english'];
                            $nepali = $row['nepali'];
                            $social = $row['social'];

                            // Check if any subject has marks less than 40
                            if ($maths < 40 || $science < 40 || $english < 40 || $nepali < 40 || $social < 40) {
                                // If failed, set status to 'Fail'
                                echo '<span class="status fail">Fail</span>';
                            } else {
                                // If passed, set status to 'Pass'
                                echo '<span class="status pass">Pass</span>';
                            }
                            ?></b>
                        </td>
                    </tr>
                </table>
            <?php
            }
        } else {
            echo "No matching records found.";
        }
    ?>
</div>
</body>
</html>
<?php
}
?>
