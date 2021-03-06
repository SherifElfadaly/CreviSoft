<!--Start Section contact_us-->
<section class="contact_us ">
  <div class="container-fluid">
    <div class="row wow bounceInRight" data-wow-duration="3s">
      <iframe
      class       ="map"
      width       ="600"
      height      ="400"
      src         ="https://www.google.com/maps/embed/v1/place?key=AIzaSyC1k_ARoEQ7n5aLHywq0xszS2C1VQg83D0&q={{ \CMS::coreModuleSettings()->getSettingValuByKey('Latitude', 'crevisoft') }},{{ \CMS::coreModuleSettings()->getSettingValuByKey('Longitude', 'crevisoft') }}">
    </iframe>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-12  col-sm-12 col-xs-12 contact-details pull-right ">
      <div class="row">
        <div class="col-lg-12 pull-right wow fadeInUp" data-wow-delay="1.1s">
          <h2>{{ trans('crevisoft::master.title') }}</h2>
        </div>
      </div>
      <div class="row">
        <ul class="list-unstyled">
          <li class="wow fadeInUp" data-wow-delay="1.2s">
            <span class="glyphicon glyphicon-home"></span>
            <a href="{{ url('/') }}">www.Crevisoft.com</a>
          </li>
          <li class="wow fadeInUp" data-wow-delay="1.3s">
            <span class="glyphicon glyphicon-map-marker"></span>
            {{ \CMS::coreModuleSettings()->getSettingValuByKey('Address', 'crevisoft') }}
          </li>
          <li class="wow fadeInUp" data-wow-delay="1.4s">
            <span class="glyphicon glyphicon-earphone"></span>
            {{ \CMS::coreModuleSettings()->getSettingValuByKey('Telephone', 'crevisoft') }}
          </li>
          <li class="wow fadeInUp" data-wow-delay="1.5s">
            <span class="glyphicon glyphicon-envelope"></span>
            <a href="mailto:{{ \CMS::coreModuleSettings()->getSettingValuByKey('Email', 'crevisoft') }}">{{ \CMS::coreModuleSettings()->getSettingValuByKey('Email', 'crevisoft') }}</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="col-lg-6 col-md-12  col-sm-12 col-xs-12 ">
      
      <div class="alert alert-danger hidden" id="contactErrormessageContainer">
        <ul>
        </ul>
      </div>

      <div class="alert alert-success hidden" id="contactMessageContainer">
        <ul>
        </ul>
      </div>

      <form class="contact_form"  method="post" action="{{ url('contact/contact') }}">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="col-lg-12 ">
          <div class="form-group  wow fadeInUp  " data-wow-delay="1s">
            <input class="form-control " name="user_name" placeholder="{{ trans('crevisoft::master.name') }}" type="text" required>
          </div>

          <div class="form-group wow fadeInUp  " data-wow-delay="1.2s">
            <input class="form-control " name="user_email" placeholder="{{ trans('crevisoft::master.email') }}" type="text" required>
          </div>

          <div class="form-group wow fadeInUp  " data-wow-delay="1.4s">
            <textarea class="form-control " name="email_content" cols="5" placeholder="{{ trans('crevisoft::master.message') }}">
            </textarea>
          </div>
          <div class="send wow fadeInUp" data-wow-delay="1.9s">
            <button class="btn btn-default hvr-bounce-to-left" type="submit">{{ trans('crevisoft::master.send') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</section>
@include('crevisoft::assets.contact-ajax-handler')
<!--End Section contact_us-->