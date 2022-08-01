
<div class="app-main__outer">
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"> </i></div>
                <div>
                    <!-- <?php echo $current_user['user_type']?> -->
                    Student management
                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
                </div>
            </div>
            <?php if($current_user['user_type']=='staff'){  ?>
            <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group"><a href="<?php echo base_url().'student_staff/add'?>"><button class="active btn btn-focus">Create</button></a></div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="row">
                    
        <div class="col-md-12">
        <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Firstname</th>
            <th>Email</th>
            <th>Password</th>
            <th>Created</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($users_data)){
                foreach($users_data as $users){
                    ?>
                    <tr>
                        <td><?php echo $users['userid'] ?></td>
                        <td><?php echo $users['user_name'] ?></td>
                        <td><?php echo $users['user_email'] ?></td>
                        <td><?php echo $users['user_password'] ?></td>
                        <td><?php echo $users['created_at'] ?></td>
                        <?php if(isset($user_type)){ 
                        if($user_type !== 'student'){ ?>
                        <td>
                            <a href="<?php echo base_url('student/delete/'.$users['userid'].'');?>"class="btn btn-danger">Delete</a>
                        </td>
                        <?php }} ?>
                    </tr>
            <?php
                    }
            } 
            ?>
        </tbody>
    </table>
        </div>
    </div>
</div>
