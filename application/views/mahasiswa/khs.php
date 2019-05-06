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
                <th scope="col">Tahun</th>
                <th scope="col">Mata Kulaih 1</th>
                <th scope="col">Mata kuliah 2</th>
                <th scope="col">Mata kuliah 3</th>
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
                <td><?= $dk['mk1'];?></td>
                <td><?= $dk['mk2'];?></td>
                <td><?= $dk['mk3'];?></td>
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