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
                <th scope="col">NIM</th>
                <th scope="col">Full Name</th>
                <th scope="col">Course 1</th>
                <th scope="col">Course 2</th>
                <th scope="col">Course 3</th>
                <th scope="col">Filename</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach ($asisten as $as ):?>
                <tr>
                <th scope="row"><?= $i;?> </th>
                <td><?= $as['nim'];?></td>
                <td><?= $as['name'];?></td>
                <td><?= $as['matkul'];?></td>
                <td><?= $as['matkul1'];?></td>
                <td><?= $as['matkul2'];?></td>
                <td><?= $as['filename'];?></td>
                <td>
                    <a href="" class="badge badge-success">Edit</a>
                    <a href="" class="badge badge-danger float-right" onclick="return confirm('Are you sure?');">Delete</a>
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
<!--  -->
</div>
<!-- End of Main Content -->

