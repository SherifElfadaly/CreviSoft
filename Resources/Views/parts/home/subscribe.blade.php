<!--Start Section subscribe-->
<section class="subscribe text-center ">
  <div class="container">

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

        <form class="form-inline wow fadeInUp subscribe_form"  method="post" action="{{ url('subscribe/subscribe') }}" data-wow-delay="2s">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <input class="form-control input-lg" name="email" type="text" placeholder="{{ trans('crevisoft::master.email') }}" required>
          <button class="btn btn-default  hvr-bounce-to-left btn-lg">{{ trans('crevisoft::master.subscribe') }}</button>
        </form>

      </div>
    </div>
  </div>
</section>
@include('crevisoft::assets.subscribe-ajax-handler')
<!--End Section subscribe-->