<?php
namespace Mini\Controller;

use Mini\Core\View;
use Mini\Model\Register;


class RegisterController
{
    var $View;
    public $msg;
   
    function __construct() {
        $this->View = new View();
        $this->msg = new \Mini\Libs\FlashMessages();
    }


    public function staff()
    {
        if(isset($_POST['regTeachingStaffBtn'])){

            $fileName = $_FILES['file']['name'];
            $temporaryFile = $_FILES['file']['tmp_name'];

            $allowed =  array('png','jpeg','jpg','gif');
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
          
            $registrationDate = ($_POST['registrationDate']);
            $staffId = $_POST['staffId'];
            $surname = ($_POST['surname']);
            $otherName = ($_POST['otherName']);
            $gender = ($_POST['gender']);

            $maritalStatus = ($_POST['maritalStatus']);
            $state = ($_POST['state']);
            $lga = ($_POST['lga']);
            $academicQualification = ($_POST['academicQualification']);
            $typeOfStaff = ($_POST['typeOfStaff']);
            $dateOfAppointment = ($_POST['dateOfAppointment']);
            $position = ($_POST['position']);
            
           
            if(!in_array($ext,$allowed)){
                $this->msg->error('The file must be an image file.');	
            }if(empty($registrationDate)){
                $this->msg->error('Date is required.');
            }if(empty($staffId)){
                $this->msg->error('Staff ID is required.');
            }if(empty($surname)){
                $this->msg->error('Surname is required.');
            }if(empty($otherName)){
                $this->msg->error('Other name is required.');
            }if(empty($gender)){
                $this->msg->error('Gender is required.');
            }if(empty($maritalStatus)){
                $this->msg->error('Marital status is required.');
            }if(empty($state)){
                $this->msg->error('State is required.');
            }if(empty($lga)){
                $this->msg->error('LGA is required.');
            }if(empty($academicQualification)){
                $this->msg->error('Academic quaification is required.');
            }if(empty($typeOfStaff)){
                $this->msg->error('Type of Staff is required.');
            }if(empty($dateOfAppointment)){
                $this->msg->error('Date of Appointment is required.');
            }if(empty($position)){
                $this->msg->error('Position is required.');
            }

           
           
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{

                
                
                (new Register())->registerStaff($fileName,$temporaryFile,$registrationDate,$staffId,$surname,$otherName,$gender,$maritalStatus,$state,$lga,$academicQualification,$typeOfStaff,$dateOfAppointment,$position);
            }

        }
            // html data
            $data["title"] = "Register teaching staff"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/staff', $data);
    }

    public function report()
    {
      
            // html data
            $data["title"] = " Report"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/report', $data);
    }

    public function updateStaff()
    {

        if(isset($_POST['updateStaffBtn'])){

            $staffId = ($_GET['staffId']);

            $surname = ($_POST['surname']);
            $otherName = ($_POST['otherName']);
            $gender = ($_POST['gender']);

            $maritalStatus = ($_POST['maritalStatus']);
            $state = ($_POST['state']);
            $lga = ($_POST['lga']);
            $academicQualification = ($_POST['academicQualification']);
            $typeOfStaff = ($_POST['typeOfStaff']);
            $dateOfAppointment = ($_POST['dateOfAppointment']);
            $position = ($_POST['position']);
            
           
            if(empty($staffId)){
                $this->msg->error('Staff ID is required.');
            }if(empty($surname)){
                $this->msg->error('Surname is required.');
            }if(empty($otherName)){
                $this->msg->error('Other name is required.');
            }if(empty($gender)){
                $this->msg->error('Gender is required.');
            }if(empty($maritalStatus)){
                $this->msg->error('Marital status is required.');
            }if(empty($state)){
                $this->msg->error('State is required.');
            }if(empty($lga)){
                $this->msg->error('LGA is required.');
            }if(empty($academicQualification)){
                $this->msg->error('Academic quaification is required.');
            }if(empty($typeOfStaff)){
                $this->msg->error('Type of Staff is required.');
            }if(empty($dateOfAppointment)){
                $this->msg->error('Date of Appointment is required.');
            }if(empty($position)){
                $this->msg->error('Position is required.');
            }

           
           

           
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{
                
                (new Register())->updateStaff($staffId,$surname,$otherName,$gender,$maritalStatus,$state,$lga,$academicQualification,$typeOfStaff,$dateOfAppointment,$position);
            }


        }

        $data["title"] = "Update  staff "; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/updateStaff', $data);
    }

    public function record()
    {
        $data["title"] = "Record"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/updateUser', $data);
    }
   



    public function student()
    {
        if(isset($_POST['regstudentBtn'])){

            $fileName = $_FILES['file']['name'];
            $temporaryFile = $_FILES['file']['tmp_name'];

            $allowed =  array('png','jpeg','jpg','gif');
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
          
            $registrationDate = ($_POST['registrationDate']);
            $admissionYear = $_POST['admissionYear'];
            $admissionId = $_POST['admissionId'];
            $surname = ($_POST['surname']);
            $otherName = ($_POST['otherName']);
            $gender = ($_POST['gender']);

            $state = ($_POST['state']);
            $lga = ($_POST['lga']);
            $classAdmittedInto = ($_POST['classAdmittedInto']);
            $nextOfKinName = ($_POST['nextOfKinName']);
            $nextOfKinAddress = ($_POST['nextOfKinAddress']);
            $nextOfKinPhone = ($_POST['nextOfKinPhone']);
            
           
            if(!in_array($ext,$allowed)){
                $this->msg->error('The file must be an image file.');	
            }if(empty($registrationDate)){
                $this->msg->error('Registration Date is required.');
            }if(empty($admissionId)){
                $this->msg->error('Admission ID is required.');
            }if(empty($surname)){
                $this->msg->error('Surname is required.');
            }if(empty($otherName)){
                $this->msg->error('Other name is required.');
            }if(empty($gender)){
                $this->msg->error('Gender is required.');
            }if(empty($state)){
                $this->msg->error('State is required.');
            }if(empty($lga)){
                $this->msg->error('LGA is required.');
            }if(empty($classAdmittedInto)){
                $this->msg->error('Class Admitted Into is required.');
            }if(empty($nextOfKinName)){
                $this->msg->error('Next Of Kin Name is required.');
            }if(empty($nextOfKinAddress)){
                $this->msg->error('Next Of Kin Address is required.');
            }if(empty($nextOfKinPhone)){
                $this->msg->error('Next Of Kin Phone is required.');
            }
           
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{

              
                
                (new Register())->registerStudent($fileName,$temporaryFile,$registrationDate,$admissionId,$surname,$otherName,$gender,$state,$lga,$classAdmittedInto,$nextOfKinName,$nextOfKinAddress,$nextOfKinPhone);
            }

        }
            // html data
            $data["title"] = "Register teaching staff"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/student', $data);
    }


    public function updateStudent()
    {
        if(isset($_POST['updateStudentBtn'])){

           
          
            $admissionYear = $_POST['admissionYear'];
            $admissionId = $_GET['admissionId'];
            $surname = ($_POST['surname']);
            $otherName = ($_POST['otherName']);
            $gender = ($_POST['gender']);

            $state = ($_POST['state']);
            $lga = ($_POST['lga']);
            $classAdmittedInto = ($_POST['classAdmittedInto']);
            $nextOfKinName = ($_POST['nextOfKinName']);
            $nextOfKinAddress = ($_POST['nextOfKinAddress']);
            $nextOfKinPhone = ($_POST['nextOfKinPhone']);
            
           
           if(empty($admissionId)){
                $this->msg->error('Admission ID is required.');
            }if(empty($surname)){
                $this->msg->error('Surname is required.');
            }if(empty($otherName)){
                $this->msg->error('Other name is required.');
            }if(empty($gender)){
                $this->msg->error('Gender is required.');
            }if(empty($state)){
                $this->msg->error('State is required.');
            }if(empty($lga)){
                $this->msg->error('LGA is required.');
            }if(empty($classAdmittedInto)){
                $this->msg->error('Class Admitted Into is required.');
            }if(empty($nextOfKinName)){
                $this->msg->error('Next Of Kin Name is required.');
            }if(empty($nextOfKinAddress)){
                $this->msg->error('Next Of Kin Address is required.');
            }if(empty($nextOfKinPhone)){
                $this->msg->error('Next Of Kin Phone is required.');
            }
           
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{

              
                
                (new Register())->updateStudent($admissionId,$surname,$otherName,$gender,$state,$lga,$classAdmittedInto,$nextOfKinName,$nextOfKinAddress,$nextOfKinPhone);
            }

        }
            // html data
            $data["title"] = "Update Student Admission"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/updateStudent', $data);
    }


   




}
