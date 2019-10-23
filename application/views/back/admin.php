<?php $this->load->view('back/layouts/header') ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Beranda Utama Admin</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">TOTAL ARTIKEL</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_art ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">TOTAL SUBSCRIBER</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_sub ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-at fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-warning">Jumlah Artikel Per Kategori</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="list-group">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Berita
                                                    <span class="badge badge-primary badge-pill"><?= $total_Berita ?></span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Daerah
                                                    <span class="badge badge-primary badge-pill"><?= $total_Daerah ?></span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Hits
                                                    <span class="badge badge-primary badge-pill"><?= $total_Hits ?></span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Review
                                                    <span class="badge badge-primary badge-pill"><?= $total_Review ?></span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Cerita
                                                    <span class="badge badge-primary badge-pill"><?= $total_Cerita ?></span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Tips
                                                    <span class="badge badge-primary badge-pill"><?= $total_Tips ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul class="list-group">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Gosip
                                                    <span class="badge badge-primary badge-pill"><?= $total_Gosip ?></span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Investigasi
                                                    <span class="badge badge-primary badge-pill"><?= $total_Investigasi ?></span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Riwayat
                                                    <span class="badge badge-primary badge-pill"><?= $total_Riwayat ?></span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Khutbah
                                                    <span class="badge badge-primary badge-pill"><?= $total_Khutbah ?></span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Artikel
                                                    <span class="badge badge-primary badge-pill"><?= $total_Artikel ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-warning">Informasi Website</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">IP Address : <strong><?= $_SERVER['REMOTE_ADDR'] ?></strong></li>
                                        <li class="list-group-item">Server : <strong><?= $_SERVER['SERVER_NAME'] ?></strong></li>
                                        <li class="list-group-item">Browser : <strong><?= $_SERVER['HTTP_USER_AGENT'] ?></strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                 </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php $this->load->view('back/layouts/footer') ?>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [
            "Berita", 
            "Daerah",
            "Hits",
            "Review",
            "Cerita",
            "Tips",
            "Gosip",
            "Investigasi",
            "Riwayat",
            "Khutbah",
            "Artikel",
        ],
        datasets: [{
            data: <?= json_encode($donat) ?>,
            backgroundColor: [
                '#1cc88a', '#36b9cc', '#858796', '#f6c23e', '#e74a3b','#4e73df',
                '#6f42c1', '#e83e8c', '#20c9a6', '#5a5c69', '#6610f2','#fd7d14',
            ],
            hoverBackgroundColor: [
                '#1cc88a', '#36b9cc', '#858796', '#f6c23e', '#e74a3b','#4e73df',
                '#6f42c1', '#e83e8c', '#20c9a6', '#5a5c69', '#6610f2','#fd7d14',
            ],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
        },
        legend: {
        display: false
        },
        cutoutPercentage: 80,
    },
    });
</script>
</body></html>