<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right wow fadeInUp" data-wow-delay="1.5s">
	<figure class="effect-apollo">
		<img src="{{ $widget->widgetImage->path }}">
		<figcaption>
			<h2>{!! $widget->data['title'] !!}</h2>
			<p>{!! $widget->data['description'] !!}<a href="{{ $widget->link }}"> {{ trans('crevisoft::master.readMore') }}</a></p>
		</figcaption>
	</figure>
</div>