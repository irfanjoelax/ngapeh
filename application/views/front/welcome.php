<?php $this->load->view('front/layouts/header') ?>

    <!-- carousel -->
    <div class="container mt-2">
        <div class="owl-carousel">
            <?php foreach($populars as $pop): ?>    
                <div> <a href="<?= site_url('artikel_detail/'.$pop->slug_art) ?>"><img src="<?= base_url('back/artikel/'.$pop->gbr_art) ?>" alt=""></a> </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- /carousel -->

    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="row">
                        <!-- berita paling terbaru satu biji headlline -->
                        <div class="col-12 col-lg-7">
                            <div class="single-blog-post featured-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="<?= base_url('back/artikel/'.$baru_satu->gbr_art) ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="<?= site_url('kategori/'.$baru_satu->kat_art) ?>" class="post-catagory"><?= $baru_satu->kat_art ?></a>
                                    <a href="<?= site_url('artikel_detail/'.$baru_satu->slug_art) ?>" class="post-title">
                                        <h6><?= $baru_satu->jdl_art ?></h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-excerp"><?= substr($baru_satu->isi_art, 0, 400) ?></p>
                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center">
                                            <i class="fa fa-calendar"></i> &nbsp; <strong><?= tanggal($baru_satu->tgl_art) ?></strong> &nbsp; &nbsp;
                                            <i class="fa fa-eye"></i> &nbsp; <strong><?= $baru_satu->hit_art ?></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- berita terpopluer post -->
                            <div class="single-blog-post featured-post-2">
                                <div class="post-thumb">
                                    <a href="#"><img src="<?= base_url('back/artikel/'.$pop_satu->gbr_art) ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="<?= site_url('kategori/'.$pop_satu->kat_art) ?>" class="post-catagory"><?= $pop_satu->kat_art ?></a>
                                    <div class="post-meta">
                                        <a href="<?= site_url('artikel_detail/'.$pop_satu->slug_art) ?>" class="post-title">
                                            <h6><?= $pop_satu->jdl_art ?></h6>
                                        </a>
                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center">
											<i class="fa fa-calendar"></i> &nbsp; <strong><?= tanggal($pop_satu->tgl_art) ?></strong> &nbsp; &nbsp;
                                            <i class="fa fa-eye"></i> &nbsp; <strong><?= $pop_satu->hit_art ?></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- berita terpopluer post -->
                            <div class="single-blog-post featured-post-2">
                                <div class="post-thumb">
                                    <a href="#"><img src="<?= base_url('back/artikel/'.$pop_dua->gbr_art) ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="<?= site_url('kategori/'.$pop_dua->kat_art) ?>" class="post-catagory"><?= $pop_dua->kat_art ?></a>
                                    <div class="post-meta">
                                        <a href="<?= site_url('artikel_detail/'.$pop_dua->slug_art) ?>" class="post-title">
											<h6><?= $pop_dua->jdl_art ?></h6>
                                        </a>
                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center">
											<i class="fa fa-calendar"></i> &nbsp; <strong><?= tanggal($pop_dua->tgl_art) ?></strong> &nbsp; &nbsp;
                                            <i class="fa fa-eye"></i> &nbsp; <strong><?= $pop_dua->hit_art ?></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
					<?php foreach($populars as $pop): ?>
                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="<?= base_url('back/artikel/'.$pop->gbr_art) ?>" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="<?= site_url('kategori/'.$pop->kat_art) ?>" class="post-catagory"><?= $pop->kat_art ?></a>
                            <div class="post-meta">
                                <a href="<?= site_url('artikel_detail/'.$pop->slug_art) ?>" class="post-title">
                                    <h6><?= $pop->jdl_art ?></h6>
                                </a>
                                <p class="post-date">
									<i class="fa fa-calendar"></i> &nbsp; <?= tanggal($pop->tgl_art) ?>  &nbsp;
									<i class="fa fa-eye"></i> &nbsp; <?= $pop->hit_art ?>
								</p>
                            </div>
                        </div>
					</div>
					<?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Post Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <h6>Berita Terbaru</h6>
                    </div>
                    <div class="row">
						<!-- 4 berita terbaru -->
						<?php foreach($terbaru as $baru): ?>
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"><img src="<?= base_url('back/artikel/'.$baru->gbr_art) ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="<?= site_url('kategori/'.$baru->kat_art) ?>" class="post-catagory"><?= $baru->kat_art ?></a>
                                    <a href="<?= site_url('artikel_detail/'.$baru->slug_art) ?>" class="post-title">
                                        <h6><?= $baru->jdl_art ?></h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
										<i class="fa fa-calendar"></i> &nbsp; <?= tanggal($baru->tgl_art) ?>  &nbsp;
										<i class="fa fa-eye"></i> &nbsp; <?= $baru->hit_art ?>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php endforeach; ?>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading">
                        <h6>Informasi</h6>
                    </div>
                    <!-- Newsletter Widget -->
                    <div class="newsletter-widget">
                        <h4>Subscribe</h4>
                        <p>Ngapeh merupakan portal media informasi lokal yang bertujuan untuk menjadi media yang cerdas dan bersahabat</p>
                        <form action="<?= site_url('subscribe/insert') ?>" method="post">
                            <input type="email" name="inp_em" placeholder="Email">
                            <button type="submit" class="btn w-100">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Popular News Area End ##### -->

    <?php $this->load->view('front/layouts/footer') ?>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                nav:false,
                dots:false,
                autoplay:true,
                loop:true,
                margin:10,
                items:2,
            });
        });
    </script>
</body></html>