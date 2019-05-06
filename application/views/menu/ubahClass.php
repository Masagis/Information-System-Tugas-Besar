<div class="container">

    <div class="row mt-2">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Update Class
                </div>

                <div class="card-body">
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $classAll['id']; ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" id="kodemk" name="kodemk" value="<?= $classAll['kodemk']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="namamk" name="namamk" value="<?= $classAll['namamk']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $classAll['kelas']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="sksmk" name="sksmk" value="<?= $classAll['sksmk']; ?>">
                    </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Edit Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>