@extends('layouts.app')
@section('pageTitle', 'Contact')
@section('page', 'Contact')
<style>
    .main {
        padding: 0px !important;
    }
</style>
@section('content')
    
    <div class="wrap">
        <div class="row">

            <!--- Content -->
            <div class="full-width content textongrey">
                <h2>Send us a message</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                    ullamcorper suscipit. All fields are required.</p>
            </div>
            <!--- //Content -->

            <!-- Form -->
            <div class="three-fourth">
                <form method="post" action="http://themeenergy.com/themes/html/transfers/contact_form_message.php"
                    name="contactform" id="contactform">
                    <div id="message"></div>
                    <div class="f-row">
                        <div class="one-half">
                            <label for="name">Name and surname</label>
                            <input type="text" id="name" />
                        </div>
                        <div class="one-half">
                            <label for="email">Email address</label>
                            <input type="email" id="email" />
                        </div>
                    </div>
                    <div class="f-row">
                        <div class="full-width">
                            <label for="comments">Message</label>
                            <textarea id="comments"></textarea>
                        </div>
                    </div>
                    <div class="f-row">
                        <input type="submit" value="Submit" id="submit" name="submit" class="btn color medium right" />
                    </div>
                </form>
            </div>
            <!-- //Form -->

            <!--- Sidebar -->
            <aside class="one-fourth sidebar right">
                <!-- Widget -->
                <div class="widget">
                    <h4>Need help booking?</h4>
                    <div class="textwidget">
                        <p>Call our customer services team on the number below to speak to one of our advisors who will help you
                            with all of your needs.</p>
                        <p class="contact-data"><span class="icon icon-themeenergy_call black"></span> +1 555 555 555</p>
                    </div>
                </div>
                <!-- //Widget -->

                <!-- Widget -->
                <div class="widget">
                    <h4>Advertisment</h4>
                    <a href="#"><img src="{{ asset('ui/images/uploads/advertisment.jpg') }}" alt="" /></a>
                </div>
                <!-- //Widget -->
            </aside>
            <!--- //Sidebar -->
        </div>
    </div>

    <!--- Google map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.0410052560965!2d7.317107714327127!3d9.150769389590588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104dd8e5352b2815%3A0xc830f83da22a0278!2sPeace%20Mass%20Transit!5e0!3m2!1sen!2sng!4v1584010509729!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <!--- //Google map -->

@endsection