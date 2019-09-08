<?php

namespace Mini\Model;

use Mini\Core\Model;
use PDO;


class Register extends Model
{

    public function getStaffInfo($id){
        $query = $this->db -> prepare("SELECT * FROM staff_tbl WHERE staffId = ? LIMIT 1");
        $query -> execute(array($id));
        $result = $query->fetch();
        return $result;
    }


    public function registerStaff($fileName,$temporaryFile,$registrationDate,$staffId,$surname,$otherName,$gender,$maritalStatus,$state,$lga,$academicQualification,$typeOfStaff,$dateOfAppointment,$position){

      
        $materialCode =  rand(3000,10000).rand(9000,10000).rand(200,4000);
       
        $writerCodeForThisMat = $materialCode;
        $temp = explode(".", $fileName);
        $newFileName = $writerCodeForThisMat . '.' . end($temp); //renaming the material with
        move_uploaded_file($temporaryFile,'staffImage/'.$newFileName);


    $queryInsert = $this->db->prepare("INSERT INTO staff_tbl (id,registrationDate,staffId,surname,otherName,gender,maritalStatus,state,lga,academicQualification,typeOfStaff,dateOfAppointment,position,photo) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $queryInsert->execute(array('',$registrationDate,$staffId,$surname,$otherName,$gender,$maritalStatus,$state,$lga,$academicQualification,$typeOfStaff,$dateOfAppointment,$position,$newFileName));
    //    die();
    // print_r($this->db->errorInfo());

    if($queryInsert){
        $this->msg->success('Registration successful.', $_SERVER['HTTP_REFERER']);
    }else{
        $this->msg->success('Unable to register at this time, please try again later.', $_SERVER['HTTP_REFERER']);
    }

    }


    public function updateStaff($staffId,$surname,$otherName,$gender,$maritalStatus,$state,$lga,$academicQualification,$typeOfStaff,$dateOfAppointment,$position){
        //    die($staffId);
        $queryUpdate = $this->db->prepare("UPDATE staff_tbl set surname=?,otherName=?,gender=?,maritalStatus=?,state=?,lga=?,academicQualification=?,typeOfStaff=?,dateOfAppointment=?,position=? WHERE staffId = ?");
        $queryUpdate->execute(array($surname,$otherName,$gender,$maritalStatus,$state,$lga,$academicQualification,$typeOfStaff,$dateOfAppointment,$position,$staffId));
        
        // print_r($this->db->errorInfo());

        if($queryUpdate){
            $this->msg->success('Successfully updated.', $_SERVER['HTTP_REFERER']);  
        }else{
            $this->msg->error('Unable to update at this time, please try again later.', $_SERVER['HTTP_REFERER']);            

        }
    
        }


    public function staffRecord(){
        $query = $this->db -> prepare("SELECT * FROM  staff_tbl ORDER BY id DESC");
        $query->execute();
        if($query->rowCount()>0){
    
     
    ?>
    <h2 class=""> Staff Record</h2>
    <div class="table-responsive">
  
        <table class="table table-hover table-striped">
            <thead>
            
                <tr>
                    <th>Date registered </th>
                    <th>Staff ID</th>
                    <th>Surname</th>
                    <th>Other name </th>
                    <th>Gender</th>
                    <th>Marital status</th>
                    <th>State</th>
                    <th>LGA</th>
                    <th>Academic Qualification</th>
                    <th>Type of Staff</th>
                    <th>Date Of Appointment</th>
                    <th>Position</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <?php
            
            while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

                ?>
             <tr>
                <td><?php echo $row['registrationDate'];?></td>
                <td> <?php echo $row['staffId'];?> </td>
                <td><?php echo $row['surname'];?></td>
               
                <td><?php echo $row['otherName'] ;?> </td>
                <td><?php echo $row['gender'] ;?> </td>

                <td><?php echo $row['maritalStatus'] ;?> </td>
                <td><?php echo $row['state'] ;?> </td>
                <td><?php echo $row['lga'] ;?> </td>
                <td><?php echo $row['academicQualification'] ;?> </td>
                <td><?php echo $row['typeOfStaff'] ;?> </td>
                <td><?php echo $row['dateOfAppointment'] ;?> </td>
                <td><?php echo $row['position'] ;?> </td>
                <td> <a href="<?php echo URL. 'staffImage/'.$row['photo'] ;?>">View Photo</a>  </td>

                       
            </tr>
    
            <?php
             }    
            ?>
        </table>
    </div>
    <?php
        }else{
            echo '<div>
                <a class="list-group-item">No Record Found.</a>
            </div>';	
        }			
    
    }
   

    public function updateStaffRecord(){
        $query = $this->db -> prepare("SELECT * FROM  staff_tbl ORDER BY id DESC");
        $query->execute();
        if($query->rowCount()>0){
    
     
    ?>
    <h2 class=""> Update Staff Record</h2>
    <div class="table-responsive">
  
        <table class="table table-hover table-striped">
        <thead>
            
            <tr>
                <th>Date registered </th>
                <th>Staff ID</th>
                <th>Surname</th>
                <th>Other name </th>
                <th>Gender</th>
                <th>Marital status</th>
                <th>State</th>
                <th>LGA</th>
                <th>Academic Qualification</th>
                <th>Type of Staff</th>
                <th>Date Of Appointment</th>
                <th>Position</th>
                <th>Update</th>
            </tr>
        </thead>
        <?php
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

            ?>
         <tr>
            <td><?php echo $row['registrationDate'];?></td>
            <td> <?php echo $row['staffId'];?> </td>
            <td><?php echo $row['surname'];?></td>
           
            <td><?php echo $row['otherName'] ;?> </td>
            <td><?php echo $row['gender'] ;?> </td>

            <td><?php echo $row['maritalStatus'] ;?> </td>
            <td><?php echo $row['state'] ;?> </td>
            <td><?php echo $row['lga'] ;?> </td>
            <td><?php echo $row['academicQualification'] ;?> </td>
            <td><?php echo $row['typeOfStaff'] ;?> </td>
            <td><?php echo $row['dateOfAppointment'] ;?> </td>
            <td><?php echo $row['position'] ;?> </td>

            <td> <a class="btn btn-info" href="<?php URL ?>updateStaff?staffId=<?php echo $row['staffId']?>">Update</a></td>                       
            </tr>
    
            <?php
             }    
            ?>
        </table>
    </div>
    <?php
        }else{
            echo '<div>
                <a class="list-group-item">No Record Found.</a>
            </div>';	
        }			
    
    }


    // _______________________________________nONE TEACHING STAFF ____________________________________________________








    public function getStudentInfo($id){
        $query = $this->db -> prepare("SELECT * FROM student_tbl WHERE admissionId = ? LIMIT 1");
        $query -> execute(array($id));
        $result = $query->fetch();
        return $result;
    }


    public function registerStudent($fileName,$temporaryFile,$registrationDate,$admissionId,$surname,$otherName,$gender,$state,$lga,$classAdmittedInto,$nextOfKinName,$nextOfKinAddress,$nextOfKinPhone){

      
        $materialCode =  rand(3000,10000).rand(9000,10000).rand(200,4000);
       
        $writerCodeForThisMat = $materialCode;
        $temp = explode(".", $fileName);
        $newFileName = $writerCodeForThisMat . '.' . end($temp); //renaming the material with
        move_uploaded_file($temporaryFile,'studentImage/'.$newFileName);


    $queryInsert = $this->db->prepare("INSERT INTO student_tbl (id,registrationDate,admissionId,surname,otherName,gender,state,lga,classAdmittedInto,nextOfKinName,nextOfKinAddress,nextOfKinPhone,photo) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $queryInsert->execute(array('',$registrationDate,$admissionId,$surname,$otherName,$gender,$state,$lga,$classAdmittedInto,$nextOfKinName,$nextOfKinAddress,$nextOfKinPhone,$newFileName));
    //    die();
    print_r($this->db->errorInfo());

    if($queryInsert){
        $this->msg->success('Registration successful.', $_SERVER['HTTP_REFERER']);
    }else{
        $this->msg->success('Unable to register at this time, please try again later.', $_SERVER['HTTP_REFERER']);
    }

    }


    public function updateStudent($admissionId,$surname,$otherName,$gender,$state,$lga,$classAdmittedInto,$nextOfKinName,$nextOfKinAddress,$nextOfKinPhone){
           
        $queryUpdate = $this->db->prepare("UPDATE student_tbl set surname=?,otherName=?,gender=?,state=?,lga=?,classAdmittedInto=?,nextOfKinName=?,nextOfKinAddress=?,nextOfKinPhone=? WHERE admissionId = ?");
        $queryUpdate->execute(array($surname,$otherName,$gender,$state,$lga,$classAdmittedInto,$nextOfKinName,$nextOfKinAddress,$nextOfKinPhone,$admissionId));
        
        // print_r($this->db->errorInfo());

        if($queryUpdate){
            $this->msg->success('Successfully updated.', $_SERVER['HTTP_REFERER']);  
        }else{
            $this->msg->error('Unable to update at this time, please try again later.', $_SERVER['HTTP_REFERER']);            

        }
    
        }


 



    public function studentRecord(){
        $query = $this->db -> prepare("SELECT * FROM  student_tbl ORDER BY id DESC");
        $query->execute();
        if($query->rowCount()>0){
    
     
    ?>
    <h2 class=""> Student Record</h2>
    <div class="table-responsive">
  
        <table class="table table-hover table-striped">
            <thead>
            
                <tr>
                    <th>Date registered </th>
                    <th>Admission ID</th>
                    <th>Surname</th>
                    <th>Other name </th>
                    <th>Gender</th>
                    <th>State</th>
                    <th>LGA</th>
                    <th>Class Admitted Into</th>
                    <th>Next of Kin Name</th>
                    <th>Next of Kin Addres</th>
                    <th>Next of Kin Phone</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <?php
            
            while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

                ?>
             <tr>
             <td><?php echo $row['registrationDate'];?></td>
                <td> <?php echo $row['admissionId'];?> </td>
                <td><?php echo $row['surname'];?></td>
               
                <td><?php echo $row['otherName'] ;?> </td>
                <td><?php echo $row['gender'] ;?> </td>

                <td><?php echo $row['state'] ;?> </td>
                <td><?php echo $row['lga'] ;?> </td>
                <td><?php echo $row['classAdmittedInto'] ;?> </td>
                <td><?php echo $row['nextOfKinName'] ;?> </td>
                <td><?php echo $row['nextOfKinAddress'] ;?> </td>
                <td><?php echo $row['nextOfKinPhone'] ;?> </td>
                <td> <a href="<?php echo URL. 'studentImage/'.$row['photo'] ;?>">View Photo</a>  </td>
                       

                       
            </tr>
    
            <?php
             }    
            ?>
        </table>
    </div>
    <?php
        }else{
            echo '<div>
                <a class="list-group-item">No Record Found.</a>
            </div>';	
        }			
    
    }
   


    public function updateStudentRecord(){
        $query = $this->db -> prepare("SELECT * FROM  student_tbl ORDER BY id DESC");
        $query->execute();
        if($query->rowCount()>0){

     
    ?>
    <h2 class=""> Update student Record</h2>
    <div class="table-responsive">
  
        <table class="table table-hover table-striped">
        <thead>
            
                <tr>
                    <th>Date registered </th>
                    <th>Student ID</th>
                    <th>Surname</th>
                    <th>Other name </th>
                    <th>Gender</th>
                    <th>State</th>
                    <th>LGA</th>
                    <th>Class Admitted Into</th>
                    <th>Next of Kin Name</th>
                    <th>Next of Kin Addres</th>
                    <th>Next of Kin Phone</th>
                    <th>Action</th>
                  
                </tr>
            </thead>
            <?php
            
            while($row = $query->fetch(PDO::FETCH_ASSOC)){ 
                
                ?>
             <tr>
                <td><?php echo $row['registrationDate'];?></td>
                <td> <?php echo $row['admissionId'];?> </td>
                <td><?php echo $row['surname'];?></td>
               
                <td><?php echo $row['otherName'] ;?> </td>
                <td><?php echo $row['gender'] ;?> </td>

                <td><?php echo $row['state'] ;?> </td>
                <td><?php echo $row['lga'] ;?> </td>
                <td><?php echo $row['classAdmittedInto'] ;?> </td>
                <td><?php echo $row['nextOfKinName'] ;?> </td>
                <td><?php echo $row['nextOfKinAddress'] ;?> </td>
                <td><?php echo $row['nextOfKinPhone'] ;?> </td>
                <td> <a class="btn btn-info" href="<?php URL ?>updateStudent?admissionId=<?php echo $row['admissionId']?>">Update</a></td>                       
                                       
            </tr>
    
            <?php
             }    
            ?>
        </table>
    </div>
    <?php
        }else{
            echo '<div>
                <a class="list-group-item">No Record Found.</a>
            </div>';	
        }			
    
    }


   
                
     
   




}
