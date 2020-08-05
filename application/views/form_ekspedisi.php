<div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Form Ekspedisi</h4>
                                        <?php echo form_open('Admin/simpan_ekspedisi'); ?>
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
                                                <label for="jl">Jenis Layanan</label>

                                                <?php echo form_input("jenis_layanan",set_value('jenis_layanan'), array('class'=>'form-control', 'id'=>'jl', 'placeholder'=>'Isi Jenis Layanan')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('jenis_layanan',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="npem">Nama Peminjam</label>

                                                <?php echo form_input("nama_peminjam",set_value('nama_peminjam'), array('class'=>'form-control', 'id'=>'npem', 'placeholder'=>'Isi Nama Peminjam')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('nama_peminjam',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="kp">Kepentingan</label>

                                                <?php echo form_input("kepentingan",set_value('kepentingan'), array('class'=>'form-control', 'id'=>'kp', 'placeholder'=>'Isi Kepentingan')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('kepentingan',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="tujuan_ekspedisi">Tujuan</label>
                                                <?php echo form_dropdown("tujuan_ekspedisi", $combotj, set_value('tujuan_ekspedisi'), array('class'=>'form-control', 'id'=>'tujuan_ekspedisi')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('tujuan_ekspedisi',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="nama_petugas">Nama Petugas</label>
                                                <?php echo form_dropdown("nama_petugas", $combo, set_value('nama_petugas'), array('class'=>'form-control', 'id'=>'nama_petugas')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('nama_petugas',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="tgl_pinjam">Tgl Pinjam</label>
                                                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">

                                            </div>

                                            <div class="form-group">
                                            <label for="tgl_kembali">Tgl Kembali</label>
                                                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">

                                            </div>

                                            <?php echo form_submit('save','SIMPAN',array('class'=>'btn btn-primary mt-4 pr-4 pl-4')); ?>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

</div>

</div>