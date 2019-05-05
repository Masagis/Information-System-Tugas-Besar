<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<!-- Custom fonts for this template-->
        <link href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Pembagian Kelompok Tugas Besar Mahasiswa Teknik Sipil</h2>
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
               <th style="width:125px;">Action
                  </p></th>
                </tr>
              </thead>
              <tbody>
                    <?php 
                        $no = 1;
                        foreach($data_buku as $data){
                    ?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data->nim;?></td>
                            <td><?php echo $data->nama;?></td>
                            <td><?php echo $data->kelas;?></td>
                            <td><?php echo $data->matkul;?></td>
                            <td><?php echo $data->kelompok;?></td>
                            <td><?php echo $data->tahun;?></td>
                            <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $data->nim;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $data->nim;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                        </tr>
                    <?php }?>

              </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>