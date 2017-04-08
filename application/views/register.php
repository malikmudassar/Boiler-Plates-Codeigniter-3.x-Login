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
        <div class="col-md-4 col-md-offset-4" style="padding-top:30px;background-color:#f9f6f6 ;box-shadow: 5px 5px 5px grey;">
            <?php if(isset($errors)){?>
                <div class="alert alert-danger">
                    <h4>Errors!</h4>
                    <?php print_r($errors);?>
                </div>
            <?php }?>
            <form action="" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="fullname"/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" />
                </div>
                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Register </button>
                    <a href="<?php echo base_url().'Login'?>" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>

