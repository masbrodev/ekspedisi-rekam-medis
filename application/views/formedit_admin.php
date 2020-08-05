<div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Edit User</h4>
                                        <?php echo form_open('Admin/edit_admin'); ?>
                                        <?php echo form_hidden('id',$ad->id_admin); ?>

                                            <div class="form-group">
                                                <label for="un">Username</label>

                                                <?php echo form_input("username",$ad->username, array('class'=>'form-control', 'id'=>'un', 'placeholder'=>'Username')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('username',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="pass">Password</label>

                                                <?php echo form_password("password",$ad->password, array('class'=>'form-control', 'id'=>'pass', 'placeholder'=>'Password')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('password',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="kp">Konfirmasi Password *)</label>

                                                <?php echo form_password("konpassword",set_value('konpassword'), array('class'=>'form-control', 'id'=>'kp', 'placeholder'=>'Password')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('konpassword',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="st">Status</label>

                                                <?php
                                                if ($ad->status=="Admin") {
                                                    $a=TRUE;
                                                    $u=FALSE;
                                                } else {
                                                    $a=FALSE;
                                                    $u=TRUE;
                                                }

                                                echo form_radio('status','User',$u) ?> User
                                                <?php echo form_radio('status','Admin',$a) ?> Admin
                                                <br/>
                                                <small class="text-danger">
                                                <?php echo form_error('status',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="kp">*) Kosongi Jika Tidak Mau Diubah</label>


                                            </div>

                                            <?php echo form_submit('edit','EDIT',array('class'=>'btn btn-primary mt-4 pr-4 pl-4')); ?>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

</div>