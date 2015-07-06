@extends('crevisoft::master')

@section('content')

<section class="bolg-details">
	{!! \CMS::sliders()->renderSlider('main', \Lang::locale()) !!}
	
	<div class="main">
		<div class="container">
			<!-- BEGIN SIDEBAR & CONTENT -->
			<div class="row margin-bottom-40">
				<!-- BEGIN CONTENT -->
				<div class="col-md-12 col-sm-12">

					<div class="content-page">
						<div class="row">
							<!-- BEGIN LEFT SIDEBAR -->
							<div class="col-md-9 col-sm-12 blog-item pull-right">
								@include('crevisoft::parts.blog.blog_body')
								{!! \cms::comments()->getCommentTemplate('content', 1, 'templates.comments.blog_comment') !!}
							</div>
							<!-- END LEFT SIDEBAR -->

							<!-- BEGIN RIGHT SIDEBAR -->
							<div class="col-md-3 col-sm-12 blog-sidebar">
								@include('crevisoft::parts.blogs.blog_categories')
								@include('crevisoft::parts.blogs.blog_archive')
								@include('crevisoft::parts.blogs.blog_recent_news')
								@include('crevisoft::parts.blogs.blog_twitter')
								@include('crevisoft::parts.blogs.blog_facebook')
								@include('crevisoft::parts.blogs.blog_tags')
							</div>
							<!-- END RIGHT SIDEBAR -->
						</div>
					</div>
				</div>
				<!-- END CONTENT -->
			</div>
			<!-- END SIDEBAR & CONTENT -->
		</div>
	</div>

</section>

@stop