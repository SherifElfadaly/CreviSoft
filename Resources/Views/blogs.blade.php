@extends('crevisoft::master')

@section('content')
	
<section class="blog">
	{!! \CMS::sliders()->renderSlider('main', \Lang::locale()) !!}
	
	<div class="main">
		<div class="container">
			<!-- BEGIN SIDEBAR & CONTENT -->
			<div class="row margin-bottom-40">
				<!-- BEGIN CONTENT -->
				<div class="col-md-12 col-sm-12 text-right">

					<div class="content-page">
						<div class="row">
							<!-- BEGIN LEFT SIDEBAR -->
							<div class="col-md-9 col-sm-12 blog-posts pull-right">
								@include('crevisoft::parts.blogs.blog_search_form')
								@include('crevisoft::parts.blogs.blog_body')
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