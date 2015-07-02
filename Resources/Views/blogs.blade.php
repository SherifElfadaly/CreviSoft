@extends('crevisoft::master')

@section('content')

<section class="home-page">
	{!! \CMS::sliders()->renderSlider('main', \Lang::locale()) !!}

</section>

@stop