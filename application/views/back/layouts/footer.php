<footer class="bg-white sticky-footer">
    <div class="my-auto container">
        <div class="my-auto copyright text-center"><span>Copyright © Ngapeh<?= date('Y') ?></span></div>
    </div>
</footer><a class="rounded scroll-to-top" href="#page-top"><i class="fa-angle-up fas"></i></a>
<div class="fade modal" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" id="modal-profile" tabindex="-1">
    <div class="modal-dialog" role="document">
        <form action="<?= site_url('auth/profile/' . $this->session->userdata('id_usr')) ?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-cogs"></i> Ubah Profil User</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label class="text-primary" for="prof_nama">Nama User</label><input class="form-control" id="prof_nama" name="prof_nama" required value="<?= $this->session->userdata('nm_usr') ?>"></div>
                    <div class="form-group"><label class="text-primary" for="prof_email">Email</label><input class="form-control" id="prof_email" name="prof_email" required value="<?= $this->session->userdata('em_usr') ?>"></div>
                    <div class="form-group"><label class="text-primary" for="prof_pass">Kata Sandi Baru</label><input class="form-control" id="prof_pass" name="prof_pass" placeholder="" type="password"> <small class="form-text text-danger" id="prof_pass">kosongkan jika tidak ingin mengubah kata sandi</small></div>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> Save</button> <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-window-close"></i> Batal</button></div>
            </div>
        </form>
    </div>
</div>
<div class="fade modal" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" id="modal-logout" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-sign-out-alt"></i> Konfirmasi</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">apakah anda yakin ingin keluar halaman admin ?</div>
            <div class="modal-footer"><a class="btn btn-primary" href="<?= site_url('auth/logout') ?>"><i class="fa fa-check"></i> Ya, Keluar</a> <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-window-close"></i> Tidak</button></div>
        </div>
    </div>
</div>
<script src="http://cdnback.ngapeh.co/vendor/jquery/jquery.min.js"></script>
<script src="http://cdnback.ngapeh.co/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="http://cdnback.ngapeh.co/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="http://cdnback.ngapeh.co/js/sb-admin-2.min.js"></script>
<script src="http://cdnback.ngapeh.co/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="http://cdnback.ngapeh.co/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="http://cdnback.ngapeh.co/vendor/ckeditor/ckeditor.js"></script>
<script src="http://cdnback.ngapeh.co/vendor/chart.js/Chart.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://cdnfront.ngapeh.co/js/lazysize.min.js" async></script>