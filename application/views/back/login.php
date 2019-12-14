<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NGAPEH | LOGIN</title>

    <link rel="shortcut icon" href="<?= base_url('back/ngapeh-fav.png') ?>" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('back/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('back/css/sb-admin-2.min.css" rel="stylesheet') ?>">
</head>

<body class="bg-gradient-warning">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-5 mt-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">
                                            <img src="<?= base_url('front/ngapeh-logo.png') ?>" alt="" width="250">
                                        </h1>
                                    </div>
                                    <form action="<?= site_url('auth/login') ?>" method="post" class="user">
                                        <div class="form-group">
                                            <input type="email" name="log_email" id="log_email" class="form-control form-control-user" placeholder="Email Valid">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="log_pass" id="log_pass" class="form-control form-control-user" placeholder="Password">
                                        </div>
                                        <button type="submit" id="log_submit" class="btn btn-dark btn-user btn-block"><i class="fa fa-unlock-alt"></i> &nbsp; L O G I N</button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('back/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('back/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('back/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('back/js/sb-admin-2.min.js') ?>"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {

            // function untuk validasi login 
            $('#log_submit').on('click', function() {
                // init variabel
                var email = $('#log_email').val();
                var pass = $('#log_pass').val();

                // jika email dan pass kosong
                if (email == "" && pass == "") {
                    swal({
                        text: "email dan password anda masih kosong",
                        icon: "warning",
                        dangerMode: true,
                    });
                    return false;
                }

                // jika email saja yang kosong
                if (email == "") {
                    swal({
                        text: "email anda masih kosong",
                        icon: "warning",
                        dangerMode: true,
                    });
                    return false;
                }

                if (IsEmail(email) == false) {
                    swal({
                        text: "email anda tidak valid",
                        icon: "warning",
                        dangerMode: true,
                    });
                    return false;
                }

                // jika pass yang kosong
                if (pass == "") {
                    swal({
                        text: "password anda masih kosong",
                        icon: "warning",
                        dangerMode: true,
                    });
                    return false;
                }

                return true;
            });
        });

        // function buatan untuk validasi email jquery
        function IsEmail(tf) {
            var valid = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!valid.test(tf)) {
                return false;
            } else {
                return true;
            }
        }
    </script>

</body>

</html>