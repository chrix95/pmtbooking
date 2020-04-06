<footer class="footer black" role="contentinfo">
  <div class="wrap">
    <div class="row">
      <!-- Column -->
      <article class="one-half">
        <h6>About us</h6>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
          laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nibh
          euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer
          adipiscing elit, sed diam nonummy.</p>
      </article>
      <!-- //Column -->

      <!-- Column -->
      <article class="one-fourth">
        <h6>Need help?</h6>
        <p>Contact us via phone or email:</p>
        <p class="contact-data">
          <span class="icon icon-themeenergy_call"></span> 
          +1 555 555 555
        </p>
        <p class="contact-data">
          <span class="icon icon-themeenergy_mail-2"></span> 
          <a href="mailto:help@transfers.com">help@transfers.com</a>
        </p>
      </article>
      <!-- //Column -->

      <!-- Column -->
      <article class="one-fourth">
        <h6>Follow us</h6>
        <ul class="social">
          <li><a href="#" title="facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
          <li><a href="#" title="twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
          <li><a href="#" title="gplus"><i class="fa fa-fw fa-google-plus"></i></a></li>
          <li><a href="#" title="linkedin"><i class="fa fa-fw fa-linkedin"></i></a></li>
          <li><a href="#" title="pinterest"><i class="fa fa-fw fa-pinterest-p"></i></a></li>
          <li><a href="#" title="vimeo"><i class="fa fa-fw fa-vimeo"></i></a></li>
        </ul>
      </article>
      <!-- //Column -->
    </div>

    <div class="copy">
      <p>&copy; {{ date('Y') }}, Peace Mass Transit. All rights reserved.</p>
      <nav role="navigation" class="foot-nav">
        <ul>
          <li><a href="{{ route('welcome') }}" title="Home">Home</a></li>
          <li><a href="{{ route('about') }}" title="About us">About us</a></li>
          <li><a href="{{ route('contact') }}" title="Contact us">Contact us</a></li>
          <li><a href="#" title="Terms of use">Terms of use</a></li>
          <li><a href="{{ route('faqs') }}" title="Help">Help</a></li>
          <li><a href="#" title="For partners">For partners</a></li>
        </ul>
      </nav>
    </div>
  </div>
</footer>