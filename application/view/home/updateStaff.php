<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Register;
 if(!isset($_GET['staffId'])){
    ?>
        <div class="container">
            <div class="row">
                <?php
                   (new Register())->updateStaffRecord() 
                ?>
            </div>
        </div>
<?php
 }else{
    
    $staff = (new Register())->getstaffInfo($_GET['staffId']);

  

?>


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="background-color:white; margin-top:10px; padding-top:20px;">
            <?php $msg->display();?>
            <h3>Update Staff Information  </h3>
            <hr>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="" role="form" enctype="multipart/form-data">
                   
                        <div class="col-md-6">
                            <div class="form-group">
                            <img height="200" width="200" src="<?php echo URL ?>/staffImage/<?php echo $staff->photo?>" alt="" srcset="">
                            </div>
                        </div>

                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="">Registration Date </label>
                                <input type="text" class="form-control"  name="registrationDate" value="<?php echo $staff->registrationDate?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="">Staff ID </label>
                                <input type="text" class="form-control"  name="staffId" value="<?php echo $staff->staffId?>">
                            </div>
                        </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Surname </label>
                        <input type="text" name="surname" class="form-control" value="<?php echo $staff->surname?>">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Other names </label>
                        <input type="text" class="form-control" name="otherName" value="<?php echo $staff->otherName?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="my-select">Gender </label>
                        <select id="my-select" class="form-control" name="gender">
                            <option value="<?php echo $staff->gender?>"><?php echo $staff->gender?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                
              
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="my-select">Marital Status </label>
                            <select id="my-select" class="form-control" name="maritalStatus">
                                <option value="<?php echo $staff->maritalStatus?>"><?php echo $staff->maritalStatus?></option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Devoiced">Devoiced</option>
                             </select>
                    </div>
                </div>

                 

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">State</label>
                        <input type="text" class="form-control" name="state" value="<?php echo $staff->state?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">LGA</label>
                        <input type="text" class="form-control" name="lga" value="<?php echo $staff->lga?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Academic Qualification</label>
                        <input type="text" class="form-control" name="academicQualification" value="<?php echo $staff->academicQualification?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Type of Staff</label>
                        <select id="my-select" class="form-control" name="typeOfStaff">
                            <option value="<?php echo $staff->typeOfStaff?>"><?php echo $staff->typeOfStaff?></option>
                            <option value="MaTeaching Staffle">Teaching Staff</option>
                            <option value="Non Teaching">Non Teaching</option>
                        </select>                    
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Date of Appointment</label>
                        <input type="date" class="form-control" name="dateOfAppointment" value="<?php echo $staff->dateOfAppointment?>">
                    </div>
                </div>
              
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Position</label>
                        <input type="text" class="form-control" name="position" value="<?php echo $staff->position?>">
                    </div>
                </div>
              

               
               
             

                <div class="form-group">
                    <button type="submit" name="updateStaffBtn" class="btn btn-primary btn-block">Update</button>
                </div>

            </form>

        </div>

    </div>

</div>

<?php
 }
 ?>