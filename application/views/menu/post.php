<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col">
        <div class="col-lg-8">
        <?= form_error('menu','<div class="alert alert-danger" role ="alert">', '</div> ');?>

        <?= $this->session->flashdata('message'); ?>

        <a href=" " class="btn btn-primary mb-3" data-toggle="modal" data-target="#newpostModal">Add New Pengumuman</a>

        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Judul Pengumuman</th>
                <th scope="col">Link Pengumuman</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach ($post as $p ):?>
                <tr>
                <th scope="row"><?= $i;?> </th>
                <td><?= $p['title_post'];?></td>
                <td><?= $p['isi_post'];?></td>
                <td>
                    <a href="<?= base_url(); ?>menu/ubahPost/<?= $p['id_post']; ?> " class="badge badge-success">Edit</a>
                    <a href="<?= base_url(); ?>admin/deletePost/<?= $p['id_post']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure?');">Delete</a>    
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

<!-- Modal -->
        <div class="modal fade" id="newpostModal" tabindex="-1" role="dialog" aria-labelledby="newpostModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newpostModalLabel">Add New Pengumuman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <form action="<?= base_url ('menu/post'); ?>" method="post"> 
                <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="title_post" name="title_post" placeholder="Judul Pengumuman">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="isi_post" name="isi_post" placeholder="Link Pengumuman">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>