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
                                <?php echo anchor('Admin/tambah_petugas',' Tambah Data Petugas ', array('class' =>'btn btn-primary mb-3 fa fa-database' )); ?>
                                </h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">NIP</th>
                                                    <th scope="col">Nama Petugas</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                if ($p->num_rows() > 0) {
                                                    $no=1;
                                                    foreach ($p->result_object() as $r) {
                                                        ?>
                                                <tr>
                                                    <th scope="row"><?=$no?></th>
                                                    <td><?=$r->nip?></td>
                                                    <td><?=$r->nama_petugas?></td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="<?=base_url('Admin/formedit_petugas/'.$r->id_petugas)?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="<?=base_url('Admin/hapuspetugas/'.$r->id_petugas)?>" class="text-danger" onclick="return confirm('Apakah Data Petugas Mau Dihapus?')"><i class="ti-trash"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                        <?php
                                                        $no++;
                                                    }
                                                }else{
                                                    ?>
                                        <tr><td colspan="4" align="center">DATA KOSONG<td></tr>
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