<?php $this->load->view('back/layouts/header') ?>

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-newspaper"></i> Tambah Artikel</h1>
        </div>
        <!-- end Page Heading -->
        
        <!-- page table -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?= site_url('artikel/insert') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inp_jdl">Judul Artikel</label>
                        <input type="text" class="form-control" name="inp_jdl" id="inp_jdl" placeholder="Judul Artikel" required>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inp_kat">Kategori</label>
                                <select name="inp_kat" id="inp_kat" class="form-control" required>
                                    <option value="">-- silakan pilih kategori --</option>
                                    <option value="Berita">Berita</option>
                                    <option value="Daerah">Daerah</option>
                                    <option value="Hits">Hits</option>
                                    <option value="Review">Review</option>
                                    <option value="Cerita">Cerita</option>
                                    <option value="Tips">Tips</option>
                                    <option value="Gosip">Gosip</option>
                                    <option value="Investigasi">Investigasi</option>
                                    <option value="Riwayat">Riwayat</option>
                                    <option value="Khutbah">Khutbah</option>
                                    <option value="Artikel">Artikel</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inp_gbr">Gambar</label>
                                <input type="file" class="form-control-file" name="inp_gbr" id="inp_gbr" placeholder="Judul Artikel" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inp_isi">Isi Artikel</label>
                        <textarea name="inp_isi" id="inp_isi" cols="30" rows="10" class="form-control"></textarea>
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
    $(document).ready(function () {
        // validasi UX untuk input data
        $('button[type="submit"]').prop('disabled', true);
        $('#inp_jdl').on('input', function(e) {
            if(this.value.length > 0) {
                $('button[type="submit"]').prop('disabled', false);
            } else {
                $('button[type="submit"]').prop('disabled', true);
            }
        });
        $('#inp_sub').on('input', function(e) {
            if(this.value.length > 0) {
                $('button[type="submit"]').prop('disabled', false);
            } else {
                $('button[type="submit"]').prop('disabled', true);
            }
        });
        $('#inp_gbr').on('input', function(e) {
            if(this.value.length > 0) {
                $('button[type="submit"]').prop('disabled', false);
            } else {
                $('button[type="submit"]').prop('disabled', true);
            }
        });
    });
</script>
<script>
    var roxyFileman = '<?php echo base_url('back/vendor/fileman') ?>'; 

    $(document).ready(function () {

        CKEDITOR.replace( 'inp_isi',{
                filebrowserBrowseUrl:roxyFileman+'/index.html',
                filebrowserImageBrowseUrl:roxyFileman+'/index.html?type=image',
                removeDialogTabs: 'link:upload;image:upload'
        }); 

    });
</script>

</body></html>