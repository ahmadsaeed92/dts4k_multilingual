<?php ?>
<!DOCTYPE html>
<html lang="en">
    <body class="login-bg">
        <div class="login-container">
            <img class="login-logo"  role="img" src="<?php echo asset_url() . "images/logo.png" ?>" width="335" height="85">
            <h2>Welcome</h2>
            <p>DTS4K is a reporting tool for store managers from Techknow.</p>
            <form method="post" name="login_form" action="<?php echo base_url() . "index.php/login/check/" ?>">
                <?php if (($this->session->flashdata('message'))) { ?>
                    <!--style="background-color: transparent; border-color: transparent"-->
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Error!</strong> <?php echo $this->session->flashdata('message'); ?>
                    </div>
                <?php } ?>
                <div class="form-group"><input class="form-control" type="password" placeholder="Password" required name="password"  value="">
                    <i class="fa fa-key" aria-hidden="true">&nbsp;</i>
                </div>
                <div class="form-group">
                    <select class="form-control" name="language" id="lang_selector" required>
                        <option value="">Select a Language</option>
                        <option value="english">English</option>
                        <option value="french">French</option>
                    </select>
                    <!--<i class="fa fa-key" aria-hidden="true">&nbsp;</i>-->
                </div>
                <!--<div class="form-group"><div class="checkbox-inline"><label><input name="" type="checkbox" value=""> <span>Keep me logged in.</span>  </label></div> </div>-->
                <div class="form-group">
                    <input name="" class="btn btn-default" value="SIGN IN"  type="submit">
                </div>
                <p class="copyright text-center">All Rights Reserved <br> Copyrights &copy; 2017 Techknow <br> Version 1.0.0</p>
            </form>
        </div>
    </body>
</html>
