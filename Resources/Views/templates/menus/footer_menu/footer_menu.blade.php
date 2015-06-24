<div class="col-lg-2 col-md-4  col-sm-4  pull-right">
  <ul class="list-unstyled three-columns">

     @foreach($menuItems as $menuItem)
       @if($menuItem->parent_id == 0)
        @include('crevisoft::templates.menus.footer_menu.footer_menu_items', ['menuItem' => $menuItem])
       @endif
     @endforeach
     
  </ul>
</div>