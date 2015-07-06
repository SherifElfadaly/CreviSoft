<div class="blog-item-img">
	@if($content->contentImage)
		<img src="{{ $content->contentImage->path }}" alt="{{ $content->contentImage->caption }}">
	@endif
</div>
<h2>{!! $content->data['title'] !!}</h2>
<p>{!! $content->data['content'] !!}</p>
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