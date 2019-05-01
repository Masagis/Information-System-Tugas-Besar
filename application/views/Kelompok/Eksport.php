<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    
    <form action="" method="get" novalidate="novalidate">
        	<div class="form-horizontal">
                <div class="form-group">
                    <div class="col-md-3 control-label">
                        Pilih kelas
                    </div>
                    <div class="col-md-5">
						<select class="form-control input-sm" name="NamaKelas">
							<option value="">- Pilih -</option>
													<option value="1">1=</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
												</select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"> </i> Export Data </button>
                    
                    </div>
                </div>
            </div>
		</form>

   
    <!-- /.container-fluid -->
    </div>
</div>
<!-- End of Main Content -->