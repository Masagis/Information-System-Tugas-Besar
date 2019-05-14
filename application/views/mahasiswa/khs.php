<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col">
        <div class="col-lg">

        <?= $this->session->flashdata('message'); ?>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nim</th>
                <th scope="col">Semester</th>
                <th scope="col">Tahun Mengambil</th>
                <th scope="col">Mata Kulaih </th>
                <th scope="col">Nilai </th>

                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach ($dataKhs as $dk ):?>
                <tr>
                <th scope="row"><?= $i;?> </th>
                <td><?= $dk['nim'];?></td>
                <td><?= $dk['semester'];?></td>
                <td><?= $dk['tahun'];?></td>
                <td><?= $dk['namamk'];?></td>
                <td><?= $dk['nilai'];?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach ?>
            </tbody>
            </table>
                    </div>
                
                </div>

    </div>
    <!-- /.container-fluid -->
<!--  -->
</div>
<!-- End of Main Content -->