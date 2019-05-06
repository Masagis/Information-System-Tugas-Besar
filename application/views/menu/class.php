<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col">
        <div class="col-lg-6">
        <?= form_error('menu','<div class="alert alert-danger" role ="alert">', '</div> ');?>

        <?= $this->session->flashdata('message'); ?>

        <a href=" " class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMKModal">Add New Mata Kuliah</a>

        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Kode MK</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Kelas</th>
                <th scope="col">SKS</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach ($kodem as $k ):?>
                <tr>
                <th scope="row"><?= $i;?> </th>
                <td><?= $k['kodemk'];?></td>
                <td><?= $k['namamk'];?></td>
                <td><?= $k['kelas'];?></td>
                <td><?= $k['sksmk'];?></td>
                <td>
                    <a href="<?= base_url(); ?>menu/ubahClass/<?= $k['id']; ?>" class="badge badge-success">Edit</a>
                    <a href="<?= base_url(); ?>admin/deleteClass/<?= $k['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure?');">Delete</a>    
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
        <div class="modal fade" id="newMKModal" tabindex="-1" role="dialog" aria-labelledby="newMKModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMKModalLabel">Add New Mata Kuliah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <form action="<?= base_url ('menu/class'); ?>" method="post"> 
                <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="kode" name="kodemk" placeholder="Kode MK">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="namamk" name="namamk" placeholder="Mata Kuliah">
                        </div><div class="form-group">
                            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="sks" name="sksmk" placeholder="SKS">
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