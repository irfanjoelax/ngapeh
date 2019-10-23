<?php $this->load->view('back/layouts/header') ?>

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-at"></i> Daftar Subscribe Website</h1>
        </div>
        <!-- end Page Heading -->
        
        <!-- page table -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-dark text-white">
                        <tr align="center">
                            <th width="5">#</th>
                            <th width="95%">Email</th>
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
    // document jquery 
    $(document).ready(function () {

        // konfigurasi DataTable
        table = $('#dataTable').DataTable({
            "processing": true,
            "serverside": true,
            "ordering"  : false,
            "ajax": {
                "url": "<?= site_url('subscribe/data') ?>",
                "type": "GET"
            }
        });
    });
</script>

</body></html>