<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
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
                    <span class="details">FullName</span>
                    <input type="text" placeholder="Enter your name" id="full" name="myname" >
                    <span id="fname" class="error"></span>
                       
                </div>
                 
                 <div class="input-box">
                    <span class="details">UserName</span>   
                    <input type="text" placeholder="Enter your username" id="user" name="myuname" >
                    <span id="uname" class="error"></span>
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
                    <input type="text" placeholder="Enter Roll number" id="roll" name="myroll" >
                    <span id="rol" class="error"></span>

                </div>
</div>
                 
                <div class="button">
                    <input type="submit" value="Register" name="mybtn">
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

     function validateUsername(username){
        let pattern=/^[a-zA-Z0-9_.]{3,20}$/;
        return pattern.test(username);

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
        let pattern=/^[1-9]+$/;
        return pattern.test(text);
       }


    function validate() {
        
            var name= document.getElementById('full').value;
            var username= document.getElementById('user').value;
            var dob= document.getElementById('date').value;
            var add= document.getElementById('address').value;
            var phone= document.getElementById('phone').value;
            var email= document.getElementById('email').value;
            var clss= document.getElementById('myclass').value;
            var roll= document.getElementById('roll').value;
            
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

    if(username===""){
        document.getElementById('uname').innerHTML="Enter your username";
        return false;
    }
if(!validateUsername(username)){
    document.getElementById('uname').innerHTML="Invalid username";
        return false;
}
else{
    document.getElementById('uname').innerHTML="";
     
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


if(roll===""){
    document.getElementById('rol').innerHTML="Enter your Roll Id";
    return false;
}
if (!acceptRoll(roll)) {
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

<?php include 'crud/connection.php';
if (isset($_POST['mybtn'])) {
    $full = $_POST['myname'];
    $user = $_POST['myuname'];
    $date = $_POST['mydob'];
    $address = $_POST['myadd'];
    $phone = $_POST['myphn'];
    $email = $_POST['myeml'];
    $class = $_POST['dropdown'];
    $roll = $_POST['myroll'];

    $query = "INSERT INTO register (fullname, username, dob, address, phoneno, email, class, roll) VALUES
     ('$full', '$user', '$date', '$address', '$phone', '$email', '$class', '$roll')";
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
        ?>
         