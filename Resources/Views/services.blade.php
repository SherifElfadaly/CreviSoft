@extends('crevisoft::master')

@section('content')

<section class="services-page">
	{!! \CMS::sliders()->renderSlider('main', \Lang::locale()) !!}
	
    {!! \CMS::widgets()->renderWidget('Services Page', \Lang::locale()) !!}
</section>

@stop