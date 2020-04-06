<header class="header" role="banner">
  <div class="wrap">
    <!-- Logo -->
    <div class="logo">
      <a href="{{ route('welcome') }}" title="Transfers"><img src="{{ asset('ui/images/transfers.png') }}" alt="Peace Mass Transit" width="170px" /></a>
    </div>
    <!-- //Logo -->

    <!-- Main Nav -->
    <nav role="navigation" class="main-nav">
      <ul>
        <li @if(active('/')) class="active" @endif>
          <a href="{{ route('welcome') }}" title="Home">Home</a>
        </li>
        <li @if(active('about')) class="active" @endif>
          <a href="{{ route('about') }}" title="About">About</a>
        </li>
        <li @if(active('faqs')) class="active" @endif>
          <a href="{{ route('faqs') }}" title="About">FAQs</a>
        </li>
        <li @if(active('terminal')) class="active" @endif>
          <a href="{{ route('terminal') }}" title="Terminal">Terminals</a>
        </li>
        <li @if(active('contact')) class="active" @endif>
          <a href="{{ route('contact') }}" title="Contact">Contact</a>
        </li>
        <li @if(active('booking.search')) class="active" @endif>
          <a href="{{ route('booking.search') }}" title="Contact">Booking</a>
        </li>
      </ul>
    </nav>
    <!-- //Main Nav -->
  </div>
</header>