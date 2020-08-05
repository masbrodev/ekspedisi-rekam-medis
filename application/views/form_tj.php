<!-- basic form start -->
<div class="col-12 mt-5">
    <div class="card">
    <?php if(validation_errors()){?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Maaf! <?php echo validation_errors(); ?> </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>
            </button>
        </div>
    <?php
    } ?>
        <div class="card-body">
            <h4 class="header-title">Form Tujuan</h4>
            <?php echo form_open('Admin/simpan_tj'); ?>
                <div class="form-group">
                    <label for="tj">Tujuan</label>
                    <?php echo form_input("tj","", array('class'=>'form-control', 'id'=>'tj', 'placeholder'=>'Isi Tujuan')); ?>
                </div>
                <?php echo form_submit('save','SIMPAN',array('class'=>'btn btn-primary mt-4 pr-4 pl-4')); ?>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- basic form end -->

</div>