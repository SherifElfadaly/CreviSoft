@extends('crevisoft::master')

@section('content')

<section class="home-page">
	{!! \CMS::sliders()->renderSlider('main', \Lang::locale()) !!}

	{!! \cms::comments()->getCommentTemplate('content', 1, 'templates.comments.blog_comment') !!}
</section>

@stop