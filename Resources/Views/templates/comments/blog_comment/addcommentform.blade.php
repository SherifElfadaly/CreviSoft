<form method ="post" class  ="add_comment_form" action ="{{ url('admin/comment/addcomment') }}" role="form">
  <input name="_token" type="hidden" value="{{ csrf_token() }}">

  <div class="form-group">
    @if(empty($commentOwner))
      <input 
      type             ="text" 
      class            ="form-control" 
      name             ="name" 
      value            ="{{ old('name') }}" 
      placeholder      ="Add name here .." 
      >
    @else
      <input type="hidden" name="name" value="{{ $commentOwner->name }}">
    @endif
  </div>
  <div class="form-group">
    @if(empty($commentOwner))
      <input 
      type             ="email" 
      class            ="form-control" 
      name             ="email" 
      value            ="{{ old('email') }}" 
      placeholder      ="Add email here .." 
      >
    @else
      <input type="hidden" name="email" value="{{ $commentOwner->email }}">
    @endif
  </div>

  <div class="form-group">
    <input 
    type             ="text" 
    class            ="form-control" 
    name             ="comment_title" 
    value            ="{{ old('comment_title') }}" 
    placeholder      ="Add comment title here .." 
    >
  </div>
  <div class="form-group">
    <textarea 
    class            ="form-control" 
    rows             ="8" 
    name             ="comment_content" 
    value            ="{{ old('comment_content') }}" 
    placeholder      ="Add comment here .."></textarea>
  </div>


  @if( ! Auth::check())
    <input name="user_id" type="hidden" value="0">
  @else
    <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">
  @endif
  <input name="parent_id" type="hidden" value="{{ $parent_id }}">
  <input name="item_id" type="hidden" value="{{ $itemId }}">
  <input name="item_type" type="hidden" value="{{ $item }}">
  <input name="per_page" type="hidden" value="{{ $perPage }}">
  <input name="path" type="hidden" value="{{ $path }}">
  <input name="commentTemplateName" type="hidden" value='{{ $commentTemplateName }}'>

  <p>
    <button type="submit" class="btn btn-primary">{{ trans('crevisoft::master.leaveComment') }}</button>
  </p>
</form>