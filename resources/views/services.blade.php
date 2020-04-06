@extends('layouts.app')
@section('pageTitle', 'Services')
@section('page', 'Services')
@section('content')
  <div class="wrap">
    <div class="row">
      <!--- Sidebar -->
				<aside class="one-fourth sidebar left">
					<!-- Widget -->
					<div class="widget">
						<ul class="categories">
							<li class="active"><a href="#tab1">Private Shuttle</a></li>
							<li><a href="#tab2">Shuttle Shuttle</a></li>
							<li><a href="#tab3">Bus Shuttle</a></li>
							<li><a href="#tab4">Jet Mover</a></li>
						</ul>
					</div>
					<!-- //Widget -->
				</aside>
				<!--- //Sidebar -->
				
				<!--- Content -->
				<div class="three-fourth content">
					<!-- Tab -->
					<article class="single hentry" id="tab1">
						<div class="entry-featured">
							<img src="{{ asset('ui/images/uploads/img.jpg') }}" alt="" />
						</div>
						<div class="entry-content">
							<h2>Private shuttle</h2>
							<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Duis autem vel eum iriure dolor in <a href="#">this is a link</a> velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing <strong>this is some bold text</strong> elit, sed diam nonummy nibh euismod tincidunt ut. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
						</div>
					</article>
					<!-- //Tab -->
					
					<!-- Tab -->
					<article class="single hentry" id="tab2">
						<div class="entry-featured">
							<img src="{{ asset('ui/images/uploads/img8.jpg') }}" alt="" />
						</div>
						<div class="entry-content">
							<h2>Shuttle shuttle</h2>
							<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Duis autem vel eum iriure dolor in <a href="#">this is a link</a> velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing <strong>this is some bold text</strong> elit, sed diam nonummy nibh euismod tincidunt ut. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
						</div>
					</article>
					<!-- //Tab -->
					
					<!-- Tab -->
					<article class="single hentry" id="tab3">
						<div class="entry-featured">
							<img src="{{ asset('ui/images/uploads/img6.jpg') }}" alt="" />
						</div>
						<div class="entry-content">
							<h2>Bus shuttle</h2>
							<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Duis autem vel eum iriure dolor in <a href="#">this is a link</a> velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing <strong>this is some bold text</strong> elit, sed diam nonummy nibh euismod tincidunt ut. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
						</div>
					</article>
					<!-- //Tab -->
					
					<!-- Tab -->
					<article class="single hentry" id="tab4">
						<div class="entry-featured">
							<img src="{{ asset('ui/images/uploads/img7.jpg') }}" alt="" />
						</div>
						<div class="entry-content">
							<h2>Helicopter shuttle</h2>
							<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Duis autem vel eum iriure dolor in <a href="#">this is a link</a> velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing <strong>this is some bold text</strong> elit, sed diam nonummy nibh euismod tincidunt ut. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
						</div>
					</article>
					<!-- //Tab -->
				</div>
				<!--- //Content -->
    </div>
  </div>
@endsection
@section('javascript')
<script>
  $(document).ready(function () {
    $('.single').hide().first().show();
    $('.categories li:first').addClass('active');

    $('.categories a').on('click', function (e) {
      e.preventDefault();
      $(this).closest('li').addClass('active').siblings().removeClass('active');
      $($(this).attr('href')).show().siblings('.single').hide();
    });

    var hash = $.trim( window.location.hash );
    if (hash) $('.categories a[href$="'+hash+'"]').trigger('click');
  });
</script>
@endsection