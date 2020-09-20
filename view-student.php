<?php
 require_once 'vendor/autoload.php';
 use App\classes\Student;

$message='';
    $messageResult= Student::viewStudentInfo();

    // $student=mysqli_fetch_assoc($messageResult);

    // echo '<pre>';
    // print_r($student);

    if(isset($_GET['delete'])){
        $id=$_GET['id'];
        $message=Student::deleteStudentInfo($id);

    }

 
?>
<hr/>
<a href="add-student.php">add student</a>
<a href="view-student.php">view-student</a>
 
 <hr/>
<h2><?php echo $message;?></h2>

<table border="1" width=>
    <tr> 

         <th>ID</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Mobail</th>
        <th>Active</th>
    </tr>
    <?php while($student=mysqli_fetch_assoc($messageResult)){ ?>
    <tr> 
        <td><?php echo $student['id']?></td>
        <td><?php echo $student['name']?></td>
        <td><?php echo $student['email']?></td>
        <td><?php echo $student['mobail']?></td>
        <td>
            <a href="edit-student.php?id=<?php echo $student['id']?>">Edit</a>
            <a href="?delete=true&id=<?php echo $student['id']?>">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
