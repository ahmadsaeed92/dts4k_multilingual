<?php ?>
<div class="container-fluid inner">
    <div class="panel panel-default" style="margin-bottom: 0">
        <div class="panelhead"></div>
        <div class="panel-heading"><?php echo $title; ?></div>
        <div class="panel-body">
            <div class="report-filter">
                <form method="post" class="single_form" action="<?php echo base_url() . "index.php/" . $this->uri->segment(1, 0) . "/generate_report/" ?>">
                    <div class="start-time">
                        <label>Pick Date:</label>
                        <input type="text" title="<?php echo $this->lang->line('tooltip_select_daypart_date'); ?>" required <?php echo (isset($start_date) ? 'value = "' . $start_date . '"' : ''); ?> id="daypart_date_picker" name="start_date" class="datepicker datepicker_start">
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
                    <div class="end-time">
                        <label>Select Daypart:</label>
                        <select title="<?php echo $this->lang->line('tooltip_select_daypart_dropdown'); ?>" style="display: inline; width: 40%; height: 37px"  type="text" required <?php echo (isset($end_date) ? 'value = "' . $end_date . '"' : ''); ?> id="daypart_select" name="end_date" class="form-control">
                            <option value="DP1">DP1 – 4:00am</option>
                            <option value="DP2">DP2 – 10:30am</option>
                            <option value="DP3">DP3 – 2:00pm</option>
                            <option value="DP4">DP4 – 5:00pm</option>
                            <option value="DP5">DP5 – 8:00pm</option>
                            <option value="DP6">DP6 – 10:00pm</option>
                        </select>
                    </div>
                    <button type="submit" title="<?php echo $this->lang->line('tooltip_generate_report_button'); ?>" class="btn btn-default pull-right submit_button">Generate Report </button>
                </form>
            </div>