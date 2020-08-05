<!-- basic form start -->
<div class="col-12 mt-3">
    <div class="card">
        <div class="card-body">
        <form method="get" action="">
            <h4 class="header-title">Filter Berdasarkan</h4>
                <div class="form-group">
                    <label class="sr-only">Custom Select</label>
                    <select class="custom-select" name="filter" id="filter">
                        <option selected="selected">--- Pilih ---</option>
                        <option value="1">Pertanggal</option>
                        <option value="2">Perbulan</option>
                        <option value="3">Pertahun</option>
                    </select>
                </div>
                <div class="form-group" id="form-tanggal">
                    <label class="sr-only" for="tgl_pembayaran"><b>Tanggal</b></label>
                    <input class="form-control" type="date" name="tanggal" class="input-tanggal">
                </div>
                <div class="form-group" id="form-bulan">
                    <label class="sr-only">Custom Select</label>
                    <select class="custom-select" name="bulan">
                        <option selected="selected">--- Pilih Bulan ---</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="form-group" id="form-tahun">
                    <label class="sr-only">Custom Select</label>
                    <select class="custom-select" name="tahun">
                        <option selected="selected">--- Pilih Tahun---</option>
                        <?php
                        foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                            echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Tampilkan</button>
                <a href="<?php echo base_url('Admin/laporan'); ?>" class="text-primary">Reset Filter</a>
        </form>
        </div>
    </div>
</div>
<!-- basic form end -->

<!-- table light start -->
<div class="col-lg-12 mt-3">
    <div class="card">
        <div class="card-body">
        <b><?php echo $ket; ?></b><br /><br />

            <h4 class="header-title">Laporan
            <?php echo anchor($url_cetak,' Cetak ', array('class' =>'btn btn-success fa fa-print pull-right mb-3')); ?>
            </h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="text-uppercase bg-light">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Tgl Pinjam</th>
                                <th scope="col">Tgl Kembali</th>
                                <th scope="col">No. RM</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Jenis Layanan</th>
                                <th scope="col">Nama Peminjam</th>
                                <th scope="col">Kepentingan</th>
                                <th scope="col">Tujuan</th>
                                <th scope="col">Nama Petugas</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if (! empty($eks)) {
                                # Data Ada
                                $no=1;
                                foreach ($eks as $r) {
                                    
                                ?>
                                <tr>
                                    <th scope="row"><?=$no?></th>
                                        <td><?=$r->tgl_pinjam?></td>
                                        <td><?=$r->tgl_kembali?></td>
                                        <td><?=$r->no_rm?></td>
                                        <td><?=$r->nama_pasien?></td>
                                        <td><?=$r->jenis_layanan?></td>
                                        <td><?=$r->nama_peminjam?></td>
                                        <td><?=$r->kepentingan?></td>
                                        <td><?=$r->tujuan_ekspedisi?></td>
                                        <td><?=$r->nama_petugas?></td>
                                </tr>
                                
                                <?php
                                $no++;
                                }
                            } else {
                                # Data Kosong...
                                ?>
                                <tr>
                                <td colspan="6" align="center">Data Kosong</td>
                                </tr>

                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- table light end -->

</div>
<script src="<?=base_url('assets/')?>/js/vendor/jquery-2.2.4.min.js"></script>
<script>
    $(document).ready(function(){ // Ketika halaman selesai di load

        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }

            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
</script>