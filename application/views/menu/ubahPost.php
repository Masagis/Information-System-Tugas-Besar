<div class="container">

    <div class="row mt-2">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Update Pengumuman
                </div>

                <div class="card-body">
                    <form action="" method="post">
                    <input type="hidden" name="id_post" value="<?= $postAll['id_post']; ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title_post" name="title_post" value="<?= $postAll['title_post']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="isi_post" name="isi_post" value="<?= $postAll['isi_post']; ?>">
                    </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Edit Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>