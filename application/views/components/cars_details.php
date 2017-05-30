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
        <div class="panel-heading"><?php echo $title; ?></div>
        <div class="panel-body">
            <div class="report-filter">
                <form method="post" class="start_end_form" action="<?php echo base_url() . "index.php/cars_details/generate_report/" ?>">
                    <div class="start-time">
                        <label><?php echo $this->lang->line('reports_cars_labels_start_time'); ?></label>
                        <input title="<?php echo $this->lang->line('tooltip_start_datetime_cars_details'); ?>"  type="text" <?php echo (isset($start_date) ? 'value = "' . $start_date . '"' : ''); ?> id="start_date_cars_details" required name="start_date" class="datepicker datepicker_start">
                        <?php if (($this->session->flashdata('message'))) { ?>
                            <!--style="background-color: transparent; border-color: transparent"-->
                            <div class="alert alert-danger" style="margin-top: 15px;">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Error!</strong> <?php echo $this->session->flashdata('message'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="end-time">
                        <label><?php echo $this->lang->line('reports_cars_labels_end_time'); ?></label>
                        <input title="<?php echo $this->lang->line('tooltip_end_datetime_cars_details'); ?>" type="text" <?php echo (isset($end_date) ? 'value = "' . $end_date . '"' : ''); ?> id="end_date_cars_details" required name="end_date" class="datepicker datepicker_end">
                    </div>
                    <button title="<?php echo $this->lang->line('tooltip_generate_report_button'); ?>" type="submit" class="btn btn-default pull-right submit_button"><?php echo $this->lang->line('reports_cars_labels_generate_btn'); ?></button>
                </form>
            </div>
            <!--<div id="infoMessage"><?php echo $this->session->flashdata('message'); ?></div>-->

            <?php if (!empty($descriptor)) { ?>
                <div class="report-generated clearfix">
                    <?php echo $descriptor; ?>   
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><?php echo $this->lang->line('reports_cars_labels_cols_sr'); ?></th>
                                <th><?php echo $this->lang->line('reports_cars_labels_cols_arrival_time'); ?></th>
                                <th><?php echo $this->lang->line('reports_cars_labels_cols_car_in_lane'); ?></th>
                                <th><?php echo $this->lang->line('reports_cars_labels_cols_greet'); ?></th>
                                <th><?php echo $this->lang->line('reports_cars_labels_cols_menu'); ?></th>
                                <th><?php echo $this->lang->line('reports_cars_labels_cols_queue1'); ?></th>
                                <th><?php echo $this->lang->line('reports_cars_labels_cols_cashier'); ?></th>
                                <th><?php echo $this->lang->line('reports_cars_labels_cols_queue2'); ?></th>
                                <th><?php echo $this->lang->line('reports_cars_labels_cols_pickup'); ?></th>
                                <th><?php echo $this->lang->line('reports_cars_labels_cols_total'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (count($data) == 0) {
                                echo '<tr><td colspan="10">No Records Found</td></tr>';
                            } else {
                                $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
                                $sr_no = ($page == 0) ? $page * $per_page : ($page - 1 ) * $per_page;
                                foreach ($data as $row):
                                    $sr_no++;
                                    ?>
                                    <tr>
                                        <td><?php echo $sr_no; ?></td>
                                        <td><?php echo user_date($row['begin_time']); ?></td>
                                        <td><?php echo empty($row['laneStamp']) ? 'N/A' : $row['laneStamp']; ?></td>
                                        <td><?php echo secs2minsecs((int) $row['greet_time']); ?></td>
                                        <td><?php echo secs2minsecs((int) $row['menu_time']); ?></td>
                                        <td><?php echo secs2minsecs((int) $row['queue1']); ?></td>
                                        <td><?php echo secs2minsecs((int) $row['cashier_time']); ?></td>
                                        <td><?php echo secs2minsecs((int) $row['queue2']); ?></td>
                                        <td><?php echo secs2minsecs((int) $row['pick_up']); ?></td>
                                        <td><?php echo secs2minsecs((int) $row['total_time']); ?></td>
                                    </tr>
                                    <?php
                                endforeach;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php echo $links; ?>
                <!--<div class="pagination">
                    <a href="#"><i class="fa fa-angle-double-left"></i></a>
                    <a href="#"><i class="fa fa-angle-left"></i></a>
                    <a href="#">1</a>
                    <a class="active" href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                    <a href="#"><i class="fa fa-angle-double-right"></i></a>
                </div>-->
            <?php } ?>
        </div>
    </div>
</div>
</div>