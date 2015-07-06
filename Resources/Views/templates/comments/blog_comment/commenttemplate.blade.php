<div class="media" id="{{ $commentTemplateName }}singleComment">
  <a href="#" class="pull-right">
    <img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt='{{ $comment->name }}' class="media-object">
  </a>
  <div class="media-body">
    <h4 class="media-heading">
      {{ $comment->comment_title }}
      <span>
       @if ($comment->edited === '1')
         Edited
         {{ $comment->updated_at->diffForHumans() }} 
       @else
         {{ $comment->created_at->diffForHumans() }}
       @endif 
        /
       @if ((Auth::check() && Auth::user()->id === $comment->user_id) || 
           (Auth::guest() && Request::cookie('ip_token') !== null && Request::cookie('ip_token') === $comment->ip_token))

           <div class="alert alert-danger hidden" id="{{ $commentTemplateName }}deleteErrormessageContainer">
             <strong>Whoops!</strong> There were some problems with your input.<br><br>
             <ul>
             </ul>
           </div>

           <a data-toggle="collapse" data-target="#{{ $comment->id }}edit">
             Edit
             <a href='{{ url("admin/comment/deletecomment/$comment->id") }}' class="{{ $commentTemplateName }}delete_comment_link">
               Delete
             </a> 
           </a>

            @else
            <a data-toggle="collapse" data-target="#{{ $comment->id }}reply">
             Reply
            </a>
        @endif

     </span>
    </h4>
    <p>
      @if($comment->status == 'accepted')
        {{ $comment->comment_content }}
      @elseif($comment->status == 'pending')
        comment is waiting for approval.
      @endif
    </p>
    <div class="collapse" id="{{ $comment->id }}edit">
     @include('crevisoft::templates.comments.blog_comment.editcommentform', ['comment' => $comment])
     </div>
     <div class="collapse" id="{{ $comment->id }}reply">
      @include('crevisoft::templates.comments.blog_comment.addcommentform', ['parent_id' => $comment->id])
    </div>
    {!! \CMS::comments()->getCommentTree($comment->replies, $commentOwner, $item, $itemId, $path, $perPage, $commentTemplateName, $comment->id) !!}
  </div>
</div>