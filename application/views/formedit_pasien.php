<div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Edit Pasien</h4>
                                        <?php echo form_open('Admin/edit_pasien'); ?>
                                        <?php echo form_hidden('id',$pa->id_pasien);?>
                                            <div class="form-group">
                                                <label for="rm">No. RM</label>
                                                <?php echo form_input("no_rm",$pa->no_rm, array('class'=>'form-control', 'id'=>'rm', 'placeholder'=>'Isi No. RM')); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="nps">Nama Pasien</label>
                                                <?php echo form_input("nama_pasien",$pa->nama_pasien, array('class'=>'form-control', 'id'=>'nps', 'placeholder'=>'Isi Nama Pasien')); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="jk">Jenis Kelamin</label>
                                                <?php
                                                    if ($pa->jenis_kelamin=="L") {
                                                        $l=TRUE;
                                                        $p=FALSE;
                                                    } else {
                                                        $l=FALSE;
                                                        $p=TRUE;
                                                    }
                                                echo form_radio('jk','L',$l) ?> Laki-laki
                                                <?php echo form_radio('jk','P',$p) ?> Perempuan
                                                <br/>
                                                <small class="text-danger">
                                                <?php echo form_error('jk',' '); ?>
                                                </small>
                                            </div>

                                            <div class="form-group">
                                                <label for="nik">NIK</label>
                                                <?php echo form_input("nik",$pa->nik, array('class'=>'form-control', 'id'=>'nik', 'placeholder'=>'Isi NIK')); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="almt">Alamat</label>
                                                <?php echo form_input("alamat",$pa->alamat, array('class'=>'form-control', 'id'=>'almt', 'placeholder'=>'Isi Alamat')); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="tlp">No. Telp</label>
                                                <?php echo form_input("no_telp",$pa->no_telp, array('class'=>'form-control', 'id'=>'tlp', 'placeholder'=>'Isi No. Telp')); ?>
                                            </div>

                                            <?php echo form_submit('edit','EDIT',array('class'=>'btn btn-primary mt-4 pr-4 pl-4')); ?>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

</div>

</div>