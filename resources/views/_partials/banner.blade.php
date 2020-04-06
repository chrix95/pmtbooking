@if(Request::is('/'))
    <!-- Intro -->
    <div class="intro">
        <div class="wrap">
            <div class="textwidget">
                <h1 class="wow fadeInDown">Need a ride?</h1>
                <h2 class="wow fadeInUp">You've come to the right place.</h2>
                <div class="actions">
                    <a href="{{ route('booking.search') }}" title="Make a booking" class="btn large color wow fadeInRight anchor">Book a seat</a>
                    <a href="{{ route('booking.status') }}" title="Booking status" class="btn large white wow fadeInLeft anchor">Booking Status</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //Intro -->
@else
    @if(Request::is('completed'))
        <!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Thank you. Your booking is now confirmed.</h1>
				</div>
			</div>
		</header>
        <!-- //Page info -->
    @else
        @if(!Request::is('booking'))
            <!-- Page info -->
            <header class="site-title color">
                <div class="wrap">
                    <div class="container">
                        <h1>@yield('pageTitle')</h1>
                        <nav role="navigation" class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('welcome') }}" title="Home">Home</a></li>
                                <li>@yield('page')</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- //Page info -->
        @endif
    @endif
@endif