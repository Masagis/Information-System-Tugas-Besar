<div class="container">

    <div class="row mt-2">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Input Kelompok
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $inputAll['kodemk']; ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nim" name="nim" value="<?= $inputAll['nim']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $inputAll['name']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="semester" name="semester" value="<?= $inputAll['semester']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $inputAll['tahun']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kelompok" name="kelompok" value="<?= $inputAll['kelompok']; ?>">
                    </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Input Kelompok</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>