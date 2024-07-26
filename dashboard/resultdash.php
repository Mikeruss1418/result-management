<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
      background-color:red;
    }

    .container {
        position: fixed;
      margin-top: 50px;
    left: 200px;
    }

    .form-group {
      margin-bottom: 20px;
    }
  </style>
    <title>Document</title>
    
    <link rel="stylesheet" href="dash.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>

<nav>
    <ul>
        <li>
            <a href="#" class="logo">
                <img src="../image/nepalaya.png" alt="error" >
                <span class="nav-item">DASHBOARD</span>
            </a>
        </li>
        <!-- <li><a href="dash.php">
           <i class="fas fa-home"></i>
           <span class="nav-item">Home</span>
        </a></li> -->
        <li><a href="Adashboard.php">
        <i class="fas fa-users"></i>
           <span class="nav-item">View Student</span>
        </a></li>
        <!-- <li><a href="#">
             <i class="fas fa-th-large"></i>
           <span class="nav-item">Classes</span>
        </a></li> -->
        <li><a href="resultdash.php">
        <i class="fas fa-book"></i>
           <span class="nav-item">Declare Result</span>
        </a></li>
        <li><a href="adashres.php">
        <i class="fas fa-file"></i>
           <span class="nav-item">Result</span>
        </a></li>
        <li><a href="../login.php" class="logout">
        <i class="fas fa-sign-out-alt"></i>
           <span class="nav-item">Logout</span>
        </a></li>
    </ul>
</nav>
<div class="container">
    <form method="post" action="declare_result.php">
      <div class="form-group">
        <label for="studentSelect">Select Student:</label>
        <select class="form-control" id="studentSelect" name="student">
        <?php
                // Connect to the database
                $conn = mysqli_connect("localhost", "root", "", "result");

                // Check connection
                if ($conn) {
                    echo "passed";
                }

                // Fetch student names from the database
                $result = mysqli_query($conn, "SELECT id,fullname FROM register");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['id']}'>{$row['fullname']}</option>";
                }

                // Close the database connection
                mysqli_close($conn);
            ?>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">DECLARE RESULT</button>
    </form>
  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>