<div id="myslide" class="carousel slide " data-ride="carousel">
	<div class="carousel-inner">

		@foreach($slideShows as $slideShow)
			<div class="item @if($slideShow->display_order == 1) active @endif">
				<div class="row">
					<div class="media">
						<div class="col-lg-3  col-md-4 col-sm-4 col-xs-12 pull-right">
							<div class="media-left media-middle">
								<a href="{{ $slideShow->link }}">
									<img class="media-object" src="{{ $slideShow->slideShowImage->path }}" alt="{{ $slideShow->slideShowImage->caption }}">
								</a>
							</div>
						</div>
						<div class="col-lg-7  col-md-8 col-sm-8  col-xs-12 pull-right">
							<div class="media-body">
								<a href="{{ $slideShow->link }}">
									<p>
										{!! $slideShow->description !!}
									</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach

	</div>

	<div class="row">
		<ol class="carousel-indicators">
			@foreach($slideShows as $slideShow)
				<li @if($slideShow->display_order == 1) class="active" @endif data-target="#myslide" data-slide-to="{{ $slideShow->display_order - 1 }}"></li>
			@endforeach
		</ol>
	</div>

</div>
