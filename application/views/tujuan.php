<!-- Progress Table start -->
<div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                            <?php
                                    if($this->session->flashdata('info')){
                                        ?>
                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <strong> <?php echo $this->session->flashdata('info'); ?> </strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>
                                            </button>
                                        </div>
                                        <?php  
                                    }
                                ?>
                                <h4 class="header-title">
                                    <?php echo anchor('Admin/tambah_tj',' Tambah Data Tujuan',array('class'=>'btn btn-warning mb-3 fa fa-database'));?>
                                </h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase bg-warning">
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">Tujuan Ekspedisi</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                if ($tj->num_rows() > 0) {
                                                    $no=1;
                                                    foreach ($tj->result_object() as $r) {
                                                    ?>
                                                <tr>
                                                    <th scope="row"><?=$no?></th>
                                                    <td><?=$r->tujuan_ekspedisi?></td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="<?=base_url('Admin/formedit_tj/'.$r->id_tujuan)?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="<?=base_url('Admin/hapustj/'.$r->id_tujuan)?>" class="text-danger" onclick="return confirm('Apakah Data Tujuan Mau Dihapus?')"><i class="ti-trash"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                    <?php
                                                    $no++;
                                                    }
                                                } else {
                                                    #data tidak ada
                                                    ?>
                                                    <tr>
                                                    <td colspan="3" align="center"> Data Kosong </td>
                                                    </tr>

                                                    <?php
                                                }
                                                
                                            ?>
                                                <!-- <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="#" class="text-danger" onclick="return confirm('Apakah Data Pasien Mau Dihapus?')"><i class="ti-trash"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->

</div>