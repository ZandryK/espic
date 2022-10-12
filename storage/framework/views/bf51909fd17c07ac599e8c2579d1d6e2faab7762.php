<?php $__env->startSection('body'); ?>


    <?php echo $__env->make('partials.__navHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section id="HOME">
    <div class="banner-blur">
    </div>
    <div class="container banner-container">
        <div class="contenue">
            <div class="description" data-aos="zoom-in">
                <h1>ESC-ESPIC cours en ligne</h1>
                <p class="banner-description">Ecole superieur proffessionnel en informatique et commerce</p>
                <a href="<?php echo e(route('login')); ?>" class="button">connexion</a>
            </div>
            <div class="illustration" data-aos="zoom-in">
                <img src="<?php echo e(asset('assets/images/Banners/illustration.png')); ?>" alt="" srcset="">
            </div>

        </div>
    </div>
</section>


<section id="about" >
    <div class="container about-container">
        <div class="about-content owl-carousel owl-theme">
            <div class="card item" data-aos="fade-up" data-aos-duration="1000">
                <figure>
                    <div>
                        <span class="icon"><i class="fa fa-book"></i></span>
                    </div>
                    <figcaption>
                        <h3>Formation modulaire</h3>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                    </figcaption>
                </figure>
            </div>
            <div class="card item" data-aos="fade-up" data-aos-duration="1000">
                <figure>
                    <div>
                        <span class="icon"><i class="fa fa-book"></i></span>
                    </div>
                    <figcaption>
                        <h3>Formation universitaire</h3>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                    </figcaption>
                </figure>
            </div>
            <div class="card item" data-aos="fade-up" data-aos-duration="1000">
                <figure>
                    <div>
                        <span class="icon"><i class="fa fa-book"></i></span>
                    </div>
                    <figcaption>
                        <h3>Formation special travailleur</h3>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="about-footer" id="ABOUT">
            <h2>A propos</h2>
            <span class="text">ESC-ESPIC vous propose les diplôme suivantes:</span>
            <div class="about-footer-content">
                <div>
                    <div class="card" data-aos="fade-up" data-aos-duration="3000">
                        <figure>
                            <div>
                                <span class="about-icon"><i class="fa fa-user"></i></span>
                            </div>
                            <figcaption>
                                <h3>Baccalaureat professionnel</h3>
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-duration="3000">
                        <figure>
                            <div>
                                <span class="about-icon"><i class="fa fa-user"></i></span>
                            </div>
                            <figcaption>
                                <h3>DTS (BACC+2)</h3>
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-duration="3000">
                        <figure>
                            <div>
                                <span class="about-icon"><i class="fa fa-user"></i></span>
                            </div>
                            <figcaption>
                                <h3>Licence professionnel</h3>
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="about-illustration">
                    <figure>
                        <img src="<?php echo e(asset('assets/images/about/illustration.jpg')); ?>" alt="illustration etudiant" class="img-fluid img-thumbnail">
                    </figure>
                </div>
            </div>
        </div>

    </div>
</section>



<section id="PARCOURS">
    <div class="container">
        <h2>PARCOURS</h2>
        <span class="parcours-text">Parcours les plus populaires de l'ESC-ESPIC</span>
        <div class="parcours-content">
            <div class="slider-content owl-carousel owl-theme" >
                <div class="card item" data-aos="fade-right" data-aos-duration="3000">
                    <img src="<?php echo e(asset('assets/images/card/1-MARKETING.jpg')); ?>" alt="" srcset="" class="img-card-top">
                    <span><i class="fa fa-bar-chart"></i></span>
                    <div class="card-body">
                        <h3>Commerce & Marketing</h3>
                        <p>DTS(sans bacc 22mois, avec bacc 17mois),Licence(10mois) </p>
                    </div>
                </div>
                <div class="card item" data-aos="fade-up" data-aos-duration="3000">
                    <img src="<?php echo e(asset('assets/images/card/front-back-end-1024x707.png')); ?>" alt="" srcset="" class="img-card-top">
                    <span><i class="fa fa-code"></i></span>
                    <div class="card-body">
                        <h3>Developpement FULL STACK</h3>
                        <p>Developpement Web, Mobile et application desktop (6mois) </p>
                    </div>
                </div>
                <div class="card item" data-aos="fade-left" data-aos-duration="3000">
                    <img src="<?php echo e(asset('assets/images/card/gestion-parc-informatique.png')); ?>" alt="" srcset="" class="img-card-top">
                    <span><i class="fa fa-laptop"></i></span>
                    <div class="card-body">
                        <h3>Informatique de gestion</h3>
                        <p>DTS(sans bacc 22mois, avec bacc 17mois),Licence(10mois) </p>
                    </div>
                </div>
                <div class="card item" data-aos="fade-up" data-aos-duration="3000">
                    <img src="<?php echo e(asset('assets/images/card/gestion-parc-informatique.png')); ?>" alt="" srcset="" class="img-card-top">
                    <span><i class="fa fa-laptop"></i></span>
                    <div class="card-body">
                        <h3>Informatique de gestion</h3>
                        <p>DTS(sans bacc 22mois, avec bacc 17mois),Licence(10mois) </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="PORTFOLIO">
    <div class="container">
        <h2>Portfolio</h2>
        <span>Exemple des sorties de promotion:</span>
        <div class="about-portfolio" data-aos="fade-up" data-aos-duration="3000">
            <div class="slides">
                <img src="<?php echo e(asset('assets/images/portfolio/pic1.jpg')); ?>" alt="" class="img-fluid">
            </div>
            <div class="slides">
                <img src="<?php echo e(asset('assets/images/portfolio/slide1.jpg')); ?>" alt="" class="img-fluid">
            </div>
            <div class="slides">
                <img src="<?php echo e(asset('assets/images/portfolio/slide2.jpg')); ?>" alt="" class="img-fluid">
            </div>
            <div class="slides">
                <img src="<?php echo e(asset('assets/images/portfolio/pic2.JPG')); ?>" alt="" class="img-fluid">
            </div>
            <div class="slides">
                <img src="<?php echo e(asset('assets/images/portfolio/pic3.JPG')); ?>" alt="" class="img-fluid">
            </div>
            <div class="slides">
                <img src="<?php echo e(asset('assets/images/portfolio/banner2.jpg')); ?>" alt="" class="img-fluid">
            </div>

             <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
                <p id="caption"></p>
            </div>

            <div class="playlist">
                <div class="column">
                    <img src="<?php echo e(asset('assets/images/portfolio/pic1.jpg')); ?>" alt="Promotion 2016" class="list cursor" onclick="currentSlide(1)" >
                </div>
                <div class="column">
                    <img src="<?php echo e(asset('assets/images/portfolio/slide1.jpg')); ?>" alt="Promotion 2015" class="list cursor" onclick="currentSlide(2)" >
                </div>
                <div class="column">
                    <img src="<?php echo e(asset('assets/images/portfolio/slide2.jpg')); ?>" alt="Promotion 2018" class="list cursor" onclick="currentSlide(3)" >
                </div>
                <div class="column">
                    <img src="<?php echo e(asset('assets/images/portfolio/pic2.JPG')); ?>" alt="Promotion 2017" class="list cursor" onclick="currentSlide(4)" >
                </div>
                <div class="column">
                    <img src="<?php echo e(asset('assets/images/portfolio/pic3.JPG')); ?>" alt="Promotion 2019" class="list cursor" onclick="currentSlide(5)" >
                </div>
                <div class="column">
                    <img src="<?php echo e(asset('assets/images/portfolio/banner2.jpg')); ?>" alt="Promotion 2020" class="list cursor" onclick="currentSlide(6)" >
                </div>
            </div>
        </div>
    </div>
    
</section>



    <?php echo $__env->make('partials.__footerHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.appHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zandry_kely/Documents/projet/resources/views/index.blade.php ENDPATH**/ ?>