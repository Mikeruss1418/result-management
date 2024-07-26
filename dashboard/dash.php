<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
      }
      40% {
        transform: translateY(-20px);
      }
      60% {
        transform: translateY(-10px);
      }
    }

    .welcome-text {
     padding: 20px;
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      animation: bounce 2s infinite; /* Adjust the duration as needed */
    }
    .dashboard-section {
            text-align: center;
            margin: 100px;
            display: flex;
            justify-content:space-evenly;
        }

        .dashboard-card {
            background-color: #fff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            width: 200px;
        }

        .dashboard-card h3 {
            margin-bottom: 10px;
            color: #333;
        }

        p {
            color: #666;
            font-size: 18px;
        }
  </style>
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
        <li><a href="dash.php">
           <i class="fas fa-home"></i>
           <span class="nav-item">Home</span>
        </a></li>
        <li><a href="Adashboard.php">
        <i class="fas fa-users"></i>
           <span class="nav-item">View Student</span>
        </a></li>
        <li><a href="#">
             <i class="fas fa-th-large"></i>
           <span class="nav-item">Classes</span>
        </a></li>
        <li><a href="#">
        <i class="fas fa-book"></i>
           <span class="nav-item">Subject</span>
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
<div class="welcome-text">Welcome to Nepalaya College</div>
<div class="dashboard-section">
    <div class="dashboard-card" style="background-color: #7CB342; color: #fff;">
        <h3>Total Students Enrolled</h3>
        <p id="totalStudents">Loading...</p>
    </div>

    <div class="dashboard-card" style="background-color: #42A5F5; color: #fff;">
        <h3>Total Teachers Enrolled</h3>
        <p id="totalTeachers">Loading...</p>
    </div>

    <div class="dashboard-card" style="background-color: #FF7043; color: #fff;">
        <h3>Total Subjects</h3>
        <p id="totalSubjects">Loading...</p>
    </div>
</div>

<script>
    // Simulated data (replace this with actual data from your server/database)
    const totalStudents = 1250;
    const totalTeachers = 20;
    const totalSubjects = 5;

    // Update the content of the dashboard cards
    document.getElementById('totalStudents').textContent = totalStudents;
    document.getElementById('totalTeachers').textContent = totalTeachers;
    document.getElementById('totalSubjects').textContent = totalSubjects;
</script>
</body>
</html>