
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
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    Active Users
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group"><a href="<?php echo base_url().'student_staff/add'?>"><button class="active btn btn-focus">Create</button></a></div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                               
                                <th>Users</th>
                                <th class="text-center">Count</th>
                                <th class="text-center">Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">Student</td>
                                <td class="text-center"><div class="badge badge-success"><?php echo $student_count; ?></div></td>
                                <td class="text-center">
                                    <?php //if(isset($current_user)){ ?>
                                <?php #if($current_user['user_type'] == 'admin'){ ?> 
                                <a href="<?php echo base_url().'student/student_screen'; ?>"><button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button></a></td>
                                <?php# }else{
                                    ?>   
                                    <!-- <td class="text-center"> 
                                    <a href="#"><button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Only admin can see </button></a></td>  -->
                                    <?php
                               # } }?>
                                </tr>
                                <tr>
                                    <td class="text-center">Staff</td>
                                    <td class="text-center"><div class="badge badge-success"><?php echo $staff_count; ?></div></td>
                                    <td class="text-center"><a href="<?php echo base_url().'staff/staff_screen'; ?>"><button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button></a></td>
                                </tr>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
                <div class="d-block text-center card-footer">
                    <!-- <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button> <button class="btn-wide btn btn-success">Save</button> -->
                </div>
            </div>
        </div>
    </div>
</div>
