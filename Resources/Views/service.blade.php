@extends('crevisoft::master')

@section('content')

<section class="graphic-design-page">
	{!! \CMS::sliders()->renderSlider('main', \Lang::locale()) !!}
	
	@foreach($contents as $content)
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
							<div class="row">
								<div class="col-lg-3 col-md-5 col-sm-5 col-xs-12 pull-left wow fadeInDown " data-wow-delay=".5s">
									<a href="{{ url('contentitem', [strtolower(snake_case(str_replace (" ", "", $content->contentType->content_type_name))), $content->id]) }}" class="btn btn-default hvr-bounce-to-left "> {{ trans('crevisoft::master.readMore') }}</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endforeach

</section>

@stop