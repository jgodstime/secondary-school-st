<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Lend;
 

?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="background-color:white; margin-top:10px; padding-top:20px;">
            <?php $msg->display();?>
            <h3>Register Non Teaching staff Duty  </h3>
            <hr>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="" role="form" enctype="multipart/form-data">
                   
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="">Registration Date </label>
                                <input type="text" class="form-control"  name="registrationDate" value="<?php echo date("d/m/Y")?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="">Registration ID </label>
                                <input type="text" class="form-control"  name="registrationId" value="<?php echo rand(9999,7777) ?>">
                            </div>
                        </div>

                      

                      
                    

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for="">Surname of staff</label>
                            <input type="text" name="surnameOfStaff" class="form-control">
                        </div>
                    </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Other names of staff</label>
                        <input type="text" class="form-control" name="otherNameOfStaff">
                    </div>
                </div>

                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Duty  Assigned</label>
                        <input type="text" class="form-control" name="dutyAssigned">
                    </div>
                </div>

              

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Academic Year</label>
                        <input type="text" class="form-control" name="academicYear">
                    </div>
                </div>
              

               
               
             

                <div class="form-group">
                    <button type="submit" name="regNonTeachingStaffBtn" class="btn btn-primary btn-block">Submit</button>
                </div>

            </form>

        </div>

    </div>

</div>
