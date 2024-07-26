<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<div class="display">
<?php include'../For/crud/connection.php';?>
<button class="regbtn"><a href="add.php" >Add</a></button>  
<h2 align="center"><mark>Displaying Student Details</mark></h2>
<table>
    <tr>
  
    <th>Student Name</th>
    <th>Symbol No</th>
    <th>Dob</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Class</th>
    <th>Roll Number</th>
    <th>Action</th>
    </tr>
  <?php
  $query="SELECT * FROM register";
  $data=mysqli_query($connection,$query);
  $result=mysqli_num_rows($data);
  if($data){
    while($row=mysqli_fetch_assoc($data)){
        ?>
        <tr>
        <td><?php echo $row['fullname'];?></td>
        <td><?php echo $row['symbol'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['address'];?></td>
        <td><?php echo $row['phoneno'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['class'];?></td>
        <td><?php echo $row['roll'];?></td>
        <td class="del">
            <a href="update.php?id=<?php echo $row['id'];?>">Update</a>
            <a  href="delete.php?id=<?php echo$row['id']; ?>" class='del-btn'>Delete</a>
           
        </td>
        </tr>
        <?php
    }
  }
  ?>
</table>


<?php
if(isset($_GET['m'])){
?>
<div class="flash-data" data-flashdata="<?php echo $_GET['m'];?>"></div>
<?php
}
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
$('.del-btn').on('click',function(e){
e.preventDefault();
const href = $(this).attr('href')
Swal.fire({
  title: 'Are you sure want to delte',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancleButton: true,
  confirmButtomColor: '#3085d6',
  cancleButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it'

}).then((result)=>{
  if (result.value){
    document.location.href = href;
  }

})
});
const flashdata = $('.flash-data').data('flashdata')
if(flashdata){
  swal.fire({
    type: 'success',
    title: 'Record Deleted',
    text: 'Record has been deleted'
  })
}
</script>
</body>
</html>