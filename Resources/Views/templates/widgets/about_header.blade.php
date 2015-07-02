<div class="header col-lg-8 col-md-12 col-sm-12 col-xs-12  pull-right wow fadeInUp " data-wow-delay=".5s">
	<h2>
		<i class="fa fa-question fa-lg fa-inverse sonarEffect"></i>
		{!! $widget->data['description'] !!}
	</h2>
</div>
<div class="col-lg-3 col-md-5 col-sm-5 col-xs-12 pull-right wow fadeInDown " data-wow-delay=".5s">
	<a href="{!! $widget->link !!}" class="btn btn-default hvr-bounce-to-left "> {{ trans('crevisoft::master.readMore') }} </a>
</div>