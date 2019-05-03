<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Update Sub Menu
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $subMenuAll['id']; ?>">
                        <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" value="<?= $subMenuAll['title']; ?>">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value=""> Select Menu</option>
                            <?php foreach ($menu as $m ):?>
                            <option value="<?= $m['id'];?>"><?= $m['menu'];?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" value="<?= $subMenuAll['url']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" value="<?= $subMenuAll['icon']; ?>">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active ?
                        </label>
                        </div>
                    </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Edit Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>