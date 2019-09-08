<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Register;

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <?php (new Register)->staffRecord();?>
                </div>
            </div>
        </div>

        
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <?php (new Register)->studentRecord();?>
                </div>
            </div>
        </div>

        
    </div>
</div>

