@foreach($contents as $content)
	<div class="row">
		<div class="col-md-4 col-sm-4 ww pull-right">
	 		@if($content->contentImage)
				<img class="img-responsive" alt="{{ $content->contentImage->caption }}" src="{{ $content->contentImage->path }}">
		    @else
		    	<img class="img-responsive" src="http://placehold.it/900x300" alt="">
			@endif
		</div>

		<div class="col-md-8 col-sm-8">
			<h2>
				<a href="{{ url('contentitem/blog', [$content->id]) }}">{!! $content->data['title'] !!}</a>
			</h2>

			<ul class="blog-info">
				<li class="ww"><i class="fa fa-user "></i> {{ $content->user->name }}</li>
				<li><i class="fa fa-calendar"></i> {{ $content->created_at->toDayDateTimeString() }}</li>
				<li><i class="fa fa-comments"></i> {{ $content->commentsCount }}</li>
				@foreach($content->tags as $tag)
					<a href="{{ url('tag/blogs/Blog', [$tag->id]) }}">
						<li><i class="fa fa-tags"></i>{{ $tag->tag_name }}</li>
					</a>
				@endforeach
			</ul>

			<p>{!! $content->data['description'] !!}</p>
			<a href="{{ url('contentitem/blog', [$content->id]) }}" class="more"> {{ trans('crevisoft::master.readMore') }} <i class="icon-angle-right"></i></a>
		</div>
	</div>
	<hr class="blog-post-sep">
@endforeach

@include('crevisoft::parts.blogs.blog_pagination')