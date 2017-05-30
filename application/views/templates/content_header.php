<?php ?>
<div class="main-container">
    <header class="header container-fluid">
        <div class="col-md-4 col-sm-4 col-xs-12 pr">
            <a title="<?php echo $this->lang->line('tooltip_left_menu_toggle'); ?>" class="nav-btn" style="display:none!important;" href="#"><img src="<?php echo asset_url() . "images/bars.png" ?>" width="25" height="21" alt=""></a>
            <span class="logo"><img src="<?php echo asset_url() . "images/techknow.png" ?>" class="img-responsive" alt="" ></span>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
            <span><img src="<?php echo asset_url() . "images/dts4k.png" ?>" class="img-responsive logo2" ></span>
            <span class="s-name"><?php echo $this->config->item('store#', 'global_settings'); ?></span>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 ">
            <a title="<?php echo $this->lang->line('tooltip_logout_link'); ?>" href="<?php echo base_url() . "index.php/logout/" ?>" class="logout"><img src="<?php echo asset_url() . "images/icon-logout.png" ?>" width="19" height="18" alt="" ></a>
            <?php if (!empty($this->config->item('client_logo_file_path')) && file_exists($this->config->item('client_logo_file_path'))): ?>
                <span class="pull-right logo3"><img src="<?php echo base_url() . $this->config->item('client_logo_file_path'); ?>" class="img-responsive" alt="" ></span>
                <?php endif; ?>
        </div>
    </header>
    <div class="loader"></div>