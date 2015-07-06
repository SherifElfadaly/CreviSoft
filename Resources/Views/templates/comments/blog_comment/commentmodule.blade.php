<!-- comments -->
<h2>{{ trans('crevisoft::master.comments') }}</h2>
<div class="comments" id="{{ $commentTemplateName }}CommentContent">
    {!! $commentTree !!}
</div>

<div class="post-comment padding-top-40">
  <h3>{{ trans('crevisoft::master.leaveComment') }}</h3>
  <div class="alert alert-danger hidden" id="{{ $commentTemplateName }}addErrormessageContainer">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
    </ul>
  </div>

  <div class="alert alert-success hidden" id="{{ $commentTemplateName }}addMessageContainer">
    <ul>
    </ul>
  </div>
  @if($unrigesteredUserCanComment === 'True' || Auth::check())
    @include('crevisoft::templates.comments.blog_comment.addcommentform', ['parent_id' => 0])
  @endif
</div>


<style type="text/css"> 
  #comment-tree
  {
    list-style: none;
  }
</style>
@include('comment::comments.assets.ajax-handlers.addcommentajaxhandler')
@include('comment::comments.assets.ajax-handlers.editcommentajaxhandler')
@include('comment::comments.assets.ajax-handlers.deletecommentajaxhandler')
@include('comment::comments.assets.ajax-handlers.paginationcommentajaxhandler')