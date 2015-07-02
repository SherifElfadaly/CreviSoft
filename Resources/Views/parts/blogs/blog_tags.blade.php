<!-- BEGIN BLOG TAGS -->
<div class="blog-tags margin-bottom-20">
	<h2>Tags</h2>
	<ul>
		@foreach(\CMS::tags()->all() as $tag)
			<li>
				<a href="{{ url('tag' ,[$tag->id]) }}">
					<i class="fa fa-tags"></i>{{ $tag->tag_name }}
				</a>
			</li>
		@endforeach
	</ul>
</div>
<!-- END BLOG TAGS -->