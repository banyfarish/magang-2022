<?php

/* @var $this yii\web\View */


$this->title = 'IKATAN PESANTREN INDONESIA';
?>

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="img/banner/banner1.jpg">
            <div class="hero__text">
                <h2>Halaqoh Ulama Nasional</h2>
                <a href="#" class="primary-btn">baca selengkapnya...</a>
                <a href="#" class="more_btn">Discover more</a>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="img/banner/banner2.jpg">
            <div class="hero__text">
                <h2>Santri dan Sejuta Tuntutan di Era Millennial</h2>
                <a href="#" class="primary-btn">baca selengkapnya...</a>
                <a href="#" class="more_btn">Discover more</a>
            </div>
        </div>
    </div>
    <div class="slide-num" id="snh-1"></div>
    <div class="slider__progress"><span></span></div>
</section>
<!-- Hero Section End -->

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__text">
                    <div class="section-title">
                        <span>Tentang IPI</span>
                        <h2>IKATAN PESANTREN INDONESIA</h2>
                    </div>
                    <div class="about__para__text">
                        <p>Nama organisasi adalah Ikatan Pesantren Indonesia, disingkat IPI.
                            Merupakan hasil perubahan nama dari Ikatan Pesantren Indonesia Jam’iyyah
                            Fida’ Kubro (IPI-JFK) sesuai Keputusan Musyawarah Nasional 2016 di Surabaya
                            tanggal 25-28 Februari 2016</p>
                        <p>Ikatan Pesantren Indonesia didirikan berdasarkan nilai-nilai ajaran Islam yang
                            dapat meletakkan dasar-dasar keilmuan untuk menciptakan masyarakat beriman,
                            bertaqwa dan berakhlaqul karimah yang tak terpisahkan...</p>
                    </div>
                    <a href="index.php?r=site%2Fabout" class="primary-btn normal-btn">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__pic">
                    <div class="about__pic__inner">
                        <img src="img/aboutipi.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Project Section Begin -->
<section class="project">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <span>kegiatan</span>
                    <h2>Berita Terkini</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project__slider owl-carousel">
                <?php foreach ($news as $berita) : ?>
                    <div class="col-lg-3">
                        <div class="project__slider__item set-bg" data-setbg="<?= Yii::$app->urlManagerBackend->baseUrl . "/" . $berita->gambar ?>">
                            <div class="project__slider__item__hover">
                                <span>Terkini</span>
                                <a href="<?= $berita->headline ?>" class="more_btn">
                                    <h5><?= $berita->judul ?></h5>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- Project Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">

        </div>
        <div class="counter__content">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Jadwal Sholat 5 Waktu</span>
                    <h2>untuk Jakarta dan Sekitarnya</h2><br>
                    <?php $formatter = Yii::$app->formatter; ?>
                    <?php if (isset($jadwal)) : ?>
                        <div class="row">
                            <br>
                            <?php foreach ($jadwal as $name => $value) : ?>
                                <div class="col-lg-6 col-md-6 col-sm-6"><br><br>
                                    <div class="counter__item"><br>
                                        <div class="counter__item__text">
                                            <h5><?= $name ?> </h5>
                                        </div>
                                        <div class="counter__item__number"><br>
                                            <h2><?= $formatter->asTime($value) ?></h2>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Call To Action Section Begin -->
<section class="callto spad set-bg" data-setbg="img/footer1.jpg">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="callto__text">
                <a href="index.php?r=site%2Fcontact" class="primary-btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->