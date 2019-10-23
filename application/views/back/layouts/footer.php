<!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Ngapeh  <?= date('Y') ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- profile Modal-->
    <div class="modal fade" id="modal-profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="<?= site_url('auth/profile/'.$this->session->userdata('id_usr')) ?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fa fa-cogs"></i> &nbsp; Ubah Profil User
                </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="prof_nama" class="text-primary">Nama User</label>
                        <input type="text" class="form-control" name="prof_nama" id="prof_nama" value="<?= $this->session->userdata('nm_usr') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="prof_email" class="text-primary">Email</label>
                        <input type="text" class="form-control" name="prof_email" id="prof_email" value="<?= $this->session->userdata('em_usr') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="prof_pass" class="text-primary">Kata Sandi Baru</label>
                        <input type="password" class="form-control" name="prof_pass" id="prof_pass" placeholder="">
                        <small id="prof_pass" class="form-text text-danger">kosongkan jika tidak ingin mengubah kata sandi</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> &nbsp;Save</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-window-close  "></i> &nbsp;Batal</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="modal-logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-sign-out-alt"></i> &nbsp; Konfirmasi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body">apakah anda yakin ingin keluar halaman admin ?</div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="<?= site_url('auth/logout') ?>"><i class="fa fa-check"></i> &nbsp; Ya, Keluar</a>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-window-close  "></i> &nbsp;Tidak</button>
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

    <!-- Page level plugins -->
    <script src="<?= base_url('back/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('back/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('back/vendor/ckeditor/ckeditor.js') ?>"></script>
    <script src="<?= base_url('back/vendor/chart.js/Chart.min.js') ?>"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    