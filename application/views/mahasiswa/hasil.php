<!-- Begin Page Content -->
<div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Tugas Besar</h1>
            <h3 class="h5 mb-4 text-gray-800">Daftar Tugas Besar : </h3>
            <div class="card-columns">
                <?php foreach ($dataKhs as $d ):?>
                <div class="card mb-3" style="max-width: 500px;">
                    <div class="row no-gutters">       
                        <div class="col-md-8">    	
                            <div class="card-body">
                                <h5 class="card-title"><?= $d['namamk']; ?></h5>
                                <p class="card-text"><?= $d['kodemk']; ?></p>
                                <a href="<?= base_url(); ?>pdfControll/get_surat/<?= $d['kodemk']; ?>" class="badge badge-primary" role="button">Unduh</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->