<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../For/register.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .error{
            color:red;
            font-size:14px ;
        }


        </style>
</head>
<body>
    <div class="container">
        <div class="title">Registration</div>
        <form id="myForm" action="" method="post" onsubmit="return validate()" >
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Student Name</span>
                    <input type="text" placeholder="Enter your name" id="full" name="myname" >
                    <span id="fname" class="error"></span>
                       
                </div>
                 
                 <div class="input-box">
                    <span class="details">Symbol No</span>
                    <input type="text" placeholder="Enter your symbol no" id="symbol" name="mysymbol" >
                    <span id="symbolno" class="error"></span>
                </div>
                <div class="input-box">
                    <span class="details">Date of Birth</span>
                    <input type="date" placeholder="Enter your dob" id="date" name="mydob" >
                    <span id="dob" class="error"></span>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" placeholder="Enter your address" id="address" name="myadd" >
                    <span id="add" class="error"></span>
                </div>
                 <div class="input-box">
                    <span class="details">PhoneNumber</span>
                    <input type="text" placeholder="+977" id="phone"  name="myphn">
                    <span id="phn" class="error"></span>
                </div>
                 <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your Email" id="email"  name="myeml">
                    <span id="eml" class="error"></span>
             </div>
             
             <div class="input-box">
                    <span class="details">Class</span>
                    <select  class="select" name="dropdown" id="myclass">
   <option value="">Select Class</option>                  
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
 </select>
            <span id="cls" class="error"></span>
                </div>
                 <div class="input-box">
                 <span class="details">Roll Number</span>
                    <input type="text" placeholder="Enter Roll number" id="rolle" name="myroll">
                    <span id="rol" class="error"></span>


                </div>
</div>
                 
                <div class="button">
                    <input type="submit" value="Register" name="mybtn">
                    <button class="backbtn"><a href="Adashboard.php">Go Back</a></button>
                </div>
     </form>
    </div>

    <script>

        function isCharacterOnly(text) {
        let pattern = /^[a-zA-Z \-]+$/;    // allows uppercase and lowercase, spaces, hyphens.
        return pattern.test(text);
    }

       function isNumericOnly(text){
        let pattern=/^[0-9]+$/;
        return pattern.test(text);
       }

     function validateAddress(add){
        let pattern=/^[a-zA-Z0-9 ., -]{4,50}$/;
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

if (!acceptRoll(rollno) ) {
            document.getElementById('rol').innerHTML ="Invalid Roll ID";
            return false;
        }
else{
    
    document.getElementById('rol').innerHTML="";
}
}
    
</script>
           
</body>
</html>

<?php include '../For/crud/connection.php';
if (isset($_POST['mybtn'])) {
    $full = $_POST['myname'];
    $symbol = $_POST['mysymbol'];
    $date = $_POST['mydob'];
    $address = $_POST['myadd'];
    $phone = $_POST['myphn'];
    $email = $_POST['myeml'];
    $class = $_POST['dropdown'];
    $roll = $_POST['myroll'];


    $checkQuery = "SELECT id FROM register WHERE symbol = '$symbol'";
    $checkResult = mysqli_query($connection, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Symbol number already exists
        echo "<span class='error'>Symbol number already exists.</span>";
    } else {
        $query = "INSERT INTO register (fullname, symbol, dob, address, phoneno, email, class, roll) VALUES
        ('$full', '$symbol', '$date', '$address', '$phone', '$email', '$class', '$roll')";
       $data = mysqli_query($connection, $query);
   
       if ($data) {
           ?>
           <script>
           swal({
               title: "Success",
               text: "Data inserted",
               icon: "success",
             });
           </script>
           <?php
             }
           }
        }
           ?>  
    

    