<?php
require_once('layout/layout_head.php');
require_once('layout/layout_sidemenu.php');
require_once('layout/layout_topmenu.php');
?>
<!-- page content -->
<div class="right_col" role="main">

  <div class="row top_tiles">
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-sign-in"></i>
        </div>
        <div class="count"><?php echo $jumlahlogin; ?></div>
        <h3>Pengunjung</h3>
        <p>Total pengunjung</p>
      </div>
    </div>
  </div>

  <!-- Start to do list -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <br>
        <h2>Laporan Pengunjung</h2> 
        <ul class="nav navbar-right">
          <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div id="chart">

          </div>
        </div>

      </div>

      <!-- footer content -->
      <?php require_once('layout/layout_footer.php'); ?>
      <!-- /footer content -->

    </div>
  </div>
  <!-- End to do list -->


</div>

</div>

</div>

</div>
<!-- /page content -->

</div>

</div>
<?php require_once('layout/layout_script.php'); ?>
<script>
  NProgress.done();
</script>

<!--<script src="<?php echo base_url(); ?>assets/js/highcharts/jquery.min.js" type="text/javascript"></script>--> 
<script src="<?php echo base_url(); ?>assets/js/highcharts/highcharts.js" type="text/javascript"></script>        
<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'chart',
      type: 'column'
    },   
    title: {
      text: 'Grafik Pengunjung SIHIMAH'
    },
    xAxis: {
      categories: ['Tanggal']
    },
    yAxis: {
      title: {
       text: 'Jumlah Pengunjung'
     }
   },
   series:             
   [
   <?php 

   foreach( $pengunjung->result() as $row ){
    $tgl_grafik = $row->Tanggal;
    $jumlah_grafik = $row->JumlahPengunjung;

    ?>
    {
      name: '<?php echo $tgl_grafik; ?>',
      data: [<?php echo $jumlah_grafik; ?>]
    },
    <?php } ?>
    ]
  });
  });  
</script>


<!-- flot -->
 <!--
    <script type="text/javascript">
        //define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
        var chartColours = ['#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'];

        //generate random number for charts
        randNum = function () {
            return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
        }

        $(function () {
            var d1 = [];
            //var d2 = [];

            //here we generate data for chart
            for (var i = 0; i < 30; i++) {
                d1.push([new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10]);
                //    d2.push([new Date(Date.today().add(i).days()).getTime(), randNum()]);
            }

            var chartMinDate = d1[0][0]; //first day
            var chartMaxDate = d1[20][0]; //last day

            var tickSize = [1, "day"];
            var tformat = "%d/%m/%y";

            //graph options
            var options = {
                grid: {
                    show: true,
                    aboveData: true,
                    color: "#3f3f3f",
                    labelMargin: 10,
                    axisMargin: 0,
                    borderWidth: 0,
                    borderColor: null,
                    minBorderMargin: 5,
                    clickable: true,
                    hoverable: true,
                    autoHighlight: true,
                    mouseActiveRadius: 100
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        lineWidth: 2,
                        steps: false
                    },
                    points: {
                        show: true,
                        radius: 4.5,
                        symbol: "circle",
                        lineWidth: 3.0
                    }
                },
                legend: {
                    position: "ne",
                    margin: [0, -25],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                    labelFormatter: function (label, series) {
                        // just add some space to labes
                        return label + '&nbsp;&nbsp;';
                    },
                    width: 40,
                    height: 1
                },
                colors: chartColours,
                shadowSize: 0,
                tooltip: true, //activate tooltip
                tooltipOpts: {
                    content: "%s: %y.0",
                    xDateFormat: "%d/%m",
                    shifts: {
                        x: -30,
                        y: -50
                    },
                    defaultTheme: false
                },
                yaxis: {
                    min: 0
                },
                xaxis: {
                    mode: "time",
                    minTickSize: tickSize,
                    timeformat: tformat,
                    min: chartMinDate,
                    max: chartMaxDate
                }
            };
            var plot = $.plot($("#placeholder33x"), [{
                label: "Email Sent",
                data: d1,
                lines: {
                    fillColor: "rgba(150, 202, 89, 0.12)"
                }, //#96CA59 rgba(150, 202, 89, 0.42)
                points: {
                    fillColor: "#fff"
                }
            }], options);
        });
    </script>
  -->
  <!-- /flot -->

</body>

</html>
