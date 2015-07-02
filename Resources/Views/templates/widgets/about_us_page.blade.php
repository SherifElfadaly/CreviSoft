<section class="why-us">
  <div class="container">
    <div class="row">
      <div class="media pull-right">
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pull-right">
          <div class="media-left">
            <a href="{!! $widget->link !!}">
              @if($widget->widgetImage)
                <img class="media-object wow fadeInRight " data-wow-delay="1s" src="{{ $widget->widgetImage->path }}" alt="{{ $widget->widgetImage->caption }}">
              @endif
            </a>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
          <div class="media-body">
            <h3 class="media-heading">{!! $widget->data['title'] !!}</h3>
            <p>{!! $widget->data['description'] !!}</p>
            <div class="row">
              <div class="col-lg-3 col-md-5 col-sm-5 col-xs-12 pull-left">
                <a href="{!! $widget->link !!}" class="btn btn-default hvr-bounce-to-left "> {{ trans('crevisoft::master.readMore') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
  x = ['#614788', '#BEBEBE', '#C77733'];
  i = 0;
  $(".why-us").each(function(){

    $(this).css("background-color", x[i]);
    i++;

    if (i == 2) i = 0;
  })
</script>