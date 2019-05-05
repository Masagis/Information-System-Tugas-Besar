<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/dataTables.bootstrap4.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<!-- Custom fonts for this template-->
        <link href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    

</head>
<body>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Pembagian Kelompok Tugas Besar Mahasiswa Teknik Sipil</h2>
            <i class="fas fa-angle-double-left"></i> <a href="<?= base_url('user');?>"> Back to home </a>
            <br>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                	<th>no </th>
                    <th>nim</th>
                    <th>nama</th>
                    <th>kelas</th>
                    <th>matkul</th>
                    <th>kelompok</th>
                    <th>tahun</th>
                </tr>
              </thead>
              <tbody>
                    <?php 
                        $no = 1;
                        foreach($data_kelompok as $data){
                    ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $no++;?></td>
                            <td><?php echo $data->nim;?></td>
                            <td><?php echo $data->nama;?></td>
                            <td style="text-align: center;"><?php echo $data->kelas;?></td>
                            <td><?php echo $data->matkul;?></td>
                            <td><?php echo $data->kelompok;?></td>
                            <td style="text-align: center;"><?php echo $data->tahun;?></td>
                        </tr>
                    <?php }?>

              </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= base_url('assets/');?>js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/');?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/');?>js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?= base_url('assets/');?>js/dataTables.bootstrap4.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Johnny English-Informatika <?= date('Y');?></span><br><br>
          </div>
        </div>
      </footer>
</html>