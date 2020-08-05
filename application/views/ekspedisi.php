<!-- Progress Table start -->
<div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                    if($this->session->flashdata('info')){
                                        ?>
                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            <strong> <?php echo $this->session->flashdata('info'); ?> </strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>
                                            </button>
                                        </div>
                                        <?php
                                        
                                    }
                                ?>
                                <h4 class="header-title">
                                <?php echo anchor('Admin/tambah_ekspedisi',' Tambah Data Ekspedisi ', array('class' =>'btn btn-info mb-3 fa fa-database' )); ?>
                                <?php
                                    if ($this->session->userdata('status')=='Admin') {
                                        ?>
                                        <?php echo anchor('Admin/laporan',' Laporan ', array('class' =>'btn btn-primary mb-3 fa fa-file-pdf-o' )); ?>
                                        <?php
                                    }
                                ?>
                                </h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                    <table class="table table-hover progress-table text-center" id="ekspedisi">
                                            <thead class="text-uppercase bg-info">
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">No. RM</th>
                                                    <th scope="col">Nama Pasien</th>
                                                    <th scope="col">Jenis Layanan</th>
                                                    <th scope="col">Nama Peminjam</th>
                                                    <th scope="col">Kepentingan</th>
                                                    <th scope="col">Tujuan</th>
                                                    <th scope="col">Nama Petugas</th>
                                                    <th scope="col">Tgl Pinjam</th>
                                                    <th scope="col">Tgl Kembali</th>
                                                    <th scope="col">Keterangan</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                if ($eks->num_rows() > 0) {
                                                    $no=1;
                                                    foreach ($eks->result_object() as $r) {
                                                        ?>
                                                <tr>
                                                    <th scope="row"><?=$no?></th>
                                                    <td><?=$r->no_rm?></td>
                                                    <td><?=$r->nama_pasien?></td>
                                                    <td><?=$r->jenis_layanan?></td>
                                                    <td><?=$r->nama_peminjam?></td>
                                                    <td><?=$r->kepentingan?></td>
                                                    <td><?=$r->tujuan_ekspedisi?></td>
                                                    <td><?=$r->nama_petugas?></td>
                                                    <td><?=$r->tgl_pinjam?></td>
                                                    <td><?=$r->tgl_kembali?></td>
                                                    <td>
                                                    <?php 
                                                    $tgl_pinjam = date('d',strtotime($r->tgl_pinjam)) + 3; 
                                                    $tgl_kembali = date('d',strtotime($r->tgl_kembali)); 

                                                    if ($tgl_pinjam <= $tgl_kembali) 
                                                    echo "Terlambat";
                                                    else
                                                    echo "Tepat Waktu";
                                                    ?>
                                                    </td>
                                                    <td>
                                                    <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="<?=base_url('Admin/formedit_ekspedisi/'.$r->id_ekspedisi)?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="<?=base_url('Admin/hapusekspedisi/'.$r->id_ekspedisi)?>" class="text-danger" onclick="return confirm('Apakah Data Ekspedisi Mau Dihapus?')"><i class="ti-trash"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <?php
                                                        $no++;
                                                    }
                                                }else{
                                                    ?>
                                        <tr><td colspan="11" align="center">DATA KOSONG<td></tr>
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
                    <!-- Progress Table end -->

</div>

</div>