
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"> </i></div>
                                    <div>
                                        Users management
                                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <?php
                                $update_data=$this->session->userdata('success');
                                if(!empty($update_data)){
                                    ?> <div class="alert alert-primary"><?php echo $update_data; ?></div><?php
                                }
                                ?>
                            </div>
                            <div class="col-md-12">
                                <form action=""method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                        <label for="email">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" id="email"name="y_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Email:</label>
                                        <input type="email" class="form-control" placeholder="Enter Email" id="pwd"name="y_email"required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Password:</label>
                                        <input type="password" class="form-control" placeholder="Enter password" id="pwd"name="y_password"required>
                                    </div>
                                    <div class="dropdown">
                                        <?php  ?>
                                        <Select name="user_select"required>
                                                <option value="">Select</option>
                                                <?php if($user_type !== 'staff' ){ ?>
                                                <option value="staff">Staff</option>
                                                <?php } ?>
                                                <option value="student">Student</option>
                                        </Select>
                                    </div> 
                                    <!-- <div class="form-group form-check">
                                        <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"> Remember me
                                        </label>
                                    </div> -->
                                    <hr>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                   