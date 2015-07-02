<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		@foreach($slideShows as $slideShow)
			<li @if($slideShow->display_order == 1) class="active" @endif data-target="#carousel-example-generic" data-slide-to="{{ $slideShow->display_order - 1 }}"></li>
		@endforeach
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		@foreach($slideShows as $slideShow)
			<div class="item @if($slideShow->display_order == 1) active @endif">
				<img src="{{ $slideShow->slideShowImage->path }}" alt="{{ $slideShow->slideShowImage->caption }}">
			</div>
		@endforeach
	</div>
</div>
