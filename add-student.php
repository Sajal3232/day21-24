<?php
 require_once 'vendor/autoload.php';
 use App\classes\Student;

$message='';
 if(isset($_POST["btn"])){
    $message= Student::saveStudentInfo($_POST);
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
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Contact</td>
            <td><input type="number" name="mobail"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>
    </table>
</form>