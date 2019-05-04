<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col">
        <div class="col-lg">
        <?= $this->session->flashdata('message'); ?>

        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Semester</label>
            <div class="col-sm-6">
            <select name="semester" id="semester" class="form-control">
                            <option value="">Select</option>
                            <?php foreach ($khs as $k ):?>
                            <option><?= $k['semester'];?></option>
                            <?php endforeach ?>
                        </select>
                    </div>    
            </div>
        </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-9 text-center">
                    <button type="submit" class="btn btn-primary">Tampil</button>
                    </div>
                </div>
            </div>
    </div>
    <!-- /.container-fluid -->
<!--  -->
</div>
<!-- End of Main Content -->

