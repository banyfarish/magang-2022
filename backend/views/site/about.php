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
                <?php
                    foreach ($about as $a){
                        echo $a['isi'];
                        echo $a['misi'];
                        echo $a['visi'];
                    }
                ?>    
            </div>
        </div>
    </section>
    <!-- About Page Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <?php
                    foreach ($about as $p){
                        echo $p['profil_ketua'];
                        echo $p['tentang'];
                        echo $p['gambar'];
                    }
                ?>   
            </div>
        </div>
    </section> 
    <!-- Team Section End -->
