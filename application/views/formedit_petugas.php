<div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Edit Petugas</h4>
                                        <?php echo form_open('Admin/edit_petugas'); ?>
                                        <?php echo form_hidden('id',$p->id_petugas);?>
                                            <div class="form-group">
                                                <label for="nip">NIP</label>

                                                <?php echo form_input("nip",$p->nip, array('class'=>'form-control', 'id'=>'nip', 'placeholder'=>'Isi NIP')); ?>

                                            </div>

                                            <div class="form-group">
                                                <label for="np">Nama Petugas</label>

                                                <?php echo form_input("nama_petugas",$p->nama_petugas, array('class'=>'form-control', 'id'=>'np', 'placeholder'=>'Isi Nama Petugas')); ?>

                                            </div>

                                            <?php echo form_submit('edit','EDIT',array('class'=>'btn btn-primary mt-4 pr-4 pl-4')); ?>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

</div>

</div>