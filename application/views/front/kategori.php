<?php $this->load->view('front/layouts/header') ?>

    <!-- ##### Popular News Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <h6>Berita Terbaru</h6>
                    </div>
                    <div class="row">
						<?php foreach($terbaru as $baru): ?>
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"><img data-src="<?= base_url('back/artikel/'.$baru->gbr_art) ?>" class="lazyload" alt=""></a>
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
                    <!-- Popular News Widget -->
                    <div class="popular-news-widget mb-30">
						<h3>10 Berita Terpopuler</h3>
						<?php 
						$no = 1;
						foreach($populer as $pop): ?>
                        <div class="single-popular-post">
							<a href="<?= site_url('artikel_detail/'.$pop->slug_art) ?>">
								<h6><span><?= $no++ ?></span> <?= $pop->jdl_art ?></h6>
							</a>
							<p><?= tanggal($pop->tgl_art) ?></p>
						</div>
						<?php endforeach; ?>
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

    <!-- ##### Footer Area Start ##### -->
	<?php $this->load->view('front/layouts/footer') ?>

</body></html>