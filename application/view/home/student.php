<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Lend;
 

?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="background-color:white; margin-top:10px; padding-top:20px;">
            <?php $msg->display();?>
            <h3>Student Registration  </h3>
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
                                <label class="" for="">Admission Year </label>
                                <input type="text" name="admissionYear" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="">Admission ID </label>
                                <input type="text" class="form-control"  name="admissionId" value="<?php echo rand(9999,7777) ?>">
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
                    <label for="my-select">Class Admitted Into </label>
                            <select id="my-select" class="form-control" name="classAdmittedInto">
                                <option value=""></option>
                                <option value="JSS1">JSS1</option>
                                <option value="JSS2">JSS2</option>
                                <option value="JSS3">JSS3</option>
                                <option value="SSS1">SSS1</option>
                                <option value="SSS2">SSS2</option>
                                <option value="SSS3">SSS3</option>
                             </select>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Next of kin name</label>
                        <input type="text" class="form-control" name="nextOfKinName">
                    </div>
                </div>

                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Next of kin address</label>
                        <input type="text" class="form-control" name="nextOfKinAddress">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Next of kin phone</label>
                        <input type="text" class="form-control" name="nextOfKinPhone">
                    </div>
                </div>
              
             

                <div class="form-group">
                    <button type="submit" name="regstudentBtn" class="btn btn-primary btn-block">Submit</button>
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