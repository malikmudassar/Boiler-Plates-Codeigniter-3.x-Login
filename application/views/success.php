<!DOCTYPE HTML>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <title><?php echo $title;?></title>
</head>
<body>
<div class="container">
    <div class="row" style="padding-top: 50px; ">
        <?php if($this->session->flashdata('log_success')){?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('log_success');?>
            </div>
        <?php }?>
        <div class="col-md-6 col-md-offset-3 alert alert-success" style="padding-top:30px;;box-shadow: 5px 5px 5px grey;">
            <h3>Welcome <?php echo $this->session->userdata['fullname']?>! to your Dashboard</h3>
            <hr>
            <div style="text-align: center">
                <a href="<?php echo base_url().'login/change_password'?>" class="btn btn-link">Change Password</a> |
                <a href="<?php echo base_url().'login/logout'?>" class="btn btn-link">Logout</a>
            </div>

        </div>
    </div>
</div>
</body>

</html>

