<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        
    <div class="col">
        <div class="col-lg-8">
        <?= form_error('menu','<div class="alert alert-danger" role ="alert">', '</div> ');?>

        <?= $this->session->flashdata('message'); ?>

        <!-- menampilkan data dari tabel user_daftar -->
        <form action="<?= base_url ('mahasiswa'); ?>" method="post"> 
                    <div class="form-group">
                        <select name="kode" id="kode" class="form-control">
                            <option value="">-Select-</option>
                                <?php foreach ($mkkode as $k ):?>
                                <option><?= $k['kodemk'],'-', $k['namamk'];?></option>
                                <?php endforeach ?>
                        </select>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Add Mata Kuliah</button>
                                </div>
                            </div>


            <!-- menampilkan data yang telah tubes di ambil -->
            <div class="box-headerooter">
                <i class="fas fa-bookmark" aria-hidden="true"<h6 class="box-title text-left"> Daftar Tugas Besar yang diambil</h6> </i>
                </div>

            <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Kode MK</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">SKS</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach ($kodem as $km ):?>
                <tr>
                <th scope="row"><?= $i;?> </th>
                <td id="kodemk"><?= $km['kodemk'];?></td>
                <td id="namamk"><?= $km['namamk'];?></td>
                <td><?= $mk['sksmk'];?></td>
                <td>
                    <a href=" " class="badge badge-danger">Delete</a>    
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach ?>
            </tbody>
            </table>
                    </div>
                
                </div>
            
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
