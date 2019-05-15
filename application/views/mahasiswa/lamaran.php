<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

        <?= $this->session->flashdata('message'); ?>
            <?= form_open_multipart('mahasiswa/lamaran');?>

            <div class="form-group row">
                <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nim" name="nim">
                    <?= form_error('nim','<small class="text-danger pl-3">','</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Full Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user ['name'];?>" readonly>
                    <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="course" class="col-sm-3 col-form-label">Course 1</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="matkul" name="matkul">
                    <?= form_error('matkul','<small class="text-danger pl-3">','</small>'); ?>    
                </div>
            </div>
            <div class="form-group row">
                <label for="course" class="col-sm-3 col-form-label">Course 2</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="matkul1" name="matkul1">
                    <?= form_error('matkul1','<small class="text-danger pl-3">','</small>'); ?>    
                </div>
            </div>
            <div class="form-group row">
                <label for="course" class="col-sm-3 col-form-label">Course 3</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="matkul2" name="matkul2">
                    <?= form_error('matkul2','<small class="text-danger pl-3">','</small>'); ?>    
                </div>
            </div>
            <div class="form-group row">
                <label for="upload" class="col-sm-3 col-form-label">File Zip/Rar</label>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="filename" name="filename">
                            <label class="custom-file-label" for="filename">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-4 text-center">
                        <button type="submit" class="btn btn-primary">Registration</button>
                        </div>
                    </div>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->