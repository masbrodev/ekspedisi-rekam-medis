<div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Edit Ekspedisi</h4>
                                        <?php echo form_open('Admin/edit_ekspedisi'); ?>
                                        <?php echo form_hidden('id',$eks->id_ekspedisi);?>
                                            <div class="form-group">
                                                <label for="rm">No. RM</label>
                                                <?php echo form_input("no_rm",$eks->no_rm, array('class'=>'form-control', 'id'=>'rm', 'placeholder'=>'Isi No. RM')); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="nps">Nama Pasien</label>
                                                <?php echo form_input("nama_pasien",$eks->nama_pasien, array('class'=>'form-control', 'id'=>'nps', 'placeholder'=>'Isi Nama Pasien')); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="jl">Jenis Layanan</label>
                                                <?php echo form_input("jenis_layanan",$eks->jenis_layanan, array('class'=>'form-control', 'id'=>'jl', 'placeholder'=>'Isi Jenis Layanan')); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="npin">Nama Peminjam</label>
                                                <?php echo form_input("nama_peminjam",$eks->nama_peminjam, array('class'=>'form-control', 'id'=>'npin', 'placeholder'=>'Isi Nama Peminjam')); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="kp">Kepentingan</label>
                                                <?php echo form_input("kepentingan",$eks->kepentingan, array('class'=>'form-control', 'id'=>'kp', 'placeholder'=>'Isi Kepentingan')); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="tujuan_ekspedisi">Tujuan</label>
                                                <?php echo form_dropdown("tujuan_ekspedisi", $combotj, $eks->tujuan_ekspedisi, array('class'=>'form-control', 'id'=>'tujuan_ekspedisi')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('tujuan_ekspedisi',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="nama_petugas">Nama Petugas</label>
                                                <?php echo form_dropdown("nama_petugas", $combo, $eks->nama_petugas, array('class'=>'form-control', 'id'=>'nama_petugas')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('nama_petugas',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="tpin">Tgl Pinjam</label>
                                                <?php echo form_input("tgl_pinjam",$eks->tgl_pinjam, array('class'=>'form-control', 'id'=>'tpin', 'placeholder'=>'Isi Tgl Pinjam')); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="tkem">Tgl Kembali</label>
                                                <?php echo form_input("tgl_kembali",$eks->tgl_kembali, array('class'=>'form-control', 'id'=>'tkem', 'placeholder'=>'Isi Tgl Kembali')); ?>
                                            </div>

                                            <?php echo form_submit('edit','EDIT',array('class'=>'btn btn-primary mt-4 pr-4 pl-4')); ?>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

</div>

</div>