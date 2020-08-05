<div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Form User</h4>
                                        <?php echo form_open('Admin/simpan_admin'); ?>

                                            <div class="form-group">
                                                <label for="un">Username</label>

                                                <?php echo form_input("username",set_value('username'), array('class'=>'form-control', 'id'=>'un', 'placeholder'=>'Username')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('username',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="pass">Password</label>

                                                <?php echo form_password("password",set_value('password'), array('class'=>'form-control', 'id'=>'pass', 'placeholder'=>'Password')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('password',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="kp">Konfirmasi Password</label>

                                                <?php echo form_password("konpassword",set_value('konpassword'), array('class'=>'form-control', 'id'=>'kp', 'placeholder'=>'Password')); ?>
                                                <small class="text-danger">
                                                <?php echo form_error('konpassword',' '); ?>
                                                </small>

                                            </div>

                                            <div class="form-group">
                                                <label for="st">Status</label>

                                                <?php echo form_radio('status','User',set_value('status')) ?> User
                                                <?php echo form_radio('status','Admin',set_value('status')) ?> Admin
                                                <br/>
                                                <small class="text-danger">
                                                <?php echo form_error('status',' '); ?>
                                                </small>

                                            </div>

                                            <?php echo form_submit('save','SIMPAN',array('class'=>'btn btn-primary mt-4 pr-4 pl-4')); ?>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

</div>