
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Klasifikasi</h4>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead>
                        <tr>
                            <th>Id Klasifikasi</th>
                            <th>Nama</th>
                            <th>Kode Rekening</th>
                            <th>Nama Rekening</th>
                            <th>User Id</th>
                            <th>Id Kegiatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nota Dinas</td>
                            <td>5.1.01</td>
                            <td>Belanja Pegawai</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id Klasifikasi</th>
                            <th>Nama</th>
                            <th>Kode Rekening</th>
                            <th>Nama Rekening</th>
                            <th>User Id</th>
                            <th>Id Kegiatan</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\skripsi\SIBELA\resources\views/klasifikasi/index.blade.php ENDPATH**/ ?>