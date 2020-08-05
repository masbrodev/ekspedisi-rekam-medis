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
                                <?php echo anchor('Admin/tambah_pasien',' Tambah Data Pasien ', array('class' =>'btn btn-success mb-3 fa fa-database' )); ?>
                                </h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                    <table class="table table-hover progress-table text-center" id="pasien">
                                            <thead class="text-uppercase bg-success">
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">No. RM</th>
                                                    <th scope="col">Nama Pasien</th>
                                                    <th scope="col">Jenis Kelamin</th>
                                                    <th scope="col">NIK</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">No. Telp</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                if ($pa->num_rows() > 0) {
                                                    $no=1;
                                                    foreach ($pa->result_object() as $r) {
                                                        ?>
                                                <tr>
                                                    <th scope="row"><?=$no?></th>
                                                    <td><?=$r->no_rm?></td>
                                                    <td><?=$r->nama_pasien?></td>
                                                    <td>
                                                    <?php
                                                        if ($r->jenis_kelamin=='L') {
                                                            $jk="Laki-laki";
                                                        } else {
                                                            $jk="Perempuan";
                                                        }
                                                        echo $jk
                                                    ?>
                                                    </td>
                                                    <td><?=$r->nik?></td>
                                                    <td><?=$r->alamat?></td>
                                                    <td><?=$r->no_telp?></td>
                                                    <td>
                                                    <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="<?=base_url('Admin/formedit_pasien/'.$r->id_pasien)?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="<?=base_url('Admin/hapuspasien/'.$r->id_pasien)?>" class="text-danger" onclick="return confirm('Apakah Data Pasien Mau Dihapus?')"><i class="ti-trash"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <?php
                                                        $no++;
                                                    }
                                                }else{
                                                    ?>
                                        <tr><td colspan="8" align="center">DATA KOSONG<td></tr>
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