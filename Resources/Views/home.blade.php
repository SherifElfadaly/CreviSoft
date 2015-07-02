@extends('crevisoft::master')

@section('content')

<section class="home-page">

	<!-- Start Home Header Menu -->
	{!! \CMS::menus()->renderMenu('header_menu', \Lang::locale(), 'templates.menus.dynamic_header_menu')  !!}
	<!-- End Home Header Menu -->

	@include('crevisoft::parts.home.intro')

	@include('crevisoft::parts.home.about')

	@include('crevisoft::parts.home.services')

	@include('crevisoft::parts.home.projects')

	@include('crevisoft::parts.home.news')

	@include('crevisoft::parts.home.contact')

</section>

@stop