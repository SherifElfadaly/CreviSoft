<h2 class="no-top-space">{{ trans('crevisoft::master.archive') }}</h2>
<ul class="nav sidebar-categories margin-bottom-40">
	@foreach(\CMS::contentItems()->getContentArchive('Blog') as $key => $value)
		@foreach($value as $element)
			<li>
				<a href="{{ url('archive/blogs/Blog', [$key, $element]) }}">
					@if($key == 'months')
						{{ date("F",mktime(0,0,0,$element,10)) }}
					@else
						{{ $element }}
					@endif
				</a>
			</li>
		@endforeach
	@endforeach
</ul>