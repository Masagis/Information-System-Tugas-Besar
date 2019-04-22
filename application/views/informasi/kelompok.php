<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <h6 class="text-left"><br>Note : Untuk pembagian kelompok dapat dilihat dengan memilih tingkat semester terlebih dahulu</h6> <br></br>
    	<div class="form-group row">
                <label for="course" class="col-sm-2 col-form-label">Tingkat Semester</label>
                <div class="col-sm-6">
                    <select type="text" class="form-control" id="course" name="course">
                        <option selected>-pilih-</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <br></br>
                <div class="col-sm-2">
      				<button type="submit" class="btn btn-primary">Tampilkan</button>
    </div>
            </div>
    	</div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->