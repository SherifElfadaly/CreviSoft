<!--Start Section project-->
<section class="project ">
  <div class="container-fluid">
    <div class="row">
      {!! \CMS::widgets()->renderWidget('Projects Header', \Lang::locale()) !!}
    </div>
    <div class="grid">
      <div class="row">
        {!! \CMS::widgets()->renderWidget('Projects', \Lang::locale()) !!}
      </div>
    </div>
  </div>
</section>
<!--End Section project-->