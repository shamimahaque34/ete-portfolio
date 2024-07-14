
@extends('frontend.master')
@section('body')

<!--Page Title Starts Here-->
<div class="container section-padding">
    <div class="row">
        <div class="col-md-12 page-title">
            <h3>My Services</h3>
        </div>
    </div>
</div>
<!--Page Title Ends Here-->

<!--Services Starts Here-->
<div class="container services-section-padding">
    <div class="row">
        <div class="col-md-4">
            <div class="single-service">
                <div class="service-icon">
                    <i class="fa fa-laptop"></i>
                </div>
                <h4>Web Design</h4>
                <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                <div class="service-hover"></div>
            </div>
        </div>

          <div class="col-md-4">
            <div class="single-service">
                <div class="service-icon">
                   <i class="fas fa-bug"></i>
                </div>
                <h4>Bug Fixing</h4>
                <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                <div class="service-hover"></div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="single-service">
                <div class="service-icon">
                    <i class="fas fa-life-ring"></i>
                </div>
                <h4>Quick Support</h4>
                <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                <div class="service-hover"></div>
            </div>
        </div>
    </div>
    <div class="row">

             <div class="col-md-4">
            <div class="single-service">
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h4>Web Development</h4>
                <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                <div class="service-hover"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-service">
                <div class="service-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h4>Responsive Design</h4>
                <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                <div class="service-hover"></div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="single-service">
                <div class="service-icon">
                    <i class="fab fa-wordpress"></i>
                </div>
                <h4>WP Customization</h4>
                <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                <div class="service-hover"></div>
            </div>
        </div>

    </div>
</div>

<!--Services Ends Here-->

<!--Project-idea Starts Here-->
<section class="project-idea">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 promote-content">
                <h3>Have any project idea?</h3>
                <p>Let's bring it to life together. I thrive on turning visions into reality. Whether you're an individual with a groundbreaking concept or a business seeking innovative solutions, we're here to transform ideas into impactful projects.Get in touch today and let's make your project idea a resounding success."</p>
                    <a href="contact.html">
                       <button type="button" class="main-button">Get A Quote</button>
                    </a>
            </div>

            <div class="col-12 col-md-6 content-preview">
                <div class="d-flex justify-content-end">
                    <div class="content-preview-thumb">
                    <img src="{{ asset('/') }}frontend/assets/images/project-idea.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Project-idea Ends Here-->

@endsection
