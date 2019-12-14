<?php $this->load->view('back/layouts/header') ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-newspaper"></i> Ubah Artikel</h1>
    </div>
    <!-- end Page Heading -->

    <!-- page table -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= site_url('artikel/update/' . $art->id_art) ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inp_jdl">Judul Artikel</label>
                    <input type="text" class="form-control" name="inp_jdl" id="inp_jdl" placeholder="Judul Artikel" value="<?= $art->jdl_art ?>">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="inp_kat">Kategori</label>
                            <select name="inp_kat" id="inp_kat" class="form-control">
                                <option value="Berita" <?= ($art->kat_art == "Berita") ? "selected" : "" ?>>Berita</option>
                                <option value="Daerah" <?= ($art->kat_art == "Daerah") ? "selected" : "" ?>>Daerah</option>
                                <option value="Hits" <?= ($art->kat_art == "Hits") ? "selected" : "" ?>>Hits</option>
                                <option value="Review" <?= ($art->kat_art == "Review") ? "selected" : "" ?>>Review</option>
                                <option value="Cerita" <?= ($art->kat_art == "Cerita") ? "selected" : "" ?>>Cerita</option>
                                <option value="Tips" <?= ($art->kat_art == "Tips") ? "selected" : "" ?>>Tips</option>
                                <option value="Gosip" <?= ($art->kat_art == "Gosip") ? "selected" : "" ?>>Gosip</option>
                                <option value="Investigasi" <?= ($art->kat_art == "Investigasi") ? "selected" : "" ?>>Investigasi</option>
                                <option value="Riwayat" <?= ($art->kat_art == "Riwayat") ? "selected" : "" ?>>Riwayat</option>
                                <option value="Khutbah" <?= ($art->kat_art == "Khutbah") ? "selected" : "" ?>>Khutbah</option>
                                <option value="Artikel" <?= ($art->kat_art == "Artikel") ? "selected" : "" ?>>Artikel</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <img class="lazyload" data-src="<?= base_url('back/artikel/' . $art->gbr_art) ?>" width="100"> <br>
                            <label for="inp_gbr">Gambar</label>
                            <input type="file" class="form-control-file" name="inp_gbr" id="inp_gbr" placeholder="Judul Artikel">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inp_isi">Isi Artikel</label>
                    <textarea name="inp_isi" id="inp_isi" cols="30" rows="10" class="form-control"><?= $art->isi_art ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp;Simpan</button>
                <button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> &nbsp;Ulang</button>
                <a href="<?= site_url('admin/index/artikel') ?>" class="btn btn-dark"><i class="fa fa-reply"></i> &nbsp;Kembali</a>
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
    $(document).ready(function() {
        // validasi UX untuk input data
        $('button[type="submit"]').prop('disabled', true);
        $('#inp_jdl').on('input', function(e) {
            if (this.value.length > 0) {
                $('button[type="submit"]').prop('disabled', false);
            } else {
                $('button[type="submit"]').prop('disabled', true);
            }
        });
        $('#inp_sub').on('input', function(e) {
            if (this.value.length > 0) {
                $('button[type="submit"]').prop('disabled', false);
            } else {
                $('button[type="submit"]').prop('disabled', true);
            }
        });
        $('#inp_gbr').on('input', function(e) {
            if (this.value.length > 0) {
                $('button[type="submit"]').prop('disabled', false);
            } else {
                $('button[type="submit"]').prop('disabled', true);
            }
        });
        $('#inp_kat').on('input', function(e) {
            if (this.value.length > 0) {
                $('button[type="submit"]').prop('disabled', false);
            } else {
                $('button[type="submit"]').prop('disabled', true);
            }
        });
    });
</script>
<script>
    var roxyFileman = '<?php echo base_url('back/vendor/fileman') ?>';

    $(document).ready(function() {

        CKEDITOR.replace('inp_isi', {
            filebrowserBrowseUrl: roxyFileman + '/index.html',
            filebrowserImageBrowseUrl: roxyFileman + '/index.html?type=image',
            removeDialogTabs: 'link:upload;image:upload'
        });

    });
</script>

</body>

</html>