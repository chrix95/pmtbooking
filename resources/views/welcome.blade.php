@extends('layouts.app')
@section('content')
    {{-- <search-component></search-component> --}}
    <!-- Services iconic -->
    <div class="services iconic white">
        <div class="wrap">
            <div class="row">
                <!-- Item -->
                <div class="one-third wow fadeIn">
                    <span class="circle"><span class="icon  icon-themeenergy_savings"></span></span>
                    <h3>Fixed rates</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
                </div>
                <!-- //Item -->

                <!-- Item -->
                <div class="one-third wow fadeIn" data-wow-delay=".2s">
                    <span class="circle"><span class="icon icon-themeenergy_lockpad"></span></span>
                    <h3>Reliable transfers</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
                </div>
                <!-- //Item -->

                <!-- Item -->
                <div class="one-third wow fadeIn" data-wow-delay=".4s">
                    <span class="circle"><span class="icon icon-themeenergy_open-wallet"></span></span>
                    <h3>No booking fees</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
                </div>
                <!-- //Item -->

                <!-- Item -->
                <div class="one-third wow fadeIn">
                    <span class="circle"><span class="icon icon-themeenergy_heart"></span></span>
                    <h3>Free cancellation</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
                </div>
                <!-- //Item -->

                <!-- Item -->
                <div class="one-third wow fadeIn" data-wow-delay=".2s">
                    <span class="circle"><span class="icon icon-themeenergy_magic-trick"></span></span>
                    <h3>Booking flexibility</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
                </div>
                <!-- //Item -->

                <!-- Item -->
                <div class="one-third wow fadeIn" data-wow-delay=".4s">
                    <span class="circle"><span class="icon icon-themeenergy_call"></span></span>
                    <h3>24h customer service</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
                </div>
                <!-- //Item -->

                <!-- Item -->
                <div class="one-third wow fadeIn">
                    <span class="circle"><span class="icon icon-themeenergy_cup"></span></span>
                    <h3>Award winning service</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
                </div>
                <!-- //Item -->

                <!-- Item -->
                <div class="one-third wow fadeIn" data-wow-delay=".2s">
                    <span class="circle"><span class="icon icon-themeenergy_attach"></span></span>
                    <h3>Benefits for partners</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
                </div>
                <!-- //Item -->

                <!-- Item -->
                <div class="one-third wow fadeIn" data-wow-delay=".4s">
                    <span class="circle"><span class="icon icon-themeenergy_stars"></span></span>
                    <h3>Quality vehicles</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
                </div>
                <!-- //Item -->
            </div>
        </div>
    </div>
    <!-- //Services iconic -->

    <!-- Call to action -->
    <div class="black cta">
        <div class="wrap">
            <p class="wow fadeInLeft">Looking for a ride? We have got you covered! You know what to do.</p>
            <a href="{{ route('booking.search') }}" class="btn huge color right wow fadeInRight">Booking</a>
        </div>
    </div>
    <!-- //Call to action -->

    <!-- Services -->
    <div class="services boxed white" id="services">
        <!-- Item -->
        <article class="one-fourth wow fadeIn">
            <figure class="featured-image">
                <img src="{{ asset('ui/images/uploads/car.jpg') }}" alt="" />
                <div class="overlay">
                    <a href="{{ route('services') }}" class="expand">+</a>
                </div>
            </figure>
            <div class="details">
                <h4><a href="{{ route('services') }}">Private car</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.</p>
                <a class="more" title="Read more" href="{{ route('services') }}">Read more</a>
            </div>
        </article>
        <!-- //Item -->

        <!-- Item -->
        <article class="one-fourth wow fadeIn" data-wow-delay=".2s">
            <figure class="featured-image">
                <img src="{{ asset('ui/images/uploads/bus.jpg') }}" alt="" />
                <div class="overlay">
                    <a href="{{ route('services') }}" class="expand">+</a>
                </div>
            </figure>
            <div class="details">
                <h4><a href="{{ route('services') }}">Private shuttle</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.</p>
                <a class="more" title="Read more" href="{{ route('services') }}">Read more</a>
            </div>
        </article>
        <!-- //Item -->

        <!-- Item -->
        <article class="one-fourth wow fadeIn" data-wow-delay=".4s">
            <figure class="featured-image">
                <img src="{{ asset('ui/images/uploads/mover.png') }}" alt="" />
                <div class="overlay">
                    <a href="{{ route('services') }}" class="expand">+</a>
                </div>
            </figure>
            <div class="details">
                <h4><a href="{{ route('services') }}">Jet Mover</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.</p>
                <a class="more" title="Read more" href="{{ route('services') }}">Read more</a>
            </div>
        </article>
        <!-- //Item -->

        <!-- Item -->
        <article class="one-fourth wow fadeIn" data-wow-delay=".6s">
            <figure class="featured-image">
                <img src="{{ asset('ui/images/uploads/car.jpg') }}" alt="" />
                <div class="overlay">
                    <a href="{{ route('services') }}" class="expand">+</a>
                </div>
            </figure>
            <div class="details">
                <h4><a href="{{ route('services') }}">Helicopter transfers</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.</p>
                <a class="more" title="Read more" href="{{ route('services') }}">Read more</a>
            </div>
        </article>
        <!-- //Item -->
    </div>
    <!-- //Services -->

    <!-- Testimonials -->
    <div class="testimonials center black">
        <div class="wrap">
            <h6 class="wow fadeInDown"><i class="fa fa-quote-left"></i>Wow, our team is outstanding!</h6>
            <p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                tation nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            <p class="meta wow fadeInUp">-John Doe, CEO</p>
        </div>
    </div>
    <!-- //Testimonials -->

    {{-- <div class="partners white center">
        <div class="wrap">
            <h2 class="wow fadeIn">Our partners</h2>
            <div class="one-fifth wow fadeIn"><a href="#"><img src="{{ asset('ui/images/uploads/logo1.jpg') }}" alt="" /></a></div>
            <div class="one-fifth wow fadeIn" data-wow-delay=".2s"><a href="#"><img src="{{ asset('ui/images/uploads/logo2.jpg') }}"
                        alt="" /></a></div>
            <div class="one-fifth wow fadeIn" data-wow-delay=".4s"><a href="#"><img src="{{ asset('ui/images/uploads/logo3.jpg') }}"
                        alt="" /></a></div>
            <div class="one-fifth wow fadeIn" data-wow-delay=".6s"><a href="#"><img src="{{ asset('ui/images/uploads/logo4.jpg') }}"
                        alt="" /></a></div>
            <div class="one-fifth" data-wow-delay=".8s"><a href="#"><img src="{{ asset('ui/images/uploads/logo5.jpg') }}" alt="" /></a></div>
        </div>
    </div> --}}


    <!-- Call to action -->
    <div class="color cta">
        <div class="wrap">
            <p class="wow fadeInLeft">Take a sneak peak into our list of approved treminals.</p>
            <a href="{{ route('terminal') }}"
                class="btn huge black right wow fadeInRight">Our Terminal</a>
        </div>
    </div>
    <!-- //Call to action -->
@endsection