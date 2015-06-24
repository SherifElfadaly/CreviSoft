<!--Start Section Intro-->
<section class="intro">

  <!-- Start Side Menu -->
  {!! \CMS::menus()->renderMenu('side_menu', \Lang::locale(), 'templates.menus.side_menu')  !!} 
  <!-- End Side Menu -->
  
  <div id="large-header" class="large-header">
    <canvas id="demo-canvas"></canvas>
    <h1 class="main-title wow bounceInDown">{{ trans('crevisoft::master.title') }}</h1>
    <p class="sub-title wow bounceInRight">

      @if(\Lang::locale() == 'ar')
        {{ \CMS::coreModuleSettings()->getSettingValuByKey('Arabic Logo Subtitle', 'crevisoft') }}
      @else
        {{ \CMS::coreModuleSettings()->getSettingValuByKey('English Logo Subtitle', 'crevisoft') }}
      @endif
    </p>

    <div class="social wow fadeInUp" data-wow-delay="1.6s">
      <a href="{{ \CMS::coreModuleSettings()->getSettingValuByKey('FaceBook', 'crevisoft') }}"><i class="fa fa-facebook wow fadeInUp" data-wow-delay="1.4s"></i></a>
      <a href="{{ \CMS::coreModuleSettings()->getSettingValuByKey('Twitter', 'crevisoft') }}"><i class="fa fa-twitter wow fadeInDown" data-wow-delay="1.6s"></i></a>
      <a href="{{ \CMS::coreModuleSettings()->getSettingValuByKey('Google', 'crevisoft') }}"><i class="fa fa-google-plus wow fadeInUp" data-wow-delay="1.8s"></i></a>
      <a href="{{ \CMS::coreModuleSettings()->getSettingValuByKey('Youtube', 'crevisoft') }}"><i class="fa fa-youtube-play wow fadeInDown" data-wow-delay="2s"></i></a>
      <a href="{{ \CMS::coreModuleSettings()->getSettingValuByKey('Instagram', 'crevisoft') }}"><i class="fa  fa-instagram wow fadeInUp" data-wow-delay="2.2s"></i></a>
      <div class="language">
       @foreach($languages as $language)
        <a href="{{ url('admin/changeLanguage', $language->key) }}"><div class="{{ strtolower($language->title) }}"> </div></a>
       @endforeach
     </div>
   </div>
 </div>
</section>
<!--End Section Intro-->