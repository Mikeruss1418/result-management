<?php
include '../For/crud/connection.php';

$id = $_GET['id'];
$query = "SELECT * FROM register WHERE id='$id'";
$data = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($data);

if (isset($_POST['mybtn'])) {
    $name = $_POST['myname'];
    $symbol = $_POST['mysymbol'];
    $dob = $_POST['mydob'];
    $add = $_POST['myadd'];
    $phone = $_POST['myphn'];
    $email = $_POST['myeml'];
    $cls = $_POST['dropdown'];
    $roll = $_POST['myroll'];

    // Check if the new symbol already exists in the database
    $checkSymbolQuery = "SELECT * FROM register WHERE symbol='$symbol' AND id != '$id'";
    $checkSymbolData = mysqli_query($connection, $checkSymbolQuery);

    if (mysqli_num_rows($checkSymbolData) > 0) {
        $symbolError = 'Symbol number already exists.';
    } else {
        // Update register table
        $updateRegisterQuery = "UPDATE register SET fullname='$name', symbol='$symbol', dob='$dob', address='$add', phoneno='$phone', email='$email', class='$cls', roll='$roll' WHERE id='$id'";
        $updateRegisterData = mysqli_query($connection, $updateRegisterQuery);

        // Update marksheet table
        $updateMarksheetQuery = "UPDATE marksheet SET student_name='$name', rollno='$roll', class='$cls', symbol='$symbol', dob='$dob' WHERE student_id='$id'";
        $updateMarksheetData = mysqli_query($connection, $updateMarksheetQuery);

        if ($updateRegisterData && $updateMarksheetData) {
            echo '<script  src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
                    swal({
                        title: "Nice",
                        text: "Data Update Successfully",
                        icon: "success",
                        button: "OK"
                    }).then(function() {
                        window.location.replace("Adashboard.php");
                    });
                  </script>';
        } else {
            echo '<script>
                    swal({
                        title: "Error",
                        text: "Error updating data.",
                        icon: "error",
                        button: "OK"
                    });
                  </script>';
        }
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../For/register.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .err{
            position: relative;
            top: 10px;
        }

        .error{
            color:red;
            font-size:14px ;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Registration</div>
        <form id="myForm" action="" method="post" onsubmit="return validate()">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Student Name</span>
                    <input type="text" placeholder="Enter your name" id="full" name="myname" value="<?php echo $row['fullname'];?>" >
                    <span id="fname" class="error"></span>
                </div>
                <div class="input-box">
    <span class="details">Symbol No</span>
    <input type="text" placeholder="Enter your symbol" id="symbol" name="mysymbol" value="<?php echo $row['symbol'];?>">
    <span id="symbolno" class="error"></span>
    <?php
    if (isset($symbolError) && !empty($symbolError)) {
        echo '<span class="err" style="color: red;">' . $symbolError . '</span>';
    }
    ?>
</div>
                <div class="input-box">
                    <span class="details">Date of Birth</span>
                    <input type="date" placeholder="Enter your dob" id="date" name="mydob" value="<?php echo $row['dob'];?>" >
                    <span id="dob" class="error"></span>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" placeholder="Enter your address" id="address" name="myadd" value="<?php echo $row['address'];?>" >
                    <span id="add" class="error"></span>
                </div>
                <div class="input-box">
                    <span class="details">PhoneNumber</span>
                    <input type="text" placeholder="+977" id="phone"  name="myphn" value="<?php echo $row['phoneno'];?>">
                    <span id="phn" class="error"></span>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your Email" id="email"  name="myeml" value="<?php echo $row['email'];?>">
                    <span id="eml" class="error"></span>
                </div>
                <div class="input-box">
                    <span class="details">Class</span>
                    <select  class="select" name="dropdown" id="myclass">
                        <?php
                        // ... (existing code for class dropdown)
                        if($row['class']==='1'){
                            ?>
                            <option value="">Select Class</option>                  
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <?php
                          }else if($row['class']==='2'){
                            ?>
                            <option value="">Select Class</option>                  
                            <option value="1" >1</option>
                            <option value="2" selected>2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <?php
                          }
                          else if($row['class']==='3'){
                            ?>
                            <option value="">Select Class</option>                  
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" selected>3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <?php
                          }
                          else if($row['class']==='4'){
                            ?>
                            <option value="">Select Class</option>                  
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <?php
                          }
                          else if($row['class']==='5'){
                            ?>
                            <option value="">Select Class</option>                  
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                            <option value="5" selected>5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <?php
                          }
                          else if($row['class']==='6'){
                            ?>
                            <option value="">Select Class</option>                  
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                            <option value="5" >5</option>
                            <option value="6" selected>6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <?php
                          }
                          else if($row['class']==='7'){
                            ?>
                            <option value="">Select Class</option>                  
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                            <option value="5" >5</option>
                            <option value="6" >6</option>
                            <option value="7" selected>7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <?php
                          }
                          else if($row['class']==='8'){
                            ?>
                            <option value="">Select Class</option>                  
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                            <option value="5" >5</option>
                            <option value="6" >6</option>
                            <option value="7">7</option>
                            <option value="8" selected>8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <?php
                          }
                          else if($row['class']==='9'){
                            ?>
                            <option value="">Select Class</option>                  
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                            <option value="5" >5</option>
                            <option value="6" >6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9" selected>9</option>
                            <option value="10">10</option>
                            <?php
                          }
                          else{
                            ?>
                            <option value="">Select Class</option>                  
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                            <option value="5" >5</option>
                            <option value="6" >6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10" selected>10</option>
                            <?php
                      }
                      ?>
                    </select>
                    <span id="cls" class="error"></span>
                </div>
                <div class="input-box">
                    <span class="details">Roll Number</span>
                    <input type="text" placeholder="Enter Roll Number" id="rolle" name="myroll" value="<?php echo $row['roll'];?>">
                    <span id="rol" class="error"></span>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Update" name="mybtn">
                <button class="backbtn"><a href="Adashboard.php">Go Back</a></button>
            </div>
        </form>
    </div>

    <script>
        // ... (existing code for JavaScript validation)
        function isCharacterOnly(text) {
        let pattern = /^[a-zA-Z \-]+$/;    // allows uppercase and lowercase, spaces, hyphens.
        return pattern.test(text);
    }

       function isNumericOnly(text){
        let pattern=/^[0-9]+$/;
        return pattern.test(text);
       }


     function validateAddress(add){
        let pattern=/^[a-zA-Z0-9 ., \/ \-]{4,50}$/;
        return pattern.test(add);

     }
   
     function validatePhone(phone) {
  var pattern = /^\d{10}$/;
  return pattern.test(phone);
}

function validateEmail(email) {
    
    var pattern = /^[a-zA-Z][a-zA-Z0-9._]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/;
    return pattern.test(email);
}

function acceptRoll(text){
    var pattern = /^[1-9]\d*$/;
        return pattern.test(text);
       }


    function validate() {
        
            var name= document.getElementById('full').value;
            var symbol= document.getElementById('symbol').value;
            var dob= document.getElementById('date').value;
            var add= document.getElementById('address').value;
            var phone= document.getElementById('phone').value;
            var email= document.getElementById('email').value;
            var clss= document.getElementById('myclass').value;
            var rollno= document.getElementById('rolle').value;
            
        if (name==="") {
            document.getElementById('fname').innerHTML = "Enter your full name";
            return false;
        }
        
        if (!isCharacterOnly(name)) {
            document.getElementById('fname').innerHTML ="Name can't contain number and special character";
            return false;
        }
        
        if (name.length < 2 || name.length > 50) {
            document.getElementById('fname').innerHTML = "Name must be between 2 -50 letters";
            return false;
        }
        else{
            document.getElementById('fname').innerHTML = "";
       
    }

    if(symbol===""){
        document.getElementById('symbolno').innerHTML="Enter your symbol number";
        return false;
    }

if (!isNumericOnly(symbol) || symbol[0] === '0') {
    document.getElementById('symbolno').innerHTML = "Invalid symbol number";
    return false;
}

else{
    document.getElementById('symbolno').innerHTML="";
     
}
if(dob===""){
    document.getElementById('dob').innerHTML="Enter your date of birht";
    return false;
}
else{
    document.getElementById('dob').innerHTML="";
       
}

if(add===""){
    document.getElementById('add').innerHTML="Enter your address";
        return false;
}

if(!validateAddress(add)){
    document.getElementById('add').innerHTML="Invalid address";
        return false;
}
else{
    document.getElementById('add').innerHTML=""; 
}
if(phone===""){
    document.getElementById('phn').innerHTML="Enter your phone number";
        return false;
}
if(!validatePhone(phone)){
    document.getElementById('phn').innerHTML="Invalid phone number";
        return false;
}
else{
    document.getElementById('phn').innerHTML="";
       
}
if(email===""){
    document.getElementById('eml').innerHTML="Enter your email";
        return false;
}
if(!validateEmail(email)){
    document.getElementById('eml').innerHTML="Invalid email";
        return false;
}
else{
    document.getElementById('eml').innerHTML="";
     
}
if(clss===""){
    document.getElementById('cls').innerHTML="Enter your class";
    return false;
}
else{
    
    document.getElementById('cls').innerHTML="";
}
if(rollno===""){
    document.getElementById('rol').innerHTML="Enter your Roll Id";
    return false;
}
if(!acceptRoll(rollno)){
    document.getElementById('rol').innerHTML="Invalid Roll ID"; 
    return false;
}
else{
    document.getElementById('rol').innerHTML=""; 
}

}
    </script>
</body>
</html>
