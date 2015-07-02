<div class="col-lg-2 col-md-4  col-sm-4 col-xs-6   pull-right">
  <h2>{{ trans('crevisoft::master.Projects') }}</h2>
  <ul class="list-unstyled three-columns">

     @foreach($menuItems as $menuItem)
       @if($menuItem->parent_id == 0)
        @include('crevisoft::templates.menus.footer_projects_menu.footer_projects_menu_items', ['menuItem' => $menuItem])
       @endif
     @endforeach
     
  </ul>
</div>