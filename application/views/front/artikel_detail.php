<?php $this->load->view('front/layouts/header') ?>

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post single-post">
                            <div class="post-thumb">
                                <a href="#"><img src="<?= base_url('back/artikel/'.$art->gbr_art) ?>" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="<?= site_url('kategori/'.$art->kat_art) ?>" class="post-catagory"><?= $art->kat_art ?></a>
                                <a href="#" class="post-title">
                                    <h6><?= $art->jdl_art ?></h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-author">
										<i class="fa fa-calendar"></i> &nbsp; <?= tanggal($art->tgl_art) ?>  &nbsp;
										<i class="fa fa-eye"></i> &nbsp; <?= $art->hit_art ?>
									</p>
                                    <p><?= $art->isi_art ?></p>
                                    <div class="newspaper-post-like d-flex align-items-center justify-content-between">
										<div class="addthis_inline_share_toolbox"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">
                        <!-- Popular News Widget -->
                        <div class="popular-news-widget mb-50">
							<h3>7 Berita Terpopuler</h3>
							<?php 
							$no = 1;
							foreach($populars as $pop): ?>
                            <div class="single-popular-post">
                                <a href="<?= site_url('artikel_detail/'.$pop->slug_art) ?>">
                                    <h6><span><?= $no++ ?></span> <?= $pop->jdl_art ?></h6>
                                </a>
                                <p><?= tanggal($pop->tgl_art)?></p>
                            </div>
							<?php endforeach; ?>
                        </div>

                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget mb-50">
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
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php $this->load->view('front/layouts/footer') ?>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c5ec44476088a16"></script>
</body></html>