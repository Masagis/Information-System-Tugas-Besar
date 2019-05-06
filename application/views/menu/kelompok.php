<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Select</th>
                <th scope="col">Action</th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>1 </td>
                <td> Export data to excel </td>  
                <td>  <a href="<?= base_url("Fungsi/export"); ?>"><button class="btn btn-sm btn-primary"><i class="fas fa-file-export"></i></button></a> </td>               
                </tr>

                <tr>
                <td>2 </td>
                <td> Manage students data </td>  
                <td>  <a href="<?= base_url("informasi/edit_kelompok"); ?>"><button class="btn btn-sm btn-primary"><i class="fas fa-pen-alt"></i></i></button></a> </td>              
                </tr>
                
            </tbody>
            </table>
    
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->