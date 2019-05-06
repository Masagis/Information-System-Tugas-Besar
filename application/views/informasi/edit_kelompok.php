<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Mata Kuliah <?= $v_matkul['namamk']; ?></h1>

    <div class="col">
        <div class="col-lg-8">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Name</th>
                <th scope="col">Semester</th>
                <th scope="col">Tahun Ambil</th>
                <th scope="col">kelompok</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach ($data_kelompok as $n ):?>
                <tr>
                <th scope="row"><?= $i;?> </th>
                <td><?= $n['nim'];?></td>
                <td><?= $n['name'];?></td>
                <td><?= $n['semester'];?></td>
                <td><?= $n['tahun'];?></td>
                <td><?= $n['kelompok'];?></td>
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