<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('mahasiswa/lamaran');?>
           <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Full Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nim" name="nim">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="course" class="col-sm-3 col-form-label">Input Course</label>
                <div class="col-sm-6">
                   <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="upload" class="col-sm-3 col-form-label">Upload File</label>
                    <div class="col-sm-6">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="Upload" name="Upload">
                            <label class="custom-file-label" for="Upload">Choose file</label>
                        </div>
                    </div>
            </div>
            <div class="col-sm-9 mt-5 text-right">
                <button type="submit" class="btn btn-primary">Registrasi</button>
            </div>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->