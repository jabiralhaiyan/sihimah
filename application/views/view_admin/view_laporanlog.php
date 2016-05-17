<?php
    require_once('layout/layout_head.php');
    require_once('layout/layout_sidemenu.php');
    require_once('layout/layout_topmenu.php');
?>

    <!-- page content -->
    <div class="right_col" role="main">

            <!--Last User Login-->
            <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Last User Login</h2>
                            <ul class="nav navbar-right">
                                <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                    <div class="x_content">
                        <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Tahun Lulus</th>
                                                <th>Lembaga</th>
                                                <th>Waktu</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                    <?php foreach ($notifikasilogin->result() as $row){ ?>
                                        <tbody>
                                            <tr>
                                                <th><?php echo $row->Nama; ?></th>
                                                <th><?php echo $row->TahunLulus; ?></th>
                                                <td><?php echo $row->Lembaga; ?></td>
                                                <td><?php echo $row->Waktu; ?></td>
                                                <td><?php echo $row->Tanggal; ?></td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>

                                    </table>

                    </div>
                       
                            <button type="button" class="btn btn-primary col-md-12 col-sm-12 col-xs-12"> Lihat Selengkapnya</button>
                </div>
            </div>

            <!--Last User Logout-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Last User Logout</h2> 
                        <ul class="nav navbar-right">
                            <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Tahun Lulus</th>
                                                <th>Lembaga</th>
                                                <th>Waktu</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                    <?php foreach ($notifikasilogout->result() as $row){ ?>
                                        <tbody>
                                           <tr>
                                                <th><?php echo $row->Nama; ?></th>
                                                <th><?php echo $row->TahunLulus; ?></th>
                                                <td><?php echo $row->Lembaga; ?></td>
                                                <td><?php echo $row->Waktu; ?></td>
                                                <td><?php echo $row->Tanggal; ?></td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                    
                                    </table>
                    </div>
                    <button type="button" class="btn btn-primary col-md-12 col-sm-12 col-xs-12"> Lihat Selengkapnya</button>
                </div>
            </div>

            <!--Last User Update Data-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Last User Update Data</h2> 
                        <ul class="nav navbar-right">
                            <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Tahun Lulus</th>
                                                <th>Lembaga</th>
                                                <th>Waktu</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($notifikasiupdate->result() as $row){ ?>
                                        <tbody>
                                            <tr>
                                                <th><?php echo $row->Nama; ?></th>
                                                <th><?php echo $row->TahunLulus; ?></th>
                                                <td><?php echo $row->Lembaga; ?></td>
                                                <td><?php echo $row->Waktu; ?></td>
                                                <td><?php echo $row->Tanggal; ?></td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                    </table>
                    </div>
                    <button type="button" class="btn btn-primary col-md-12 col-sm-12 col-xs-12"> Lihat Selengkapnya</button>
                </div>
            </div>
            
            <!--Last User Change Password-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Last User Change Password</h2> 
                        <ul class="nav navbar-right">
                            <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                            <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Tahun Lulus</th>
                                                <th>Lembaga</th>
                                                <th>Waktu</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($notifikasiubahpassword->result() as $row){ ?>
                                        <tbody>
                                            <tr>
                                                <th><?php echo $row->Nama; ?></th>
                                                <th><?php echo $row->TahunLulus; ?></th>
                                                <td><?php echo $row->Lembaga; ?></td>
                                                <td><?php echo $row->Waktu; ?></td>
                                                <td><?php echo $row->Tanggal; ?></td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                    </table>
                    </div>
                    <button type="button" class="btn btn-primary col-md-12 col-sm-12 col-xs-12"> Lihat Selengkapnya</button>
                </div>
            </div>

            <!--Last User Upload Foto-->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Last User Upload Foto</h2> 
                        <ul class="nav navbar-right">
                            <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                            <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Tahun Lulus</th>
                                                <th>Lembaga</th>
                                                <th>Waktu</th>
                                                <th>Tanggal</th>
                                                <th>Foto</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($notifikasiuploadfoto->result() as $row){ ?>
                                        <tbody>
                                            <tr>
                                                <th><?php echo $row->Nama; ?></th>
                                                <th><?php echo $row->TahunLulus; ?></th>
                                                <td><?php echo $row->Lembaga; ?></td>
                                                <td><?php echo $row->Waktu; ?></td>
                                                <td><?php echo $row->Tanggal; ?></td>
                                                <td><img src="<?php echo base_url().$row->LinkFoto; ?>" width="60px" heigth="60px"></td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                    </table>
                    </div>
                    <button type="button" class="btn btn-primary col-md-12 col-sm-12 col-xs-12"> Lihat Selengkapnya</button>
                </div>

            <!-- footer content -->
                <?php require_once('layout/layout_footer.php'); ?>
            <!-- /footer content -->
    </div>
   
   </div>     
        
        <!-- /page content -->
</div>

</div>
    
     <?php require_once('layout/layout_script.php'); ?>

</body>
</html>
