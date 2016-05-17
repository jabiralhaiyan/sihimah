<?php
    require_once('layout/layout_head.php');
    require_once('layout/layout_sidemenu.php');
    require_once('layout/layout_topmenu.php');
?>
    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row top_tiles">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-users"></i>
                    </div>
                    <div class="count"><?php echo $TotalAlumni; ?></div>
                    <h3>Total Alumni</h3>
                    <p></p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-user"></i>
                    </div>
                    <div class="count"><?php echo $TotalLakiLaki; ?></div>

                    <h3>Total Laki-Laki</h3>
                    <p></p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-user"></i>
                    </div>
                    <div class="count"><?php echo $TotalPerempuan; ?></div>
                    <h3>Total Perempuan</h3>
                    <p></p>
                </div>
            </div>
        </div>
        <!-- /top tiles -->

        <br />

        <div class="row">
        <!--Surabaya-->
        <!--MA Unggulan Amanatul Ummah Sby-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel tile fixed_height_820">
                    <div class="x_title">
                     
                        <h2>MA Unggulan Amanatul <br> Ummah Sby <br></h2>
                        <span class="label label-primary pull-right" style="color:white"><h4>Total</h4></span>
                        <div class="animated flipInY tile_stats_count">
                                <br><br><br>
                                <center><div class="count"><?php echo $TotalMAUSby; ?></div><center>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--
                    <div class="x_content"> 
                    </div>
                    -->
                </div>
            </div>

            <!--MA Akselerasi Amanatul Ummah Surabaya-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel tile fixed_height_820">
                    <div class="x_title">
                        <h2>MA Akselerasi Amanatul <br> Ummah Sby</h2>
                        <span class="label label-primary pull-right" style="color:white"><h4>Total</h4></span>
                        <div class="animated flipInY tile_stats_count">
                               <br><br><br>
                               <center><div class="count"><?php echo $TotalMAASby; ?></div><center>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--
                    <div class="x_content"> 
                    </div>
                    -->
                </div>
            </div>

            <!--SMA Unggulan Amanatul Ummah Sby-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel tile fixed_height_820">
                    <div class="x_title">
                        
                        <h2>SMA Unggulan Amanatul <br> Ummah Sby</h2>
                        <span class="label label-primary pull-right" style="color:white"><h4>Total</h4></span>
                        <div class="animated flipInY tile_stats_count">
                               <br><br><br>
                               <center><div class="count"><?php echo $TotalSMAUSby; ?></div><center>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--
                    <div class="x_content"> 
                    </div>
                    -->
                </div>
            </div>

            <!--MBI Amanatul Ummah Sby-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel tile fixed_height_820">
                    <div class="x_title">
                        
                        <h2>MBI Amanatul Ummah Sby</h2>
                        <span class="label label-primary pull-right" style="color:white"><h4>Total</h4></span>
                        <div class="animated flipInY tile_stats_count">
                                <br><br><br>
                               <center><div class="count"><?php echo $TotalMBISby; ?></div><center>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--
                    <div class="x_content"> 
                    </div>
                    -->
                </div>
            </div>
        </div>
        
        <li class="divider"> </li>
        <br>

        <!--Pacet-->
        <div class="row">
            <!--MA Akselerasi Amanatul Ummah Pacet-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel tile fixed_height_820">
                    <div class="x_title">
                        
                        <h2>MA Akselerasi Amanatul <br> Ummah Pacet</h2>
                        <span class="label label-primary pull-right" style="color:white"><h4>Total</h4></span>
                        <div class="animated flipInY tile_stats_count">
                               <br><br><br>
                               <center><div class="count"><?php echo $TotalMAAPacet; ?></div><center>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--
                    <div class="x_content"> 
                    </div>
                    -->
                </div>
            </div>

            <!--MBI Amanatul Ummah Pacet-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel tile fixed_height_820">
                    <div class="x_title">
                        
                        <h2>MBI Amanatul Ummah Pacet</h2>
                        <span class="label label-primary pull-right" style="color:white"><h4>Total</h4></span>
                        <div class="animated flipInY tile_stats_count">
                                <br><br><br>
                               <center><div class="count"><?php echo $TotalMBIPacet; ?></div><center>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--
                    <div class="x_content"> 
                    </div>
                    -->
                </div>
            </div>

            <!--MA Bendungan Jati Hikmatul Amanah Pacet-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel tile fixed_height_820">
                    <div class="x_title">
                        
                        <h2>MA Bendungan Jati Hikmatul <br> Amanah Pacet</h2>
                        <span class="label label-primary pull-right" style="color:white"><h4>Total</h4></span>
                        <div class="animated flipInY tile_stats_count">
                                <br><br><br>
                               <center><div class="count"><?php echo $TotalMABejatPacet; ?></div><center>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--
                    <div class="x_content"> 
                    </div>
                    -->
                </div>
            </div>


            <!--SMA Berbasis Pesantren Amanatul Ummah Pacet-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel tile fixed_height_820">
                    <div class="x_title">
                        
                        <h2>SMA Berbasis Pesantren <br> Amanatul Ummah Pacet</h2>
                        <span class="label label-primary pull-right" style="color:white"><h4>Total</h4></span>
                        <div class="animated flipInY tile_stats_count">
                                <br><br><br>
                               <center><div class="count"><?php echo $TotalSMABPPacet; ?></div><center>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--
                    <div class="x_content"> 
                    </div>
                    -->
                </div>
            </div>
        </div>
            <?php require_once('layout/layout_footer.php'); ?>
        </div>
        <!-- /page content -->
    </div>

</div>

<?php require_once('layout/layout_script.php'); ?>

<script>
    NProgress.done();
</script>

<!--Alert Konfirmasi-->
<?php

if ($ubah_data_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;
function fungsi_notifikasi()
{
    alert(" . '"' . $ubah_data_berhasil . '"' . ");
}
</script>";

else if ($tambah_akun_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;
function fungsi_notifikasi()
{
    alert(" . '"' . $tambah_akun_berhasil . '"' . ");
}
</script>";
?>


</body>

</html>
