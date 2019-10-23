<?php $this->load->view('back/layouts/header') ?>

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-newspaper"></i> Daftar Artikel</h1>
            <a href="<?= site_url('admin/index/artikel-tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-plus fa-sm text-white"></i> Tambah Artikel</a>
        </div>
        <!-- end Page Heading -->
        
        <!-- page table -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-dark text-white">
                        <tr align="center">
                            <th width="5">#</th>
                            <th width="100">Gambar</th>
                            <th width="60%">Judul Artikel</th>
                            <th width="50">Hit</th>
                            <th width="100">Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <!-- end page table -->
    </div>
    <!-- end container-fluid -->
</div>
<!-- end of Main Content -->

<?php $this->load->view('back/layouts/footer') ?>

<!-- custom JS file -->
<script>

    // init variabel
    var method, save_method;

    // document jquery 
    $(document).ready(function () {

        // konfigurasi DataTable
        table = $('#dataTable').DataTable({
            "processing": true,
            "serverside": true,
            "ordering"  : false,
            "ajax": {
                "url": "<?= site_url('artikel/data') ?>",
                "type": "GET"
            }
        });
    });

    function deleteData(id) {
        swal({
            title: "Are you sure delete this item ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: "<?= site_url('artikel/delete/') ?>"+id,
                    type: "POST",
                    success: function(data){
                        table.ajax.reload();
                    },
                    error: function(){
                        alert('data not deleted');
                    }
                });
                
            }
        });
    }
</script>

</body></html>