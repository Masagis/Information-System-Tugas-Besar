<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- menampilkan pengumuman yang ada -->
        <table class="table table-responsive-sm">
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($post as $ps ):?>
                <tr>
                <th scope="row"><?= $i;?> </th>
                <td>
                    <a class="ml-2"href="<?= $ps['isi_post'];?>" target="_blank"><?= $ps['title_post'];?></a>      
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach ?>
                </tbody>
            </table>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->