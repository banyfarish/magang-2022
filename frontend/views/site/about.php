<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- About Page Section Begin -->
<section class="about-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="about__text about__page__text">
                        <div class="section-title">
                            <span>DPP</span>
                            <h2>IKATAN PESANTREN INDONESIA</h2>
                            <img src="img/logoipi.jpg" alt="Image" height="250" width="320">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="about__page__services">
                        <div class="about__page__services__text">
                        <h4>Identitas </h4>
                        <?php
                            foreach ($about as $a){
                                echo $a['isi'];
                            }
                        ?>
                        </div>    
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <img src="img/services/services-5.png" alt="">
                                    <h4>Misi</h4>
                                    <?php
                                    foreach ($about as $a){
                                        echo $a['misi'];
                                    }
                                    ?>
                                </div>
                            </div>                   
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <img src="img/services/services-6.png" alt="">
                                    <h4>Visi</h4>
                                    <?php
                                    foreach ($about as $a){
                                        echo $a['visi'];
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>             
            </div>
        </div>
    </section>
    <!-- About Page Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
            <div class="col-lg-6"> <div class="about__text"> <div class="section-title"> 
                <h5>
                    <?php
                    foreach ($about as $a){
                        echo $a['profil_ketua'];
                    }
                    ?>
                </h5>                              
                <span>Ketua Umum DPP IPI</span> </div> 
                <?php
                foreach ($about as $a){
                    echo $a['tentang'];
                }
                ?>
                <div class="team__social"> <a href="#"><i class="fa fa-facebook"></i></a> 
                <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-instagram"></i></a> </div></div></div>
                <div class="col-lg-6"> <div class="about__pic">                         
                    <div class="about__pic__inner"> <img src="
                        <?php
                        foreach ($about as $a){
                            echo $a['gambar'];
                        }
                        ?>" alt=""> 
                    </div> 
                </div> 
            </div>
            </div>
        </div>
    </section> 
    <!-- Team Section End -->
