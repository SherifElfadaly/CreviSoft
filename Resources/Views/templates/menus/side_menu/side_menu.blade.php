<nav id="menu" class="menu hidden-sm  hidden-xs ">
  <div class="morph-shape" data-morph-open="M300-10c0,0,295,164,295,410c0,232-295,410-295,410" data-morph-close="M300-10C300-10,5,154,5,400c0,232,295,410,295,410">
    <svg width="100%" height="100%" viewBox="0 0 600 800" preserveAspectRatio="none">
      <path fill="none" d="M300-10c0,0,0,164,0,410c0,232,0,410,0,410" />
    </svg>
  </div>
  <button class="menu__handle"><span></span>
  </button>
  <div class="menu__inner">
    <ul>
     @foreach($menuItems as $menuItem)
       @if($menuItem->parent_id == 0)
        @include('crevisoft::templates.menus.side_menu.side_menu_items', ['menuItem' => $menuItem])
       @endif
     @endforeach
    </ul>
  </div>
</nav>