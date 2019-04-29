<!-- Begin Page Content -->

<style>
.center {
  margin-left: auto;
  margin-right: auto;
  width: 60%;
  padding: 10px;
}
</style>

<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class = "form-group row">
  <label class = "col-sm-2 col-form-label"> Tingkat semester </label>
      <div class="">
        <select>
          <option value="">--Pilih--</option>
          <option value="Tubes1">Tubes1</option>
          <option value="Tubes2">Tubes2</option>
          <option value="Tubes3">Tubes3</option>
          <option value="Tubes4">Tubes4</option>
        </select>
      </div>
</div>

<br>

<div class="form-group row justify-content-end">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">download</button>
     </div>
</div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content --