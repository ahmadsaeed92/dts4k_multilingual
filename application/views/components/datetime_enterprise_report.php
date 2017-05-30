<?php ?>

<!-- HEADER SECTION -->

<!-- CONTENT SECTION -->
<!-- Form -->
<?php if (!empty($descriptor) && !empty($data)) { ?>
    <div class="report-generated clearfix">
        <?php echo $descriptor; ?>
    </div>
    <!---->
    <div class="reports-table">
        <div class="col-md-4 col-lg-2 col-sm-6 col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="3" >Greet</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3">
                            <table class="table inner-table">
                                <tr>
                                    <td>AVERAGE TIME</td>
                                    <td><?php echo secs2minsecs((int) $data['events_result'][0]['avg_time_greet']) ?></td>
                                </tr>
                                <tr>
                                    <td>TOTAL TIME</td>
                                    <td><?php echo secs2hour_min_secs((int) $data['events_result'][0]['total_time_greet']) ?></td>
                                </tr>
                                <tr>
                                    <td>TOTAL CARS</td>
                                    <td><?php echo $data['events_result'][0]['total_cars_greet'] ?></td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table class="table car-table">
                                <tr><th colspan="3">Top 5 Cars</th></tr>
                                <tr>		      		
                                    <th>Car #</th>
                                    <th>Time</th>
                                    <th>Sec</th>
                                </tr>
                                <?php
                                if (count($data['top_result']['top_greet']) > 0) {
                                    foreach ($data['top_result']['top_greet'] as $row):
                                        $date = user_date($row['time_stamp']);
                                        $date = explode(" ", $date);
                                        ?>
                                        <tr>
                                            <td><?php echo $row['car_no'] ?></td>
                                            <td><?php echo $date[0] ?> <br/> <?php echo $date[1] ?></td>
                                            <td><?php echo secs2minsecs((int) $row['secs']) ?></td>
                                        </tr>
                                        <?php
                                    endforeach;
                                }
                                else {
                                    echo '<tr><td colspan="3">No data Found</td></tr>';
                                }
                                ?>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="col-md-4 col-lg-2 col-sm-6 col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Menu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3">
                            <table class="table inner-table">
                                <tr>
                                    <td>AVERAGE TIME</td>
                                    <td><?php echo secs2minsecs((int) $data['events_result'][0]['avg_time_menu']) ?></td>
                                </tr>
                                <tr>
                                    <td>TOTAL TIME</td>
                                    <td><?php echo secs2hour_min_secs((int) $data['events_result'][0]['total_time_menu']) ?></td>
                                </tr>
                                <tr>
                                    <td>TOTAL CARS</td>
                                    <td><?php echo $data['events_result'][0]['total_cars_menu'] ?></td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table class="table car-table">
                                <tr><th colspan="3">Top 5 Cars</th></tr>
                                <tr>		      		
                                    <th>Car #</th>
                                    <th>Time</th>
                                    <th>Sec</th>
                                </tr>
                                <?php
                                if (count($data['top_result']['top_menu']) > 0) {
                                    foreach ($data['top_result']['top_menu'] as $row):
                                        $date = user_date($row['time_stamp']);
                                        $date = explode(" ", $date);
                                        ?>
                                        <tr>
                                            <td><?php echo $row['car_no'] ?></td>
                                            <td><?php echo $date[0] ?> <br/> <?php echo $date[1] ?></td>
                                            <td><?php echo secs2minsecs((int) $row['secs']) ?></td>
                                        </tr>
                                        <?php
                                    endforeach;
                                }
                                else {
                                    echo '<tr><td colspan="3">No data Found</td></tr>';
                                }
                                ?>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 col-lg-2 col-sm-6 col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Cashier</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3">
                            <table class="table inner-table">
                                <tr>
                                    <td>AVERAGE TIME</td>
                                    <td><?php echo secs2minsecs((int) $data['events_result'][0]['avg_time_cash']) ?></td>
                                </tr>
                                <tr>
                                    <td>TOTAL TIME</td>
                                    <td><?php echo secs2hour_min_secs((int) $data['events_result'][0]['total_time_cash']) ?></td>
                                </tr>
                                <tr>
                                    <td>TOTAL CARS</td>
                                    <td><?php echo $data['events_result'][0]['total_cars_cash'] ?></td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table class="table car-table">
                                <tr><th colspan="3">Top 5 Cars</th></tr>
                                <tr>		      		
                                    <th>Car #</th>
                                    <th>Time</th>
                                    <th>Sec</th>
                                </tr>
                                <?php
                                if (count($data['top_result']['top_cash']) > 0) {
                                    foreach ($data['top_result']['top_cash'] as $row):
                                        $date = user_date($row['time_stamp']);
                                        $date = explode(" ", $date);
                                        ?>
                                        <tr>
                                            <td><?php echo $row['car_no'] ?></td>
                                            <td><?php echo $date[0] ?> <br/> <?php echo $date[1] ?></td>
                                            <td><?php echo secs2minsecs((int) $row['secs']) ?></td>
                                        </tr>
                                        <?php
                                    endforeach;
                                }
                                else {
                                    echo '<tr><td colspan="3">No data Found</td></tr>';
                                }
                                ?>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 col-lg-2 col-sm-6 col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Pickup</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3">
                            <table class="table inner-table">
                                <tr>
                                    <td>AVERAGE TIME</td>
                                    <td><?php echo secs2minsecs((int) $data['events_result'][0]['avg_time_puw']) ?></td>
                                </tr>
                                <tr>
                                    <td>TOTAL TIME</td>
                                    <td><?php echo secs2hour_min_secs((int) $data['events_result'][0]['total_time_puw']) ?></td>
                                </tr>
                                <tr>
                                    <td>TOTAL CARS</td>
                                    <td><?php echo $data['events_result'][0]['total_cars_puw'] ?></td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table class="table car-table">
                                <tr><th colspan="3">Top 5 Cars</th></tr>
                                <tr>		      		
                                    <th>Car #</th>
                                    <th>Time</th>
                                    <th>Sec</th>
                                </tr>
                                <?php
                                if (count($data['top_result']['top_puw']) > 0) {
                                    foreach ($data['top_result']['top_puw'] as $row):
                                        $date = user_date($row['time_stamp']);
                                        $date = explode(" ", $date);
                                        ?>
                                        <tr>
                                            <td><?php echo $row['car_no'] ?></td>
                                            <td><?php echo $date[0] ?> <br/> <?php echo $date[1] ?></td>
                                            <td><?php echo secs2minsecs((int) $row['secs']) ?></td>
                                        </tr>
                                        <?php
                                    endforeach;
                                }
                                else {
                                    echo '<tr><td colspan="3">No data Found</td></tr>';
                                }
                                ?>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 col-lg-2 col-sm-6 col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="1">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="1">
                            <table class="table inner-table">
                                <tr>
                                    <td>AVERAGE TIME</td>
                                    <td><?php echo secs2minsecs((int) $data['events_result'][0]['avg_time_total']) ?></td>
                                </tr>
                                <tr>
                                    <td>TOTAL TIME</td>
                                    <td><?php echo secs2hour_min_secs((int) $data['events_result'][0]['total_time_total']) ?></td>
                                </tr>
                                <tr>
                                    <td>TOTAL CARS</td>
                                    <td><?php echo $data['events_result'][0]['total_cars_total'] ?></td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table class="table car-table">
                                <tr><th colspan="3">Top 5 Cars</th></tr>
                                <tr>		      		
                                    <th>Car #</th>
                                    <th>Time</th>
                                    <th>Sec</th>
                                </tr>
                                <?php
                                if (count($data['top_result']['top_total']) > 0) {
                                    foreach ($data['top_result']['top_total'] as $row):
                                        $date = user_date($row['time_stamp']);
                                        $date = explode(" ", $date);
                                        ?>
                                        <tr>
                                            <td><?php echo $row['car_no'] ?></td>
                                            <td><?php echo $date[0] ?> <br/> <?php echo $date[1] ?></td>
                                            <td><?php echo secs2minsecs((int) $row['secs']) ?></td>
                                        </tr>
                                        <?php
                                    endforeach;
                                }
                                else {
                                    ?>
                                    <tr><td colspan="3">No data Found</td></tr>
                                <?php }
                                ?>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 col-lg-2 col-sm-6 col-xs-12">
            <table class="table inner-table">
                <thead>
                    <tr>
                        <th colspan="3">Goals Achieved</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="green" rowspan="3">
                            GREEN <br>
                        </td>
                        <td>%</td>
                        <td><?php echo $data['goals_result'][0]['green_pct'] ?></td>
                    </tr>
                    <tr>
                        <td>#</td>
                        <td><?php echo $data['goals_result'][0]['green_count'] ?></td>
                    </tr>
                    <tr>
                        <td>Tgt</td>
                        <td><input class="input_h" title="<?php echo $this->lang->line('tooltip_green_target_input'); ?>" id="green_target_input" name="green_target" <?php echo (isset($green_target) ? 'value = "' . $green_target . '"' : ''); ?> min="0"  type="number" /></td>
                    </tr>
                    <tr>
                        <td  class="yellow" rowspan="3">YELLOW</td>
                        <td>%</td>
                        <td><?php echo $data['goals_result'][0]['yellow_pct'] ?></td>
                    </tr>
                    <tr>
                        <td>#</td>
                        <td><?php echo $data['goals_result'][0]['yellow_count'] ?></td>
                    </tr>
                    <tr>
                        <td>Tgt</td>
                        <td>G < Y <= R</td>
                    </tr>
                    <tr>
                        <td  class="red" rowspan="3">RED</td>
                        <td>%</td>
                        <td><?php echo $data['goals_result'][0]['red_pct'] ?></td>
                    </tr>
                    <tr>
                        <td>#</td>
                        <td><?php echo $data['goals_result'][0]['red_count'] ?></td>
                    </tr>
                    <tr>
                        <td>Tgt</td>
                        <td><input title="<?php echo $this->lang->line('tooltip_red_target_input'); ?>" class="input_h"  id="red_target_input" name="red_target" <?php echo (isset($red_target) ? 'value = "' . $red_target . '"' : ''); ?> min="0"  type="number" /></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php } ?>
</div>
</div>
</div>
</div>