      
<h3>{{ trans('crevisoft::master.subscribe') }}</h3>

{!! \CMS::widgets()->renderWidget('Subscription', \Lang::locale()) !!}

<div class="row">
  <div class="col-lg-12">

    <div class="alert alert-danger hidden" id="subscribeErrormessageContainer">
      <ul>
      </ul>
    </div>

    <div class="alert alert-success hidden" id="subscribeMessageContainer">
      <ul>
      </ul>
    </div>

    <form class="form-inline subscribe_form"  method="post" action="{{ url('subscribe/subscribe') }}">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <input class="form-control input-lg" name="email" type="text" placeholder="{{ trans('crevisoft::master.email') }}" required>
      <button class="btn btn-default">{{ trans('crevisoft::master.subscribe') }}</button>
    </form>
    <div class="social">
      <a href="{{ \CMS::coreModuleSettings()->getSettingValuByKey('FaceBook', 'crevisoft') }}"><i class="fa fa-facebook wow fadeInUp"></i></a>
      <a href="{{ \CMS::coreModuleSettings()->getSettingValuByKey('Twitter', 'crevisoft') }}"><i class="fa fa-twitter wow fadeInDown"></i></a>
      <a href="{{ \CMS::coreModuleSettings()->getSettingValuByKey('Google', 'crevisoft') }}"><i class="fa fa-google-plus wow fadeInUp"></i></a>
      <a href="{{ \CMS::coreModuleSettings()->getSettingValuByKey('Youtube', 'crevisoft') }}"><i class="fa fa-youtube-play wow fadeInDown"></i></a>
      <a href="{{ \CMS::coreModuleSettings()->getSettingValuByKey('Instagram', 'crevisoft') }}"><i class="fa  fa-instagram wow fadeInUp"></i></a>
    </div>

  </div>
</div>
@include('crevisoft::assets.subscribe-ajax-handler')