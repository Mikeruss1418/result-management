<?php include'../For/crud/connection.php';
$id=$_GET['id'];
$query=" SELECT * FROM marksheet WHERE id='$id'";
$data=mysqli_query($connection, $query);
$row=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../For/register.css">
    <style>
        .error{
            color:red;
            font-size:14px ;
        }
    
        </style>
</head>
<body>
    <div class="container">
        <div class="title">Result</div>


        <form method="post" action="" onsubmit="return validate()">
        <div class="user-details">
    

        <div class="input-box">
            <span class="details">Maths</span>
            <input type="text" placeholder="Enter marks of maths" id="maths" name="mymaths" value="<?php echo $row['maths'];?>">
            <span id="math" class="error"></span>
               
        </div>
        <div class="input-box">
            <span class="details">Science</span>
            <input type="text" placeholder="Enter marks of science" id="science" name="myscience" value="<?php echo $row['science'];?>" >
            <span id="scien" class="error"></span>
               
        </div>
        <div class="input-box">
            <span class="details">English</span>
            <input type="text" placeholder="Enter marks of english" id="english" name="myeng" value="<?php echo $row['english'];?>">
            <span id="eng" class="error"></span>
               
        </div>
        <div class="input-box">
            <span class="details">Nepali</span>
            <input type="text" placeholder="Enter marks of nepali" id="nepali" name="mynepali" value="<?php echo $row['nepali'];?>" >
            <span id="nepal" class="error"></span>
               
        </div>
        <div class="input-box">
            <span class="details">Social</span>
            <input type="text" placeholder="Enter marks of social" id="social" name="mysocial" value="<?php echo $row['social'];?>">
            <span id="soc" class="error"></span>
               
        </div>

        <input type="hidden" name="mypercent" id="mypercent" value="">
        

                <div class="button">
                    
                
                    <input type="button" value="Update Percentage" onclick="calculatePercentage()" name="mypercent">
                    <input type="submit" value="Update" name="mybtn"> 
                    <button class="backbtn"><a href="../dashboard/adashres.php">Go Back</a></button>
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

<?php 
if(isset($_POST['mybtn'])){

    $maths=$_POST['mymaths'];
    $science=$_POST['myscience'];
    $english=$_POST['myeng'];
    $nepali=$_POST['mynepali'];
    $social=$_POST['mysocial'];
    $percent= $_POST['mypercent'];

    $query= "UPDATE marksheet SET maths='$maths', science='$science', english='$english', nepali='$nepali',social='$social',percentage='$percent' WHERE id='$id'";
    $data= mysqli_query($connection, $query);
    if($data){
       ?>
       <script>
            swal("Nice", "Data Update Successfully ", "success");
            

            
        </script>
       

       <?php
    }
    else{
        ?>
    <script>
        alert("data updated successfully");
    </script>
    <?php
    }
}
?>