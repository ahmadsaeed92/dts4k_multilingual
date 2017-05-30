<?php ?>
<?php
//$uri_segment = $this->uri->segment(1, 0);
//$enabled_uri_segment = array('hourly','daypart','daily','weekly','monthly','yearly','custom');
//if (in_array($uri_segment, $enabled_uri_segment)):
//    
?>
<!--<div class="main-container">-->
<?php //endif;  ?>
<div class="main-nav toggler mCustomScrollbar">
    <div class="navtop">
        <a class="close-menu" title="<?php echo $this->lang->line('tooltip_left_menu_toggle'); ?>" href="#"><img src="<?php echo asset_url() . "images/bars.png" ?>" width="25" height="21"></a>
        <a href="<?php echo base_url() ."index.php/switch_language" ?>" class="lang_changer"><?php echo empty($this->session->userdata('language')) || $this->session->userdata('language') == "english" ? "French" : "English"; ?></a>
    </div>
    <ul class="my-nav">
        <li class="main-link"><?php echo $this->lang->line('menu_reports_title'); ?></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "cars_details") ? "active" : ""; ?>" ><a  class="link-car" href="<?php echo base_url() . "index.php/cars_details/"; ?>"><?php echo $this->lang->line('menu_cars_details'); ?></a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "hourly") ? "active" : ""; ?>" ><a  class="link-hour" href="<?php echo base_url() . "index.php/hourly/" ?>"><?php echo $this->lang->line('menu_hourly'); ?></a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "daypart") ? "active" : ""; ?>" ><a  class="link-daypart" href="<?php echo base_url() . "index.php/daypart/" ?>"><?php echo $this->lang->line('menu_daypart'); ?></a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "daily") ? "active" : ""; ?>" ><a  class="link-day" href="<?php echo base_url() . "index.php/daily/" ?>"><?php echo $this->lang->line('menu_daily'); ?></a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "weekly") ? "active" : ""; ?>" ><a  class="link-week" href="<?php echo base_url() . "index.php/weekly/" ?>"><?php echo $this->lang->line('menu_week'); ?></a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "monthly") ? "active" : ""; ?>" ><a  class="link-month" href="<?php echo base_url() . "index.php/monthly/" ?>"><?php echo $this->lang->line('menu_month'); ?></a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "yearly") ? "active" : ""; ?>" ><a  class="link-year" href="<?php echo base_url() . "index.php/yearly/" ?>"><?php echo $this->lang->line('menu_year'); ?></a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "custom") ? "active" : ""; ?>" ><a  class="link-custom_dates" href="<?php echo base_url() . "index.php/custom/" ?>"><?php echo $this->lang->line('menu_custom_dates'); ?></a></li>
        <li class="main-link"> <?php echo $this->lang->line('menu_comparison_title'); ?></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "daywise_comparison") ? "active" : ""; ?>" ><a  class="link-day" href="<?php echo base_url() . "index.php/daywise_comparison/"; ?>"><?php echo $this->lang->line('menu_daywise_comparison'); ?></a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "daypart_comparison") ? "active" : ""; ?>" ><a  class="link-daypart" href="<?php echo base_url() . "index.php/daypart_comparison/"; ?>"><?php echo $this->lang->line('menu_daypart_comparison'); ?></a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "hourly_comparison") ? "active" : ""; ?>" ><a  class="link-hour" href="<?php echo base_url() . "index.php/hourly_comparison/"; ?>"><?php echo $this->lang->line('menu_hourly_comparison'); ?></a></li>
        <li class="main-link"><?php echo $this->lang->line('menu_settings_title'); ?></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "settings") ? "active" : ""; ?>" ><a  class="link-settings" href="<?php echo base_url() . "index.php/settings/"; ?>"><?php echo $this->lang->line('menu_view_settings'); ?></a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "help") ? "active" : ""; ?>" ><a  class="link-help" href="<?php echo base_url() . "index.php/help/"; ?>"><?php echo $this->lang->line('menu_help'); ?></a></li>
    </ul>
</div>