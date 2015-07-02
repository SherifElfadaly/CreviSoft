@extends('crevisoft::master')

@section('content')

<section class="services-page">
	{!! \CMS::sliders()->renderSlider('main', \Lang::locale()) !!}
	<div class="graphic-design">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 pull-right wow fadeInUp" data-wow-delay="1s">
					<div class="media">
						<div class="media-left media-middle">
							@if($content->contentImage)
							<img class="media-object" src="{{ $content->contentImage->path }}" alt="{{ $content->contentImage->caption }}">
							@endif
						</div>
						<div class="media-body">
							<h2>{!! $content->data['title'] !!}</h2>
							<p>{!! $content->data['content'] !!}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@stop