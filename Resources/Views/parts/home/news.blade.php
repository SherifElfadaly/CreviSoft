 <!--Start Section news-->
 <section class="news">
 	<div class="container wow flipInX " data-wow-delay="1s">
 		<h2>{{ trans('crevisoft::master.title') }}</h2>
 		{!! \CMS::sliders()->renderSlider('news', \Lang::locale()) !!}
 	</div>
 </section>
 <!--End Section news-->