<?php ?>
<div class="container-fluid inner">
    <div class="panel panel-default settings-panel">
        <div class="panelhead"></div>
        <div class="panel-heading"><?php echo $title; ?></div>
        <div class="panel-body">
            <div class="row-setting">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12  setting-label">Timer Versioin</div>
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">Tkets2_voL13</div>
            </div>
            <div class="row-setting">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12  setting-label">Goals</div>
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                    <div class="form-group">
                        <ul class="list">
                            <li>
                                <div class="row">
                                    <div class="col-sm-6 col-md-3"><span class="btn btn-success">Green</span></div>
                                    <div class="col2 col-sm-6 col-md-9">
                                        <!--<span class="val1"><= 111s</span>--> 
                                        <span class="">Less than equal to <?php echo $this->config->item('goals_green_value', 'global_settings'); ?> seconds</span> 
                                        <!--<span class="val2">- </span>-->
                                        <!--<span class="val3">80s</span>-->  
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-6 col-md-3"><span class="btn btn-warning" >Yellow</span></div> 
                                    <div class="col2 col-sm-6 col-md-9">
                                        <span class="">Greater than <?php echo $this->config->item('goals_green_value', 'global_settings'); ?> seconds</span> 
                                        <span class=""> and </span>
                                        <span class="">Less than equal to <?php echo $this->config->item('goals_red_value', 'global_settings'); ?> seconds</span>  
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-6 col-md-3"><span class="btn btn-danger" >Red</span></div> 
                                    <div class="col2 col-sm-6 col-md-9">
                                        <span class="">Greater than <?php echo $this->config->item('goals_red_value', 'global_settings'); ?> seconds</span> 
                                        <!--<span class="val2"> - </span>-->
                                        <!--<span class="val3">80s</span>-->  
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row-setting">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 setting-label">Dayparts</div>
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                    <ul class="list">
                        <li>
                            <div class="col1">Breakfast</div>
                            <div class="col2">
                                <span class="val1">04:00</span> 
                                <span class="val2">-</span>
                                <span class="val3">10:30</span>  
                            </div>
                        </li>
                        <li>
                            <div class="col1">Afternoon</div>
                            <div class="col2">
                                <span class="val1">10:30</span> 
                                <span class="val2">-</span>
                                <span class="val3">14:00</span>  
                            </div>
                        </li>
                        <li>
                            <div class="col1">Lunch</div>
                            <div class="col2">
                                <span class="val1">14:00</span> 
                                <span class="val2">-</span>
                                <span class="val3">17:00</span>  
                            </div>
                        </li>
                        <li>
                            <div class="col1">Evening</div>
                            <div class="col2">
                                <span class="val1">17:00</span> 
                                <span class="val2">-</span>
                                <span class="val3">20:00</span>  
                            </div>
                        </li>
                        <li>
                            <div class="col1">Dinner</div>
                            <div class="col2">
                                <span class="val1">20:00</span> 
                                <span class="val2">-</span>
                                <span class="val3">22:00</span>  
                            </div>
                        </li>
                        <li>
                            <div class="col1">Overnight</div>
                            <div class="col2">
                                <span class="val1">22:00</span> 
                                <span class="val2">-</span>
                                <span class="val3">04:00</span>  
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row-setting">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12  setting-label">Hours of Operation</div>
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                    <ul class="list">
                        <li>
                            <div class="col2">
                                <span class="val1">N/A</span> 
                                <!--<span class="val2">-</span>-->
                                <!--<span class="val3">03:00</span>-->  
                            </div>
                        </li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</div>