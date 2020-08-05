<div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Form Pasien</h4>
                                        <?php echo form_open('Admin/simpan_pasien'); ?>
                                            <div class="form-group">
                                                <label for="no">No. RM</label>

                                                <?php echo form_input("no_rm",set_value('no_rm'), array('class'=>'form-control', 'id'=>'no', 'placeholder'=>'Isi No. RM')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('no_rm',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="npas">Nama Pasien</label>

                                                <?php echo form_input("nama_pasien",set_value('nama_pasien'), array('class'=>'form-control', 'id'=>'npas', 'placeholder'=>'Isi Nama Pasien')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('nama_pasien',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="jk">Jenis Kelamin </label>

                                                <?php echo form_radio('jk','L',set_value('jk')) ?> Laki-laki
                                                <?php echo form_radio('jk','P',set_value('jk')) ?> Perempuan
                                                <br/>
                                                <small class="text-danger">
                                                <?php echo form_error('jk',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="nik">NIK</label>

                                                <?php echo form_input("nik",set_value('nik'), array('class'=>'form-control', 'id'=>'nik', 'placeholder'=>'Isi NIK')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('nik',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="almt">Alamat</label>

                                                <?php echo form_textarea('alamat',set_value('alamat'),array('class'=>'form-control', 'id'=>'almt', 'placeholder'=>'Isi Alamat')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('alamat',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="nt">No. Telp</label>

                                                <?php echo form_input("no_telp",set_value('no_telp'), array('class'=>'form-control', 'id'=>'nt', 'placeholder'=>'Isi No. Telp')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('no_telp',' '); ?>
                                                </small>

                                            </div>

                                            <?php echo form_submit('save','SIMPAN',array('class'=>'btn btn-primary mt-4 pr-4 pl-4')); ?>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

</div>

</div>