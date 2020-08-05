<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
        <h4 class="header-title">Edit Tujuan</h4>
        <?php echo form_open('Admin/edit_tj'); ?>
            <?php echo form_hidden('id',$tj->id_tujuan); ?>
                <div class="form-group">
                    <label for="th">Tujuan</label>
                    <?php echo form_input("tj",$tj->tujuan_ekspedisi, array('class'=>'form-control', 'id'=>'tj', 'placeholder'=>'Isi Tujuan')); ?>
                </div>
            <?php echo form_submit('edit','EDIT',array('class'=>'btn btn-primary mt-4 pr-4 pl-4')); ?>
        <?php echo form_close(); ?>
            </div>
        </div>
    </div>

</div>

</div>