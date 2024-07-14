@extends('frontend.master')

@section('body')
<!--Page Title Starts Here-->
<div class="container section-padding">
    <div class="row">
        <div class="col-md-12 page-title">
            <h3>Portfolio</h3>
        </div>
    </div>
</div>
<!--Page Title Ends Here-->

<!--Portfolio Starts Here-->
<div class="container portfolio-section-padding">
<div class="row portfolio">

<div class="col-md-3 portfolio-content">

    <div class="col-md-12 portfolio-item portfolio-image"></div>

    <div class="text-center">
       <p>
            <a href="" target="_blank">
            View Demo
        </a>
        </p>

    </div>

</div>

<div class="col-md-3 portfolio-content">

    <div class="col-md-12 portfolio-item portfolio-image02"></div>

    <div class="text-center">
       <p>
            <a href="" target="_blank">
            View Demo
        </a>
        </p>
    </div>

</div>

<div class="col-md-3 portfolio-content">

    <div class="col-md-12 portfolio-item portfolio-image03"></div>

    <div class="text-center">
       <p>
            <a href="" target="_blank">
            View Demo
        </a>
        </p>
    </div>

</div>

 <div class="col-md-3 portfolio-content">

    <div class="col-md-12 portfolio-item portfolio-image04"></div>

    <div class="text-center">
        <p>
            <a href="" target="_blank">
            View Demo
        </a>
        </p>

    </div>

</div>


</div>

<div class="row portfolio">


<div class="col-md-3 portfolio-content">

    <div class="col-md-12 portfolio-item portfolio-image05"></div>

    <div class="text-center">
       <p>
            <a href="" target="_blank">
            View Demo
        </a>
        </p>
    </div>

</div>

<div class="col-md-3 portfolio-content">

    <div class="col-md-12 portfolio-item portfolio-image06"></div>

    <div class="text-center">
       <p>
             <a href="" target="_blank">
            View Demo
        </a>
        </p>
    </div>

</div>

<div class="col-md-3 portfolio-content">

    <div class="col-md-12 portfolio-item portfolio-image06"></div>

    <div class="text-center">
       <p>
             <a href="" target="_blank">
            View Demo
        </a>
        </p>
    </div>

</div>

<div class="col-md-3 portfolio-content">

    <div class="col-md-12 portfolio-item portfolio-image06"></div>

    <div class="text-center">
       <p>
             <a href="" target="_blank">
            View Demo
        </a>
        </p>
    </div>

</div>


</div>

<div class="text-center">
 <a href="portfolio.html">
    <button type="button" class="another-button">Load More</button>
 </a>
</div>

</div>
<!--Portfolio Ends Here-->

<!--Testimonial Starts Here-->
<div class="container section-padding">
<div class="row">
    <div class="col-md-12">
        <div id="testimonial-slider" class="owl-carousel">
            <div class="testimonial">
                <div class="client">
                    <img src="{{ asset('/') }}frontend/assets/images/profile.jpeg" alt="">
                </div>
                <div class="testimonial-content">
                    <p class="description">
                      I'm a Web Developer, based in Dhaka, Bangladesh. I did my bachelor
                      in Computer Science and Engineering. I also underwent several
                      trainings in Web Development at various renowned training
                      institutions. I'm expert in HTML/HTML5, CSS/CSS3, Bootstrap 4,
                      Wordpress Theme Customization, JavaScript, Php, Laravel and more.
                    </p>
                    <h3 class="client-title">Shamima
                        <small class="post">Web Developer</small>
                    </h3>
                </div>
            </div>

            <div class="testimonial">
                <div class="client">
                    <img src="{{ asset('/') }}frontend/assets/images/profile.jpeg"b alt="">
                </div>
                <div class="testimonial-content">
                    <p class="description">
                      I'm a Web Developer, based in Dhaka, Bangladesh. I did my bachelor
                      in Computer Science and Engineering. I also underwent several
                      trainings in Web Development at various renowned training
                      institutions. I'm expert in HTML/HTML5, CSS/CSS3, Bootstrap 4,
                      Wordpress Theme Customization, JavaScript, Php, Laravel and more.
                    </p>
                    <h3 class="client-title">Williamson
                        <small class="post">Web Designer</small>
                    </h3>
                </div>
            </div>

            <div class="testimonial">
                <div class="client">
                    <img src="{{ asset('/') }}frontend/assets/images/profile.jpeg"b alt="">
                </div>
                <div class="testimonial-content">
                    <p class="description">
                      I'm a Web Developer, based in Dhaka, Bangladesh. I did my bachelor
                      in Computer Science and Engineering. I also underwent several
                      trainings in Web Development at various renowned training
                      institutions. I'm expert in HTML/HTML5, CSS/CSS3, Bootstrap 4,
                      Wordpress Theme Customization, JavaScript, Php, Laravel and more.
                    </p>
                    <h3 class="client-title">Liamson
                        <small class="post">Web Designer</small>
                    </h3>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!--Portfolio Ends Here-->

@endsection
