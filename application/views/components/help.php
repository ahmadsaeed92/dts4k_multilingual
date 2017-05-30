<?php ?>
<div class="container-fluid inner">
    <div class="panel panel-default">
        <div class="panelhead"></div>
        <div class="panel-heading"><?php echo $title; ?></div>
        <div class="panel-body" >
            <div class="" >
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-success help">
                        <!--                        <div class="panel-heading help-title">
                                                    <h4 class="panel-title">Overview<a data-toggle="collapse" data-parent="#accordion" class="arrow-down" href="#overview">a</a></h4>
                                                </div>-->
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#overview"> <h4 class="panel-title"><?php echo $this->lang->line('labels_help_overview'); ?><span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="overview" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->lang->line('help_overview')); ?>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-success help">
                        <!--                        <div class="panel-heading help-title">
                                                    <h4 class="panel-title">General<a data-toggle="collapse" class="arrow-down" data-parent="#accordion" href="#general">b</a></h4>
                                                </div>-->
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#general"> <h4 class="panel-title"><?php echo $this->lang->line('labels_help_general'); ?><span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="general" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->lang->line('help_general')); ?>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#cars_details"> <h4 class="panel-title"><?php echo $this->lang->line('labels_help_cars_details'); ?><span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="cars_details" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->lang->line('help_cars_details')); ?>
                            </div>
                        </div>
                    </div>


                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#hourly_report"> <h4 class="panel-title"><?php echo $this->lang->line('labels_help_hourly'); ?><span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="hourly_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->lang->line('help_hourly_report')); ?>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#daypart_report"> <h4 class="panel-title"><?php echo $this->lang->line('labels_help_daypart'); ?><span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="daypart_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->lang->line('help_daypart_report')); ?>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#daily_report"> <h4 class="panel-title"><?php echo $this->lang->line('labels_help_daily'); ?><span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="daily_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->lang->line('help_daily_report')); ?>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#weekly_report"> <h4 class="panel-title"><?php echo $this->lang->line('labels_help_weekly'); ?><span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="weekly_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->lang->line('help_weekly_report')); ?>
                            </div>
                        </div>
                    </div>


                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#monthly_report"> <h4 class="panel-title"><?php echo $this->lang->line('labels_help_monthly'); ?><span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="monthly_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->lang->line('help_monthly_report')); ?>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#yearly_report"> <h4 class="panel-title"><?php echo $this->lang->line('labels_help_yearly'); ?><span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="yearly_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->lang->line('help_yearly_report')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#custom_report"> <h4 class="panel-title"><?php echo $this->lang->line('labels_help_custom'); ?><span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="custom_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->lang->line('help_custom_report')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#daywise_comparison_report"> <h4 class="panel-title"><?php echo $this->lang->line('labels_help_daywise_comp'); ?><span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="daywise_comparison_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->lang->line('help_daywise_comparison_report')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#hourly_comparison_report"> <h4 class="panel-title"><?php echo $this->lang->line('labels_help_hourly_comp'); ?><span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="hourly_comparison_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->lang->line('help_hourly_comparison_report')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#daypart_comparison_report"> <h4 class="panel-title"><?php echo $this->lang->line('labels_help_daypart_comp'); ?><span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="daypart_comparison_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->lang->line('help_daypart_comparison_report')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#settings"> <h4 class="panel-title"><?php echo $this->lang->line('labels_help_settings'); ?><span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="settings" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->lang->line('help_settings')); ?>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
</div>