<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Register;
 if(!isset($_GET['registrationId'])){
    ?>
        <div class="container">
            <div class="row">
                <?php
                   (new Register())->updateTeachingStaffRecord() 
                ?>
            </div>
        </div>
<?php
 }else{
    
    $staff = (new Register())->getTeachingStaffInfo($_GET['registrationId']);

  

?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="background-color:white; margin-top:10px; padding-top:20px;">
            <?php $msg->display();?>
            <h3>Update Teaching staff Duty  </h3>
            <hr>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="" role="form" enctype="multipart/form-data">
                   
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="">Registration Date </label>
                                <input type="text" class="form-control"  name="registrationDate" value="<?php echo $staff->registrationDate?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="">Registration ID </label>
                                <input type="text" class="form-control"  name="registrationId" value="<?php echo $staff->registrationId?>">
                            </div>
                        </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for="">Surname of staff</label>
                            <input type="text" name="surnameOfStaff" class="form-control"  value="<?php echo $staff->surnameOfStaff?>">
                        </div>
                    </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Other names of staff</label>
                        <input type="text" class="form-control" name="otherNameOfStaff" value="<?php echo $staff->otherNameOfStaff?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="my-select">Class  Assigned </label>
                            <select id="my-select" class="form-control" name="classAssigned">
                                <option  value="<?php echo $staff->otherNameOfStaff?>"><?php echo $staff->otherNameOfStaff?></option>
                                <option value="JSS1">JSS1</option>
                                <option value="JSS2">JSS2</option>
                                <option value="JSS3">JSS3</option>
                            </select>
                    </div>
                </div>
                
              
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="my-select">Term </label>
                            <select id="my-select" class="form-control" name="term">
                                <option  value="<?php echo $staff->term?>"><?php echo $staff->term?></option>
                                <option value="First Term">First Term</option>
                                <option value="Second Term">Second Term</option>
                                <option value="Third Term">Third Term</option>
                             </select>
                    </div>
                </div>

                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="my-select">Subject Assigned  </label>
                            <select id="my-select" class="form-control" name="subjectAssigned">
                            <option  value="<?php echo $staff->subjectAssigned?>"><?php echo $staff->subjectAssigned?></option>
                                <option value="Maths">Maths</option>
                                <option value="Physics">Physics</option>
                             </select>
                    </div>
                </div>
               

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Academic Year</label>
                        <input type="text" class="form-control" name="academicYear" value="<?php echo $staff->academicYear?>">
                    </div>
                </div>
              

                <div class="form-group">
                    <button type="submit" name="upateTeachingStaffBtn" class="btn btn-primary btn-block">Update</button>
                </div>

            </form>

        </div>

    </div>

</div>


<?php
 }
 ?>