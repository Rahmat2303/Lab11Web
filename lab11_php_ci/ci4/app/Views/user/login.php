<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    <title>Login</title>
</head>
<body>
    <div id="login-wrapper">
        <h1 class="m-3">Sign In</h1>
        <?php if(session()->getFlashdata('flash_msg')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('flash_msg'); ?></div>
        <?php  endif; ?>
        <form action="" method="post">
            <div class="m-3">
                <label for="InputForEmail" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" id="InputForEmail" 
                value="<?=  set_value('email'); ?>">
            </div> 

            <div class="m-3">
                <label for="InputForPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="InputForPassword">
            </div>
            <button type="submit" class="btn btn-primary m-3">Login</button>
        </form> 
    </div>
</body>
</html>