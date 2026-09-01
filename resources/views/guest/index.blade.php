@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section id="hero" class="section-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-5">

                <div class="hero-content">
                    <p class="hero-eyebrow">
                        <span>PRECISION</span>
                        <span class="dot"></span>
                        <span>PERFORMANCE</span>
                        <span class="dot"></span>
                        <span>PERFECTION</span>
                    </p>

                    <h1>Driven by <span class="primary-color">Innovation</span></h1>
                    <p class="hero-description">
                        YAKS PRO delivers cutting-edge solutions, premium quality
                        and reliable performance for a smarter tomorrow.
                    </p>
                    <div class="hero-actions">
                        <a href="#" class="btn btn-primary">
                            Explore Our Services
                            <i class="fa fa-arrow-right"></i>
                        </a>

                        <a href="#" class="btn btn-transparent">
                            <i class="fa fa-play-circle"></i>
                            Watch Our Story
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="hero-car">
                    <img src="{{asset('/images/hero-car.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="hero-features">

            <article class="hero-feature">
                <div class="feature-icon">
                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path
                            d="M12 15.5A3.5 3.5 0 1 0 12 8.5a3.5 3.5 0 0 0 0 7Z"
                            stroke="currentColor"
                            stroke-width="1.7" />

                        <path
                            d="M19.4 15a1.7 1.7 0 0 0 .34 1.88l.06.06-1.7 1.7-.06-.06a1.7 1.7 0 0 0-1.88-.34 1.7 1.7 0 0 0-1.03 1.56V20h-2.4v-.2a1.7 1.7 0 0 0-1.03-1.56 1.7 1.7 0 0 0-1.88.34l-.06.06-1.7-1.7.06-.06A1.7 1.7 0 0 0 8.46 15a1.7 1.7 0 0 0-1.56-1.03H6.7v-2.4h.2A1.7 1.7 0 0 0 8.46 10a1.7 1.7 0 0 0-.34-1.88l-.06-.06 1.7-1.7.06.06a1.7 1.7 0 0 0 1.88.34 1.7 1.7 0 0 0 1.03-1.56V5h2.4v.2a1.7 1.7 0 0 0 1.03 1.56 1.7 1.7 0 0 0 1.88-.34l.06-.06 1.7 1.7-.06.06a1.7 1.7 0 0 0-.34 1.88 1.7 1.7 0 0 0 1.56 1.03h.2v2.4h-.2A1.7 1.7 0 0 0 19.4 15Z"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linejoin="round" />
                    </svg>
                </div>

                <div>
                    <h3>Cutting-Edge Technology</h3>
                    <p>Always ahead of the curve</p>
                </div>
            </article>

            <article class="hero-feature">
                <div class="feature-icon">
                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path
                            d="M12 3.5 20 6.8v5.7c0 4.1-3.1 7.5-8 8.9-4.9-1.4-8-4.8-8-8.9V6.8l8-3.3Z"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linejoin="round" />

                        <path
                            d="m8.5 12 2.3 2.3 4.7-4.7"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>

                <div>
                    <h3>Reliable Performance</h3>
                    <p>Built for lasting value</p>
                </div>
            </article>

            <article class="hero-feature">
                <div class="feature-icon">
                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path
                            d="m5 4 4-1h6l4 1 2 4-9 13L3 8l2-4Z"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linejoin="round" />

                        <path
                            d="M3 8h18M9 3l-1 5 4 13 4-13-1-5"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linejoin="round" />
                    </svg>
                </div>

                <div>
                    <h3>Premium Quality</h3>
                    <p>Excellence in every detail</p>
                </div>
            </article>

        </div>
    </div>
</section>
<section id="services-sect">
    <div class="container">
        <div class="top-content">
            <p class="eyebrow">OUR SERVICES</p>
            <h2>Tailored Solutions for <span class="primary-color">Your Space</span></h2>
            <p class="description">From precision installation to bespoke designs, we bring your vision to life, with quality, expertise and attention to details</p>
            <a href="" class="btn btn-outline-primary">Explore All Services <i class="fa fa-arrow-right"></i></a>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="service-card">
                    <div class="service-image">
                        <img src="{{(asset('/images/car-seat.png'))}}" alt="">
                        <div class="service-icon">
                            <svg
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 16V13L7.5 7H16.5L19 13V16"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M7.5 7L6 4.5H18L16.5 7"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M5 16H19V19H5V16Z"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linejoin="round" />
                                <circle cx="8" cy="16" r="1" fill="currentColor" />
                                <circle cx="16" cy="16" r="1" fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                    <h3>Interior Upgrades</h3>
                    <p>Enhance comfort, style and functionality with premium upgrades.</p>
                    <div class="service-arrow">
                        <svg
                            width="18"
                            height="18"
                            viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M5 12H19"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round" />
                            <path
                                d="M13 6L19 12L13 18"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-card">
                    <div class="service-image">
                        <img src="{{(asset('/images/car-seat.png'))}}" alt="">
                        <div class="service-icon">
                            <svg
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 10.5L12 3L21 10.5"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M5 9.5V21H19V9.5"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linejoin="round" />
                                <path
                                    d="M10 21V15H14V21"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <h3>Home Interiors</h3>
                    <p>Transform your space with modern, functional and elegant designs.</p>
                    <div class="service-arrow">
                        <svg
                            width="18"
                            height="18"
                            viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M5 12H19"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round" />
                            <path
                                d="M13 6L19 12L13 18"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-card">
                    <div class="service-image">
                        <img src="{{(asset('/images/car-seat.png'))}}" alt="">
                        <div class="service-icon">
                            <svg
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 3L19 6V11.5C19 16.2 16.1 19.5 12 21C7.9 19.5 5 16.2 5 11.5V6L12 3Z"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linejoin="round" />
                                <path
                                    d="M8.5 12L11 14.5L15.5 10"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <h3>Safety Solutions</h3>
                    <p>Reliable installation for peace of mind, on the road and at home.</p>
                    <div class="service-arrow">
                        <svg
                            width="18"
                            height="18"
                            viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M5 12H19"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round" />
                            <path
                                d="M13 6L19 12L13 18"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="process-sect" class="section-bg">
    <div class="container">
        <div class="top-content">
            <p class="eyebrow">OUR PROCESS</p>
            <h2>Simple Steps <span class="primary-color">Lasting Results</span></h2>
            <p class="description">Getting started is easy. We make the process smooth, transparent and stress-free from consultation to completion</p>
            <a href="" class="btn btn-outline-primary">Explore All Services <i class="fa fa-arrow-right"></i></a>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="process-card">
                    <div class="process-number">01</div>
                    <div class="process-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 5.5C4 4.67 4.67 4 5.5 4H18.5C19.33 4 20 4.67 20 5.5V14.5C20 15.33 19.33 16 18.5 16H10L6 19V16H5.5C4.67 16 4 15.33 4 14.5V5.5Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M8 9H8.01M12 9H12.01M16 9H16.01"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3>Book a Consultation</h3>
                    <p>Tell us what you need and get expert advice.</p>
                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M5 12H19"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round" />
                        <path
                            d="M13 6L19 12L13 18"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="process-card">
                    <div class="process-number">02</div>
                    <div class="process-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 20H8L19 9C19.53 8.47 19.53 7.61 19 7.08L16.92 5C16.39 4.47 15.53 4.47 15 5L4 16V20Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M13.5 6.5L17.5 10.5"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round" />
                            <path d="M14 20H20"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3>Design & Plan</h3>
                    <p>We create a solutin that fits your style and space.</p>
                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M5 12H19"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round" />
                        <path
                            d="M13 6L19 12L13 18"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="process-card">
                    <div class="process-number">03</div>
                    <div class="process-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 8.5A3.5 3.5 0 1 0 12 15.5A3.5 3.5 0 0 0 12 8.5Z"
                                stroke="currentColor"
                                stroke-width="1.5" />
                            <path d="M19 13.5V10.5L16.9 10.05C16.7 9.43 16.38 8.85 15.96 8.34L17.1 6.52L15 4.42L13.18 5.56C12.67 5.14 12.09 4.82 11.47 4.62L11.02 2.5H8.02L7.57 4.62C6.95 4.82 6.37 5.14 5.86 5.56L4.04 4.42L1.94 6.52L3.08 8.34C2.66 8.85 2.34 9.43 2.14 10.05L0 10.5V13.5L2.14 13.95C2.34 14.57 2.66 15.15 3.08 15.66L1.94 17.48L4.04 19.58L5.86 18.44C6.37 18.86 6.95 19.18 7.57 19.38L8.02 21.5H11.02L11.47 19.38C12.09 19.18 12.67 18.86 13.18 18.44L15 19.58L17.1 17.48L15.96 15.66C16.38 15.15 16.7 14.57 16.9 13.95L19 13.5Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linejoin="round"
                                transform="translate(2 0)" />
                        </svg>
                    </div>
                    <h3>Installation</h3>
                    <p>Our skilled team handles the hard work with precision.</p>
                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M5 12H19"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round" />
                        <path
                            d="M13 6L19 12L13 18"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="process-card">
                    <div class="process-number">04</div>
                    <div class="process-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="8.5"
                                stroke="currentColor"
                                stroke-width="1.5" />
                            <path d="M8 12L10.5 14.5L16 9"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3>Enjoy the Result</h3>
                    <p>Relax and enjoy your upgraded space.</p>
                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M5 12H19"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round" />
                        <path
                            d="M13 6L19 12L13 18"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="testimonials-sect" class="section-bg">
    <div class="container">
        <div class="top-content">
            <p class="eyebrow">TESTIMONIALS</p>
            <h2>What Our Clients <span class="primary-color">Say</span></h2>
            <p class="description"> Real experiences. Genuine feedback. We're proud to be part
                of our clients' journeys.</p>
        </div>
        <div class="testimonials">

            <div class="testimonial-slider">
    
                <div class="testimonial-track">
    
                    <!-- Testimonial 1 -->
                    <article class="testimonial-card">
    
                        <div class="quote-mark">“</div>
    
                        <p class="testimonial-text">
                            The installation was seamless and the quality is
                            top-notch. My car seat looks even better than I imagined!
                        </p>
    
                        <div class="testimonial-author">
    
                            <img src="{{asset('/images/client-profile.png')}}" alt="Ada Eze">
    
                            <div>
                                <h4>Ada Eze</h4>
                                <span>Car Seat Installation</span>
                            </div>
    
                        </div>
    
                        <div class="testimonial-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
    
                    </article>
    
    
                    <!-- Testimonial 2 -->
                    <article class="testimonial-card">
    
                        <div class="quote-mark">“</div>
    
                        <p class="testimonial-text">
                            They transformed my living room into a beautiful,
                            cozy space. I couldn't be happier with the result.
                        </p>
    
                        <div class="testimonial-author">
    
                            <img src="{{asset('/images/client-profile.png')}}" alt="Tunde Ajayi">
    
                            <div>
                                <h4>Tunde Ajayi</h4>
                                <span>Home Interior Design</span>
                            </div>
    
                        </div>
    
                        <div class="testimonial-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
    
                    </article>
    
    
                    <!-- Testimonial 3 -->
                    <article class="testimonial-card">
    
                        <div class="quote-mark">“</div>
    
                        <p class="testimonial-text">
                            Professional, reliable and detail-oriented.
                            I highly recommend their services to anyone.
                        </p>
    
                        <div class="testimonial-author">
    
                            <img src="{{asset('/images/client-profile.png')}}" alt="Linda Okafor">
    
                            <div>
                                <h4>Linda Okafor</h4>
                                <span>Car Seat Installation</span>
                            </div>
    
                        </div>
    
                        <div class="testimonial-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
    
                    </article>
    
    
                    <!-- Add more cards here -->
    
                    <article class="testimonial-card">
    
                        <div class="quote-mark">“</div>
    
                        <p class="testimonial-text">
                            From consultation to completion, everything was
                            handled with care and attention to detail.
                        </p>
    
                        <div class="testimonial-author">
    
                            <img src="{{asset('/images/client-profile.png')}}" alt="Chinedu Obi">
    
                            <div>
                                <h4>Chinedu Obi</h4>
                                <span>Custom Solutions</span>
                            </div>
    
                        </div>
    
                        <div class="testimonial-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
    
                    </article>
    
                </div>
    
            </div>
    
    
            <!-- Slider dots -->
            <div class="testimonial-dots"></div>
        </div>
    </div>
</section>
<section id="get-started">
    <div class="container">
    <div class="top-content">
            <p class="eyebrow">READY TO GET STARTED</p>
            <h2>Your Vision.<span class="primary-color">Our Expertise.</span></h2>
            <p class="description">Whether it's your car or it's your home, we're here to bring your ideas to life with quality and care.</p>
            <a href="" class="btn">Book a Consultation <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</section>
@endsection