<div class="graphic-design">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-xs-12 pull-right wow fadeInUp" data-wow-delay="1s">
        <div class="media">
          <div class="media-left media-middle">
            <a href="{!! $widget->link !!}">
              @if($widget->widgetImage)
                <img class="media-object" src="{{ $widget->widgetImage->path }}" alt="{{ $widget->widgetImage->caption }}">
              @endif
            </a>
          </div>
          <div class="media-body">
            <h2>{!! $widget->data['title'] !!}</h2>
            <p>{!! $widget->data['description'] !!}</p>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-5 col-sm-5 col-xs-12 pull-left wow fadeInDown " data-wow-delay=".5s">
              <a href="{!! $widget->link !!}" class="btn btn-default hvr-bounce-to-left "> {{ trans('crevisoft::master.readMore') }}</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  x = ['#614788', '#C77733'];
  i = 0;
  $(".graphic-design").each(function(){

    $(this).css("background-color", x[i]);
    i++;

    if (i == 2) i = 0;
  })
</script>