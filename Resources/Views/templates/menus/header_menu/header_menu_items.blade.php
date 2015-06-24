@if($menuItem->children->count() > 0)

  <li class="dropdown">
    <a href="{{ $menuItem->link }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      {{ $menuItem->title }} <span class="caret"></span>
    </a>
    @foreach($menuItem->children as $child)
      <ul class="dropdown-menu" role="menu">
        @include('crevisoft::templates.menus.header_menu.header_menu_items', ['menuItem' => $child])
      </ul>
    @endforeach
  </li>

@else

  <li>
    <a href="{{ $menuItem->link }}">{{ $menuItem->title }}</a>
  </li>

@endif