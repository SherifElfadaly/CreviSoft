@extends('crevisoft::master')

@section('content')

<section class="about-us-page">
	{!! \CMS::sliders()->renderSlider('main', \Lang::locale()) !!}
	
    {!! \CMS::widgets()->renderWidget('About Us Page', \Lang::locale()) !!}
</section>

@stop