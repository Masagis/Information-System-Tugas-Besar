<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Mata Kuliah <?= $v_matkul['namamk']; ?></h1>

    <div class="col">
        <div class="col-lg-8">

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#           </th>
                <th scope="col">NIM         </th>
                <th scope="col">Name        </th>
                <th scope="col">Semester    </th>
                <th scope="col">Tahun Ambil </th>
                <th scope="col">kelompok    </th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach ($v_kelompok as $h ):?>
                <tr>
                <th scope="row"><?= $i;?>   </th>
                <td><?= $h['nim'];?>       </td>
                <td><?= $h['name'];?>       </td>
                <td><?= $h['semester'];?>   </td>
                <td><?= $h['tahun'];?>      </td>
                <td><?= $h['kelompok'];?>   </td>
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