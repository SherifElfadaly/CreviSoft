<!--Start Section Footer-->
<footer>
  <section class="footer-one">
    <div class="container">
      <div class="row">
        
        <!-- Start Site Map Menu -->
        {!! \CMS::menus()->renderMenu('footer_site_map_menu', \Lang::locale(), 'templates.menus.footer_site_map_menu')  !!} 
        <!-- End Site Map Menu -->
        
        <!-- Start Fast Links Menu -->
        {!! \CMS::menus()->renderMenu('footer_fast_links_menu', \Lang::locale(), 'templates.menus.footer_fast_links_menu')  !!} 
        <!-- End Fast Links Menu -->

        <!-- Start Projects Menu -->
        {!! \CMS::menus()->renderMenu('footer_projects_menu', \Lang::locale(), 'templates.menus.footer_projects_menu')  !!} 
        <!-- End Projects Menu -->

        <!-- Start Services Menu -->
        {!! \CMS::menus()->renderMenu('footer_services_menu', \Lang::locale(), 'templates.menus.footer_services_menu')  !!} 
        <!-- End Services Menu -->

      <div class="subscribe-footer col-lg-4 col-md-6 col-sm-6  pull-right">
        @include('crevisoft::parts.home.subscribe')
      </div>

      </div>
    </div>

    <div class="copyright">
      <div class="container">
        <div class="row">
          <h2>{{ trans('crevisoft::master.title') }}</h2>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <a href="#"><span> {{ trans('crevisoft::master.privacyPolicy') }}</span></a>
            <span>/</span>
            <a href="#"><span> {{ trans('crevisoft::master.TermsOfUse') }}</span></a>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 text-right ">
            {{ trans('crevisoft::master.copyright') }} &copy; 2015 <span>{{ trans('crevisoft::master.title') }}</span>
          </div>

        </div>
      </div>
    </div>
  </section>
</footer>
 <!--End Section Footer-->