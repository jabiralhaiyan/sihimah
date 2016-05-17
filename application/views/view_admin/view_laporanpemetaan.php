<?php
require_once('layout/layout_head.php');
require_once('layout/layout_sidemenu.php');
require_once('layout/layout_topmenu.php');
?>

            <!-- page content -->
            <div class="right_col" role="main">

                <br />
                <div class="">

                    <div class="row top_tiles">
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>
                                <div class="count"><?php echo $jumlahcabang; ?></div>

                                <h3>Cabang PT</h3>
                                <p>Jumlah cabang perguruan tinggi</p>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>
                                <div class="count"><?php echo $jumlahangkatan; ?></div>

                                <h3>Angkatan</h3>
                                <p>Jumlah angkatan</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Jumlah Lulusan<small>Tiap Angkatan</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="demo-container" style="height:280px">
                                            <div id="placeholder3xx3" class="demo-placeholder" style="width: 100%; height:250px;"></div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Jumlah Alumni Per Cabang<small>Berdasarkan pemetaan tiap PT</small></h2>
                                    <ul class="nav navbar-right">
                                        <li><a href="" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div class="row" style="border-bottom: 1px solid #E0E0E0; padding-bottom: 5px; margin-bottom: 5px;">
                                        <div class="col-md-6">
                                            <div class="row" style="text-align: center;">
                                                <canvas id="canvas1i" height="410" width="410" style="margin: 5px 10px 10px 0"></canvas>
                                                <h4 style="margin:0">Jumlah Alumni</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                                <h2>Cabang</h2>
                                                <p><img src="<?php echo base_url();?>assets/images/square1.png" width="30px" height="15px"> Surabaya </p>
                                                <p><img src="<?php echo base_url();?>assets/images/square2.png" width="30px" height="15px"> Sidoarjo </p>
                                                <p><img src="<?php echo base_url();?>assets/images/square3.png" width="30px" height="15px"> Mojokerto </p>
                                                <p><img src="<?php echo base_url();?>assets/images/square4.png" width="30px" height="15px"> Malang </p>
                                                <p><img src="<?php echo base_url();?>assets/images/square5.png" width="30px" height="15px"> Jember </p>
                                                <p><img src="<?php echo base_url();?>assets/images/square6.png" width="30px" height="15px"> Madura </p>
                                                <p><img src="<?php echo base_url();?>assets/images/square7.png" width="30px" height="15px"> Yogyakarta </p>
                                                <p><img src="<?php echo base_url();?>assets/images/square8.png" width="30px" height="15px"> Semarang </p>
                                                <p><img src="<?php echo base_url();?>assets/images/square9.png" width="30px" height="15px"> Solo </p>
                                                <p><img src="<?php echo base_url();?>assets/images/square10.png" width="30px" height="15px"> Jakarta </p>
                                                <p><img src="<?php echo base_url();?>assets/images/square11.png" width="30px" height="15px"> Bogor </p>
                                        </div>
                                        <div class="col-md-1">
                                                <center>
                                                <h2>Jumlah</h2>
                                                <strong><p><?php echo $jumlahalumnisby; ?></p></strong>
                                                <strong><p><?php echo $jumlahalumnisid; ?></p></strong>
                                                <strong><p><?php echo $jumlahalumnimoj; ?></p></strong>
                                                <strong><p><?php echo $jumlahalumnimal; ?></p></strong>
                                                <strong><p><?php echo $jumlahalumnijem; ?></p></strong>
                                                <strong><p><?php echo $jumlahalumnimad; ?></p></strong>
                                                <strong><p><?php echo $jumlahalumniyog; ?></p></strong>
                                                <strong><p><?php echo $jumlahalumnisem; ?></p></strong>
                                                <strong><p><?php echo $jumlahalumnisol; ?></p></strong>
                                                <strong><p><?php echo $jumlahalumnijak; ?></p></strong>
                                                <strong><p><?php echo $jumlahalumnibog; ?></p></strong>
                                                </center>
                                        </div>
                                        <div class="col-md-2">
                                            <center>
                                                <h2>Prosentase</h2>
                                                <strong><p><?php echo ($jumlahalumnisby/$totalalumni*100); ?> %</p></strong>
                                                <strong><p><?php echo ($jumlahalumnisid/$totalalumni*100); ?> %</p></strong>
                                                <strong><p><?php echo ($jumlahalumnimoj/$totalalumni*100); ?> %</p></strong>
                                                <strong><p><?php echo ($jumlahalumnimal/$totalalumni*100); ?> %</p></strong>
                                                <strong><p><?php echo ($jumlahalumnijem/$totalalumni*100); ?> %</p></strong>
                                                <strong><p><?php echo ($jumlahalumnimad/$totalalumni*100); ?> %</p></strong>
                                                <strong><p><?php echo ($jumlahalumniyog/$totalalumni*100); ?> %</p></strong>
                                                <strong><p><?php echo ($jumlahalumnisem/$totalalumni*100); ?> %</p></strong>
                                                <strong><p><?php echo ($jumlahalumnisol/$totalalumni*100); ?> %</p></strong>
                                                <strong><p><?php echo ($jumlahalumnijak/$totalalumni*100); ?> %</p></strong>
                                                <strong><p><?php echo ($jumlahalumnibog/$totalalumni*100); ?> %</p></strong>
                                            </center>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>

                <!-- footer content -->
                <?php require_once('layout/layout_footer.php'); ?>
                <!-- /footer content -->

            </div>
            <!-- /page content -->
        </div>


    </div>

    <?php require_once('layout/layout_script.php'); ?>

    <!-- flot -->
    <script type="text/javascript">
        //random data
        var d1 = [
        [2004, 0], [2005, 0], [2006, 0], [2007, 0], [2008, <?php echo $jumlahalumni2008; ?>], [2009, <?php echo $jumlahalumni2009; ?>], [2010, <?php echo $jumlahalumni2010; ?>], [2011, <?php echo $jumlahalumni2011; ?>], [2012, 0], [2013, 0], [2014, 0], [2015, 0]
    ];

        //flot options
        var options = {
            series: {
                curvedLines: {
                    apply: true,
                    active: true,
                    monotonicFit: true
                }
            },
            colors: ["#26B99A"],
            grid: {
                borderWidth: {
                    top: 0,
                    right: 0,
                    bottom: 1,
                    left: 1
                },
                borderColor: {
                    bottom: "#7F8790",
                    left: "#7F8790"
                }
            }
        };
        var plot = $.plot($("#placeholder3xx3"), [{
            label: "Registrations",
            data: d1,
            lines: {
                fillColor: "rgba(150, 202, 89, 0.12)"
            }, //#96CA59 rgba(150, 202, 89, 0.42)
            points: {
                fillColor: "#fff"
            }
                }], options);
    </script>
    <!-- /flot -->
    <!--  -->
    <script>
        $('document').ready(function () {
            $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
                type: 'bar',
                height: '125',
                barWidth: 13,
                colorMap: {
                    '7': '#a1a1a1'
                },
                barSpacing: 2,
                barColor: '#26B99A'
            });

            var doughnutData = [
                {
                    value: <?php echo $jumlahalumnisby; ?>,
                    color: "#64D9BF"
                },
                {
                    value: <?php echo $jumlahalumnisid; ?>,
                    color: "#FFCD64"
                },
                {
                    value:  <?php echo $jumlahalumnimoj; ?>,
                    color: "#FE912A"
                },
                {
                    value:  <?php echo $jumlahalumnimal; ?>,
                    color: "#E34856"
                },
                {
                    value:  <?php echo $jumlahalumnijem; ?>,
                    color: "#065381"
                },
                {
                    value:  <?php echo $jumlahalumnimad; ?>,
                    color: "#34B2E4"
                },
                {
                    value:  <?php echo $jumlahalumniyog; ?>,
                    color: "#64D0DA"
                },
                {
                    value:  <?php echo $jumlahalumnisem; ?>,
                    color: "#A1CBA3"
                },
                {
                    value:  <?php echo $jumlahalumnisol; ?>,
                    color: "#C4DEEE"
                },
                {
                    value:  <?php echo $jumlahalumnijak; ?>,
                    color: "#66DBAE"
                },
                {
                    value:  <?php echo $jumlahalumnibog; ?>,
                    color: "#64DA90"
                }

        ];
            var myDoughnut = new Chart(document.getElementById("canvas1i").getContext("2d")).Doughnut(doughnutData);
        });
    </script>
    <!-- -->
    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>
    <!-- /datepicker -->
</body>

</html>