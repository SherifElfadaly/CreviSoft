@extends('crevisoft::master')

@section('content')

<section class="about-us-page">
	{!! \CMS::sliders()->renderSlider('main', \Lang::locale()) !!}
	<section class="why-us">
		<div class="container">
			<div class="row">
				<div class="media pull-right">
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pull-right">
						<div class="media-left">
								@if($content->contentImage)
									<img class="media-object wow fadeInRight " data-wow-delay="1s" src="{{ $content->contentImage->path }}" alt="{{ $content->contentImage->caption }}">
								@endif
						</div>
					</div>
					<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
						<div class="media-body">
							<h3 class="media-heading">{!! $content->data['title'] !!}</h3>
							<p>{!! $content->data['content'] !!}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>

@stop