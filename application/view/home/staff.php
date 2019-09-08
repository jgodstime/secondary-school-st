<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Lend;
 

?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="background-color:white; margin-top:10px; padding-top:20px;">
            <?php $msg->display();?>
            <h3>Staff Registration  </h3>
            <hr>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="" role="form" enctype="multipart/form-data">
                   
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="">Image</label>
                                <img src="" height="80" width="80" alt="" id="previewimageid">
                                <input type="file" class="form-control" name="file" onchange="previewimage(event)">
                            </div>
                        </div>

                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="">Registration Date </label>
                                <input type="text" class="form-control"  name="registrationDate" value="<?php echo date("d/m/Y")?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="">Staff ID </label>
                                <input type="text" class="form-control"  name="staffId" value="<?php echo rand(9999,7777) ?>">
                            </div>
                        </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Surname </label>
                        <input type="text" name="surname" class="form-control">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Other names </label>
                        <input type="text" class="form-control" name="otherName">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="my-select">Gender </label>
                        <select id="my-select" class="form-control" name="gender">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                
              
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="my-select">Marital Status </label>
                            <select id="my-select" class="form-control" name="maritalStatus">
                                <option value=""></option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Devoiced">Devoiced</option>
                             </select>
                    </div>
                </div>

                 

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">State</label>
                        <input type="text" class="form-control" name="state">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">LGA</label>
                        <input type="text" class="form-control" name="lga">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Academic Qualification</label>
                        <input type="text" class="form-control" name="academicQualification">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Type of Staff</label>
                        <select id="my-select" class="form-control" name="typeOfStaff">
                            <option value=""></option>
                            <option value="MaTeaching Staffle">Teaching Staff</option>
                            <option value="Non Teaching">Non Teaching</option>
                        </select>                    
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Date of Appointment</label>
                        <input type="date" class="form-control" name="dateOfAppointment">
                    </div>
                </div>
              
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Position</label>
                        <input type="text" class="form-control" name="position">
                    </div>
                </div>
              

               
               
             

                <div class="form-group">
                    <button type="submit" name="regTeachingStaffBtn" class="btn btn-primary btn-block">Submit</button>
                </div>

            </form>

        </div>

    </div>

</div>



<script type="text/javascript">
    function previewimage(event) {
        var output = document.getElementById('previewimageid');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>