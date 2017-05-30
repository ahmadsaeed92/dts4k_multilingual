<?php ?>
<div class="container-fluid inner">
    <div class="panel panel-default" style="margin-bottom: 0">
        <div class="panelhead"></div>
        <div class="panel-heading"><?php echo $title; ?></div>
        <div class="panel-body">
            <div class="report-filter">
                <form method="post" class="" action="<?php echo base_url() . "index.php/" . $this->uri->segment(1, 0) . "/generate_report/" ?>">
                    <div class="start-time">
                        <label>Pick Year:</label>
                        <input type="text" title="<?php echo $this->lang->line('tooltip_yearly'); ?>" readonly required <?php echo (isset($start_date) ? 'value = "' . $start_date . '"' : ''); ?> id="year_pickup" name="start_date" class="">
                        <input id="red_target_hidden" name="red_target" <?php echo (isset($red_target) ? 'value = "' . $red_target . '"' : ''); ?> min="0"  type="hidden" />
                        <input id="green_target_hidden" name="green_target" <?php echo (isset($green_target) ? 'value = "' . $green_target . '"' : ''); ?> min="0"  type="hidden" />
                        <?php if (($this->session->flashdata('message'))) { ?>
                            <!--style="background-color: transparent; border-color: transparent"-->
                            <div class="alert alert-danger" style="margin-top: 15px;">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Error!</strong> <?php echo $this->session->flashdata('message'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <!--        <div class="end-time">
                                <label>End Time:</label>
                                <input  type="text" required <?php echo (isset($end_date) ? 'value = "' . $end_date . '"' : ''); ?> id="end_date_cars_details" name="end_date" class="datepicker">
                            </div>-->
                    <button type="submit" title="<?php echo $this->lang->line('tooltip_generate_report_button'); ?>" class="btn btn-default pull-right">Generate Report </button>
                </form>
            </div>