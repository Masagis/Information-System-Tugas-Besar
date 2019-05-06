<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Mata Kuliah <?= $matkul['namamk']; ?></h1>

    <div class="col">
        <div class="col-lg-6">

        <?= form_error('menu','<div class="alert alert-danger" role ="alert">', '</div> ');?>

        <?= $this->session->flashdata('message'); ?>

        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Tahun Ambil</th>
                <th scope="col">Nilai</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach ($nilai as $n ):?>
                <tr>
                <th scope="row"><?= $i;?> </th>
                <td><?= $n['name'];?></td>

                <td><?= $n['tahun'];?></td>
                <td><?= $n['nilai'];?></td>
                <td> <a href=" " class="badge badge-success">Edit</a> </td>

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
