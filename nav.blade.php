<ul class="nav nav-tabs">
    @foreach($items as $item)
        <li role="presentation" class="{{ $item->active ? 'active' : '' }}"><a href="{{ $item->url }}">{{ $item->name }}</a></li>
    @endforeach
</ul>