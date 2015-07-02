<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pull-right wow fadeInUp" data-wow-delay="1.5s">
	<figure class="effect-apollo">
      	@if($widget->widgetImage)
			<img src="{{ $widget->widgetImage->path }}">
		@endif
		<figcaption>
			<h2>{!! $widget->data['title'] !!}</h2>
			<a href="{{ $widget->link }}" class="btn btn-default hvr-bounce-to-left"> {{ trans('crevisoft::master.readMore') }} </a>
			<p>{!! $widget->data['description'] !!}</p>
		</figcaption>
	</figure>
</div>