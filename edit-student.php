<?php
 require_once 'vendor/autoload.php';
 use App\classes\Student;


 $id=$_GET['id'];
 $messageResult=Student::getStudentInfoById($id);
  $studentInfo=mysqli_fetch_assoc($messageResult);



$message='';
 if(isset($_POST["btn"])){
    $message= Student::updateStudentInfo($_POST);
 }
?>
<hr/>
<a href="add-student.php">add student</a> ||
<a href="view-student.php">view-student</a>

 <hr/>
<h2><?php echo $message;?></h2>
<form action="" method="POST">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $studentInfo['name']?>"></td>
            <td><input type="hidden" name="id" value="<?php echo $studentInfo['id']?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?php echo $studentInfo['email']?>"></td>
        </tr>
        <tr>
            <td>Contact</td>
            <td><input type="number" name="mobail" value="<?php echo $studentInfo['mobail']?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Update"></td>
        </tr>
    </table>
</form>