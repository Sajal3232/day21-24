<?php
namespace App\Classes;


class Student{

    protected $link;

    private function dbConnection(){
     $hostname="localhost";
     $username="root";
     $password="";
     $db="bitm";
     $link=mysqli_connect($hostname,$username,$password,$db);
     return $link;
    }

    public function saveStudentInfo($data){
     $sql="INSERT INTO students(name,email,mobail) VALUES ('$data[name]','$data[email]','$data[mobail]')";
   if(mysqli_query(Student::dbConnection(),$sql)){
      $message="student information save successfully";
      return $message;
   }else{
       die("error problem".mysqli_error(Student::dbConnection()));
   };


    }


    public function viewStudentInfo(){
        $sql="SELECT * FROM students";
        if(mysqli_query(Student::dbConnection(),$sql)){
            $messageResult=mysqli_query(Student::dbConnection(),$sql);
            return $messageResult;
            
         }else{
             die("error problem".mysqli_error(Student::dbConnection()));
         };



    }


        public function getStudentInfoById($id){
            $sql="SELECT * FROM students WHERE id='$id' ";
           
            if(mysqli_query(Student::dbConnection(),$sql)){
                $messageResult=mysqli_query(Student::dbConnection(),$sql);
                return $messageResult;
                
             }else{
                die("error problem".mysqli_error(Student::dbConnection()));
            };
   
   
   
        }

        public function updateStudentInfo($data){
            $sql= "UPDATE students SET name='$data[name]',email='$data[email]', mobail='$data[mobail]' WHERE id='$data[id]' ";

            if(mysqli_query(Student::dbConnection(),$sql)){
               header('Location:view-student.php');
                
             }else{
                die("error problem".mysqli_error(Student::dbConnection()));
            };
        }


        public function deleteStudentInfo($id){
            $sql="DELETE FROM students WHERE id='$id'";

            if(mysqli_query(Student::dbConnection(),$sql)){
               $message="delete student information successfully" ;
               return $message;                
              }else{
                 die("error problem".mysqli_error(Student::dbConnection()));
             };
        }
    
}


?>