<?php ?>
<!--<div class="main-container">
     HEADER SECTION 
    <header class="header container-fluid">
        <div class="col-md-4 col-sm-4 col-xs-12 pr">
            <a class="nav-btn" style="display:none!important;" href="#"><img src="<?php echo asset_url() . "images/bars.png" ?>" width="25" height="21" alt=""></a>
            <a href="#" class="logo"><img src="<?php echo asset_url() . "images/techknow.png" ?>" class="img-responsive" alt="" ></a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
            <a href="#"><img src="<?php echo asset_url() . "images/dts.png" ?>" class="img-responsive logo2" ></a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 ">
            <a href="<?php echo base_url() . "index.php/logout/" ?>" class="logout"><img src="<?php echo asset_url() . "images/icon-logout.png" ?>" width="19" height="18" alt="" ></a>
            <a href="#" class="pull-right logo3"><img src="<?php echo asset_url() . "images/client_logo.png" ?>" class="img-responsive" alt="" ></a>
        </div>
    </header>-->
<!-- CONTENT SECTION -->
<div class="container-fluid inner">
    <div class="panel panel-default">
        <div class="panelhead"></div>
        <div class="panel-heading"><?php echo $title; ?> 
            <!--<span class="pull-right"><?php echo $this->config->item('store#', 'global_settings'); ?></span>-->
        </div>
        <div class="panel-body">
            <div class="report-filter hc" style="padding: 0 0 42px;">
                <form method="post" class="comparison_form" action="<?php echo base_url() . "index.php/" . $this->uri->segment(1, 0) . "/generate_report/" ?>">
                    <div class="start-time">
                        <label>Day1:</label>
                        <input readonly title="<?php echo $this->lang->line('tooltip_comparison_day1'); ?>" type="text" required <?php echo (isset($start_date) ? 'value = "' . $start_date . '"' : ''); ?> id="day_1_comparison_report" name="start_date" class="date_only_picker">
                        <?php if (($this->session->flashdata('message'))) { ?>
                            <!--style="background-color: transparent; border-color: transparent"-->
                            <div class="alert alert-danger" style="margin-top: 15px;">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Error!</strong> <?php echo $this->session->flashdata('message'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="end-time">
                        <span class="compare-with" >Compare With</span>
                        <label>Day2:</label>
                        <input title="<?php echo $this->lang->line('tooltip_comparison_day2'); ?>" readonly type="text" required <?php echo (isset($end_date) ? 'value = "' . $end_date . '"' : ''); ?> id="day_2_comparison_report" name="end_date" class="date_only_picker">
                    </div>
                    <button title="<?php echo $this->lang->line('tooltip_generate_report_button'); ?>" type="submit" class="btn btn-default pull-right">Generate Report </button>
                </form>
            </div>
            <!--	<div class="report-generated clearfix">
                     <div class="store-name">Store: ALB 001</div>
                     <div class="comparison-date">
                     <span class="date1">6/13/2017</span>
                     <span class="day1">Monday</span>
                     <span>Compared with</span>
                     <span class="date2">6/18/2017</span>
                     <span class="day2">Tuesday</span>
                 </div>
             </div>
            -->
            <?php if (isset($data)): ?>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="height620">
                            <table class="fancyTable" id="myTable01" cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <?php if ($report_type != "daywise_comparison"): ?>
                                            <th><?php echo $comparator_column; ?></th>
                                        <?php endif; ?>
                                        <th>Greet</th>
                                        <th>Menu</th>
                                        <th>Cash</th>
                                        <th>PUW</th>
                                        <th>Total</th>
                                        <th>Cars</th>
                                        <th>Pullins</th>
                                        <th>Pullouts</th>
                                        <th>Date</th>
                                        <?php if ($report_type != "daywise_comparison"): ?>
                                            <th><?php echo $comparator_column; ?></th>
                                        <?php endif; ?>
                                        <th>Greet</th>
                                        <th>Menu</th>
                                        <th>Cash</th>
                                        <th>PUW</th>
                                        <th>Total</th>
                                        <th>Cars</th>
                                        <th>Pullins</th>
                                        <th>Pullouts</th>
                                    </tr>
                                </thead>
                                <tbody  style="border: solid 1px rgb(47, 59, 76); border-top: 0">
                                    <?php
                                    if (count($data) == 0) {
                                        echo '<caption align="bottom" style="text-align:center;">No Records Found</caption>';
                                    } else {
                                        foreach ($data as $row):
                                            ?>
                                            <tr>
                                                <td><?php echo user_date_only($row['dates'][0]); ?></td>
                                                <?php
                                                if ($report_type != "daywise_comparison"):
                                                    if ($report_type == "hourly_comparison") {
                                                        ?>
                                                        <td><?php echo get_hour_range_by_number($row['comparitor'][0]); ?></td>
                                                    <?php } else { ?>
                                                        <td><?php echo get_daypart_substring($row['comparitor'][0]); ?></td>
                                                    <?php }endif; ?>
                                                <td><?php echo secs2minsecs($row['avg_time_greet'][0]); ?></td>
                                                <td><?php echo secs2minsecs($row['avg_time_menu'][0]); ?></td>
                                                <td><?php echo secs2minsecs($row['avg_time_puw'][0]); ?></td>
                                                <td><?php echo secs2minsecs($row['avg_time_cash'][0]); ?></td>
                                                <td><?php echo secs2minsecs($row['avg_time_total'][0]); ?></td>
                                                <td><?php echo $row['total_cars_total'][0]; ?></td>
                                                <td><?php echo $row['pullins'][0]; ?></td>
                                                <td><?php echo $row['pullouts'][0]; ?></td>

                                                <td><?php echo user_date_only($row['dates'][1]); ?></td>
                                                <?php
                                                if ($report_type != "daywise_comparison"):
                                                    if ($report_type == "hourly_comparison") {
                                                        ?>
                                                        <td><?php echo get_hour_range_by_number($row['comparitor'][1]); ?></td>
                                                    <?php } else { ?>
                                                        <td><?php echo get_daypart_substring($row['comparitor'][1]); ?></td>
                                                    <?php }endif; ?>
                                                <td><?php echo secs2minsecs($row['avg_time_greet'][1]); ?></td>
                                                <td><?php echo secs2minsecs($row['avg_time_menu'][1]); ?></td>
                                                <td><?php echo secs2minsecs($row['avg_time_puw'][1]); ?></td>
                                                <td><?php echo secs2minsecs($row['avg_time_cash'][1]); ?></td>
                                                <td><?php echo secs2minsecs($row['avg_time_total'][1]); ?></td>
                                                <td><?php echo $row['total_cars_total'][1]; ?></td>
                                                <td><?php echo $row['pullins'][1]; ?></td>
                                                <td><?php echo $row['pullouts'][1]; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>	
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            endif;
            ?>
        </div>
    </div>
</div>
</div>