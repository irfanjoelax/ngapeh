<?php $this->load->view('back/layouts/header') ?>

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-cogs"></i> Ubah Data Sosial Media</h1>
        </div>
        <!-- end Page Heading -->
        
        <!-- page table -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?= site_url('informasi/update/'.$inf->id_inf) ?>" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inp_fb">Facebook</label>
                                <input type="text" class="form-control" name="inp_fb" id="inp_fb" value="<?= $inf->fb_inf ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inp_tw">Twitter</label>
                                <input type="text" class="form-control" name="inp_tw" id="inp_tw" value="<?= $inf->tw_inf ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inp_ig">Instagram</label>
                                <input type="text" class="form-control" name="inp_ig" id="inp_ig" value="<?= $inf->ig_inf ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inp_yt">YouTube</label>
                                <input type="text" class="form-control" name="inp_yt" id="inp_yt" value="<?= $inf->yt_inf ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inp_hp">No. Telepon</label>
                                <input type="text" class="form-control" name="inp_hp" id="inp_hp" value="<?= $inf->hp_inf ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inp_em">Email</label>
                                <input type="text" class="form-control" name="inp_em" id="inp_em" value="<?= $inf->em_inf ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp;Simpan</button>
                    <button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> &nbsp;Ulang</button>
                    <a href="<?= site_url('admin') ?>" class="btn btn-dark"><i class="fa fa-reply"></i> &nbsp;Kembali</a>
                </form>
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
        // validasi UX untuk input data
        $('button[type="submit"]').prop('disabled', true);
        $('#inp_fb').on('input', function(e) {
            if(this.value.length > 0) {
                $('button[type="submit"]').prop('disabled', false);
            } else {
                $('button[type="submit"]').prop('disabled', true);
            }
        });
        $('#inp_tw').on('input', function(e) {
            if(this.value.length > 0) {
                $('button[type="submit"]').prop('disabled', false);
            } else {
                $('button[type="submit"]').prop('disabled', true);
            }
        });
        $('#inp_yt').on('input', function(e) {
            if(this.value.length > 0) {
                $('button[type="submit"]').prop('disabled', false);
            } else {
                $('button[type="submit"]').prop('disabled', true);
            }
        });
        $('#inp_ig').on('input', function(e) {
            if(this.value.length > 0) {
                $('button[type="submit"]').prop('disabled', false);
            } else {
                $('button[type="submit"]').prop('disabled', true);
            }
        });
        $('#inp_hp').on('input', function(e) {
            if(this.value.length > 0) {
                $('button[type="submit"]').prop('disabled', false);
            } else {
                $('button[type="submit"]').prop('disabled', true);
            }
        });
        $('#inp_em').on('input', function(e) {
            if(this.value.length > 0) {
                $('button[type="submit"]').prop('disabled', false);
            } else {
                $('button[type="submit"]').prop('disabled', true);
            }
        });
    });
</script>

</body></html>