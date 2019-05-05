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
            <i class="fas fa-angle-double-left"></i> <a href="<?= base_url('Menu/kelompok');?>"> Back to kelompok </a>
            <br>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                	<th>no </th>
                    <th>nim</th>
                    <th>nama</th>
                    <th>kelas</th>
                    <th>semester</th>
                    <th>matkul</th>
                    <th>matkul2</th>
                    <th>matkul3</th>
                    <th>tahun</th>
               <th style="width:125px;" >Action
                  </th>
                </tr>
              </thead>
              <tbody>
                    <?php 
                        foreach($data_kelompok as $data){
                    ?>
                        <tr>
                            <td><?php echo $data->id;?></td>
                            <td><?php echo $data->nim;?></td>
                            <td><?php echo $data->name;?></td>
                            <td><?php echo $data->kelas;?></td>
                            <td><?php echo $data->semester;?></td>
                            <td><?php echo $data->mk1;?></td>
                            <td><?php echo $data->mk2;?></td>
                            <td><?php echo $data->mk3;?></td>
                            <td><?php echo $data->tahun;?></td>
                            <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $data->nim;?>)"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $data->nim;?>)"><i class="far fa-trash-alt"></i></button>
                            </td>
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