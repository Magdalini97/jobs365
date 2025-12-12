@extends('master')

@section('content')
    <div class="homepage">

        <div class="hero">
            <div class="background">
                <img src="/images/Mask.svg" alt="svg">
            </div>
            <div class="container">
                <div class="paragraph">
                    <h1 class="page-title" data-aos="fade-right">Let's build your team <span>together</span></h1>
                    <div class="html-content" data-aos="fade-left">
                        <p>Our aim is to make the job market accessible to everyone,
                            where each individual and all companies have equal access to opportunities.
                            Let us support your hiring process in what we do best, by finding you the best match.
                            We handle the task of searching and recruiting people for businesses,
                            ensuring a smooth recruitment process
                            regardless of whether you are looking for qualified candidates from different countries or
                            you are a third country national looking for work in Greece.<br>
                            Contact us today and find out more about our services.
                        </p>
                    </div>
                    <div class="mobhead-btn">
                        <a href="#" title="em" class="mobhead">I am an employer</a>
                        <a href="#" title="em" class="mobhead transparent">I am a candidate</a>
                    </div>
                </div>
            </div>
        </div>

        @include('parts.position-section')

        @include('parts.aboutus-section')


        <div class="service-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a class="section-title" href="/services" title="services">Services</a>
                        <div class="services">
                            <div class="bar">
                                <button type="button" class="one active">Recruitment<br> solutions</button>
                                <button type="button" class="two">Support in the recruitment<br> process of non-EU
                                    nationals</button>
                            </div>


                            <div class="svg">
                                <button class="right-sign">
                                    <div class="right-one"><img src="/images/Path.svg" alt="svg"></div>
                                </button>

                                <button class="left-sign">
                                    <div class="left-one"><img src="/images/Path.svg" alt="svg"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1">
                        <div class="services-swiper swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="text">
                                        <a class="medium-title" href="#" title="recruitment">Recruitment
                                            solutions
                                        </a>
                                        <div class="html-content">
                                            <p>We offer tailored workforce solutions for your business in different sectors
                                                to create a strong match between your business requirements and the
                                                candidates&#39; know-how<br> and expertise.
                                            </p>
                                        </div>
                                        <a href="#" class="primary-btn">View more</a>
                                    </div>

                                    <div class="recru-image">
                                        <img src="/images/recru.png" alt="png">
                                        <div class="small"></div>
                                        <div class="medium"></div>
                                        <div class="large"></div>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="text">
                                        <a class="medium-title" href="#" class="recruitment">Support in the
                                            recruitment<br> process of
                                            non-EU nationals
                                        </a>
                                        <div class="html-content">
                                            <p>Finding a job in the EU is very challenging for many non-EU citizens.
                                                Mastering the labor market and complying with various legal and bureaucratic
                                                requirements
                                                are just some of the many obstacles that jobseekers face. We help candidates
                                                obtain the necessary permit and businesses to place the candidates.
                                            </p>
                                        </div>
                                        <a href="#" class="primary-btn">View more</a>
                                    </div>


                                    <div class="recru-image">
                                        <img src="/images/recru.png" alt="png">
                                        <div class="small"></div>
                                        <div class="medium"></div>
                                        <div class="large"></div>
                                    </div>
                                </div>
                                <a href="/some-link" class="d-block d-lg-none primary-btn">Our services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('parts.news-section')

        @include('parts.lookforjob')

        @include('parts.book-form')

    </div>
@endsection
