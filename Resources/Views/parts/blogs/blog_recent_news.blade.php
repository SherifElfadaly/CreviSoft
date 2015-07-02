<!-- BEGIN RECENT NEWS -->
<div class="recent-news margin-bottom-10">
	<h2> {{ trans('crevisoft::master.recentNews') }}</h2>
	@foreach(\CMS::contentItems()->getRecentContents('News', 3, \Lang::locale()) as $content)
		<div class="row margin-bottom-10">
			<div class="col-md-4 pull-right">
				@if($content->contentImage)
					<img class="img-responsive" alt="{{ $content->contentImage->caption }}" src="{{ $content->contentImage->path }}">
			    @else
			    	<img class="img-responsive" src="http://placehold.it/900x300" alt="">
				@endif
			</div>
			<div class="col-md-8 recent-news-inner">
				<h3><a href="{{ url('news', [$content->id]) }}">{!! $content->data['title'] !!}</a></h3>
				<p>{!! $content->data['description'] !!}</p>
			</div>
		</div>
	@endforeach
</div>
<!-- END RECENT NEWS -->