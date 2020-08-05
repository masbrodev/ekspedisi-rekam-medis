<div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Tambah Petugas</h4>
                                        <?php echo form_open('Admin/simpan_petugas'); ?>
                                            <div class="form-group">
                                                <label for="nip">NIP</label>

                                                <?php echo form_input("nip",set_value('nip'), array('class'=>'form-control', 'id'=>'nip', 'placeholder'=>'Isi NIP')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('nip',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="np">Nama Petugas</label>

                                                <?php echo form_input("nama_petugas",set_value('nama_petugas'), array('class'=>'form-control', 'id'=>'np', 'placeholder'=>'Isi Nama Petugas')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('nama_petugas',' '); ?>
                                                </small>

                                            </div>

                                            <?php echo form_submit('save','SIMPAN',array('class'=>'btn btn-primary mt-4 pr-4 pl-4')); ?>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

</div>

</div>