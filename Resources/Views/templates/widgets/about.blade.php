<div class=" col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right wow fadeInUp " data-wow-delay="1s">
  <div class="thumbnail">
    <div class="img-box">
      @if($widget->widgetImage)
      	<img src="{{ $widget->widgetImage->path }}" alt="{{ $widget->widgetImage->caption }}">
      @endif
    </div>
    <div class="caption">
      <h3> {!! $widget->data['title'] !!}</h3>
      <p>{!! $widget->data['description'] !!}</p>
    </div>
  </div>
</div>