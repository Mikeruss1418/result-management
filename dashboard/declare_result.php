<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="../res/resultdec.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <style>
        .container {
            position: fixed;
            margin-top: 50px;
            left: 200px;
        }
        .error {
            color: red;
        }
    </style>
</head>

<body>
    
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $studentId = $_POST["student"];
            $conn = mysqli_connect("localhost", "root", "", "result");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $result = mysqli_query($conn, "SELECT fullname,class,roll,symbol,dob FROM register WHERE id = $studentId");
            $row = mysqli_fetch_assoc($result);

            echo "<h2>Student Information</h2>";
            echo "<p><strong>Name:</strong> {$row['fullname']}</p>";
            echo "<p><strong>Class:</strong> {$row['class']}</p>";
            echo "<p><strong>Roll Number:</strong> {$row['roll']}</p>";
            echo "<p><strong>Symbol Number:</strong> {$row['symbol']}</p>";
            echo "<p><strong>Date Of birth:</strong> {$row['dob']}</p>";

        }
            ?>
        
        <form method="post" action="result_insert.php" onsubmit="return validate()">
         <?php echo "<input type='hidden' name='studentId' value='$studentId'>"; ?>
        <div class="user-details">
    

        <div class="input-box">
            <span class="details">Maths</span>
            <input type="text" placeholder="Enter marks of maths" id="maths" name="mymaths" >
            <span id="math" class="error"></span>
               
        </div>

        <div class="input-box">
            <span class="details">Science</span>
            <input type="text" placeholder="Enter marks of science" id="science" name="myscience" >
            <span id="scien" class="error"></span>
               
        </div>
        <div class="input-box">
            <span class="details">English</span>
            <input type="text" placeholder="Enter marks of english" id="english" name="myeng" >
            <span id="eng" class="error"></span>
               
        </div>
        <div class="input-box">
            <span class="details">Nepali</span>
            <input type="text" placeholder="Enter marks of nepali" id="nepali" name="mynepali" >
            <span id="nepal" class="error"></span>
               
        </div>
        <div class="input-box">
            <span class="details">Social</span>
            <input type="text" placeholder="Enter marks of social" id="social" name="mysocial" >
            <span id="soc" class="error"></span>
               
        </div>

        <input type="hidden" name="mypercent" id="mypercent" value="">
        

                <div class="button">
                    
                
                    <input type="button" value="Calculate Percentage" onclick="calculatePercentage()" name="mypercent">
                    <input type="submit" value="Add" name="mybtn"> 
                    <?php echo "<input type='hidden' name='studentId' value='$studentId'>"; ?>
                   <a href="../dashboard/adashres.php">Go Back</a>
                </div>
        </div>

    </form>
    </div>
    <script>

      
       function validateMarks(text){
        let pattern=/^[0-9\.]+$/;
        return pattern.test(text);
       }


       function calculatePercentage() {
            var maths = parseFloat(document.getElementById("maths").value);
            var science = parseFloat(document.getElementById("science").value);
            var english = parseFloat(document.getElementById("english").value);
            var nepali = parseFloat(document.getElementById("nepali").value);
            var social = parseFloat(document.getElementById("social").value);
            var totalMarks = 500; // Assuming total marks are 500 for all subjects
            var marksObtained = maths + science + english + nepali + social;
            var percentage = (marksObtained / totalMarks) * 100;

            document.getElementById("mypercent").value = percentage;
            

        }



       function validate() {
        
        var math= document.getElementById('maths').value;
        var science= document.getElementById('science').value;
        var english= document.getElementById('english').value;
        var nepali= document.getElementById('nepali').value;
        var social= document.getElementById('social').value;
 
   
    if(math==""){
        document.getElementById('math').innerHTML="Enter marks of maths";
        return false;
    }
    else if(!validateMarks(math)){
        document.getElementById('math').innerHTML ="Invalid marks";
            return false;
    }
    else if(math<0 || math>100){
        document.getElementById('math').innerHTML ="Number must be between 0-100";
            return false;
    }
    else{
            document.getElementById('math').innerHTML = "";
       
    }

    if(science==""){
        document.getElementById('scien').innerHTML="Enter marks of science";
        return false;
    }
    else if(!validateMarks(science)){
        document.getElementById('scien').innerHTML ="Invalid marks";
            return false;
    }
    else if(science<0 || science>100){
        document.getElementById('scien').innerHTML ="Number must be between 0-100";
            return false;
    }
    else{
            document.getElementById('scien').innerHTML = "";
       
    }

    if(english==""){
        document.getElementById('eng').innerHTML="Enter marks of english";
        return false;
    }
    else if(!validateMarks(english)){
        document.getElementById('eng').innerHTML ="Invalid marks";
            return false;
    }
    else if(english<0 || english>100){
        document.getElementById('eng').innerHTML ="Number must be between 0-100";
            return false;
    }
    else{
            document.getElementById('eng').innerHTML = "";
       
    }

    if(nepali==""){
        document.getElementById('nepal').innerHTML="Enter marks of nepali";
        return false;
    }
    else if(!validateMarks(nepali)){
        document.getElementById('nepal').innerHTML ="Invalid marks";
            return false;
    }
    else if(nepali<0 || nepali>100){
        document.getElementById('nepal').innerHTML ="Number must be between 0-100";
            return false;
    }
    else{
            document.getElementById('nepal').innerHTML = "";
       
    }

    if(social==""){
        document.getElementById('soc').innerHTML="Enter marks of social";
        return false;
    }
    else if(!validateMarks(social)){
        document.getElementById('soc').innerHTML ="Invalid marks";
            return false;
    }
    else if(social<0 || social>100){
        document.getElementById('soc').innerHTML ="Number must be between 0-100";
            return false;
    }
    else{
            document.getElementById('soc').innerHTML = "";
       
    }
    
    }

       </script>
       </body>
</html>
       

