<!--Start Section Footer-->

  <footer>
    <section class="footer-one">
      <div class="container">
        <div class="row">
          
          <!-- Start Header Menu -->
          {!! \CMS::menus()->renderMenu('footer_menu', \Lang::locale(), 'templates.menus.footer_menu')  !!} 
          <!-- End Header Menu -->

          <div class="col-lg-2 col-md-4  col-sm-4  pull-right">
            <ul class="list-unstyled three-columns">
              <li><a href="#"> الرئيسيه</a>
              </li>
              <li><a href="#">من نحن</a>
              </li>
              <li><a href="#">خدمات</a>
              </li>
              <li><a href="#">أعمال</a>
              </li>
              <li><a href="#">مدونه</a>
              </li>
              <li><a href="#">تواصل معنا</a>
              </li>
              <li><a href="#"> وظائف</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-4  pull-right">
            <ul class="list-unstyled fast-links">
              <li><a href="#"> لنكات سريعه</a>
              </li>
              <li><a href="#"> لنكات سريعه</a>
              </li>
              <li><a href="#"> لنكات سريعه</a>
              </li>
              <li><a href="#"> لنكات سريعه</a>
              </li>
              <li><a href="#"> لنكات سريعه</a>
              </li>
              <li><a href="#"> لنكات سريعه</a>
              </li>
              <li><a href="#"> لنكات سريعه</a>
              </li>
            </ul>
          </div>
              <div class="col-lg-2 col-md-4 col-sm-4  pull-right">
            <ul class="list-unstyled fast-links">
              <li><a href="#"> مشروع 1 </a>
              </li>
               <li><a href="#">مشروع 2 </a>
              </li>
               <li><a href="#"> مشروع 3 </a>
              </li>
               <li><a href="#"> مشروع 4 </a>
              </li>
               <li><a href="#"> مشروع 5 </a>
              </li>
               <li><a href="#"> مشروع 6 </a>
              </li>
               <li><a href="#"> مشروع 7 </a>
              </li>
           
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6  pull-right">
            <div class="media">
              <div class="media-right ">
                <a href="#">
                  <img class="media-object" src="images/11.jpg" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h3>عنوان المقال</h3>
                <a href="#">
                  <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما</p>
                </a>
              </div>
            </div>
            <div class="media">
              <div class="media-right ">
                <a href="#">
                  <img class="media-object" src="images/11.jpg" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h3>عنوان المقال</h3>
                <a href="#">
                  <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما</p>
                </a>
              </div>
            </div>

            <div class="media">
              <div class="media-right ">
                <a href="#">
                  <img class="media-object" src="images/11.jpg" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h3>عنوان المقال</h3>
                <a href="#">
                  <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6  work pull-right">
            <div class="row">
              <div class="col-lg-6 col-md-4 col-sm-4 pull-right">
                <img src="images/11.jpg" alt="..." />
              </div>
              <div class="col-lg-6 col-md-4 col-sm-4 pull-right">
                <img src="images/11.jpg" alt="..." />
              </div>
            </div>

             <div class="row">
              <div class="col-lg-6 col-md-4 col-sm-4 pull-right">
                <img src="images/55.jpg" alt="..." />
              </div>
              <div class="col-lg-6 col-md-4 col-sm-4 pull-right">
                <img src="images/22.jpg" alt="..." />
              </div>
            </div>
            
             <div class="row">
              <div class="col-lg-6 col-md-4 col-sm-4 pull-right">
                <img src="images/1.jpg" alt="..." />
              </div>
              <div class="col-lg-6 col-md-4 col-sm-4 pull-right">
                <img src="images/2.jpg " alt="..." />
              </div>
            </div>
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