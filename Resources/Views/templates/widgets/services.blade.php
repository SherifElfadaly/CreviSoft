<div class="col-lg-6 col-md-6 col-xs-12 pull-right wow fadeInUp" data-wow-delay="1s">
	<div class="media">
		<div class="media-left media-middle">
			<a href="{{ $widget->link }}">
      			@if($widget->widgetImage)
					<img class="media-object" src="{{ $widget->widgetImage->path }}" alt="{{ $widget->widgetImage->caption }}">
				@endif
			</a>
		</div>
		<div class="media-body">
            <h3>{!! $widget->data['title'] !!}</h3>
			<p>{!! $widget->data['description'] !!}</p>
		</div>
	</div>
</div>