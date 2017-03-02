<ul class="nav nav-pills {{ isset($stacked) ? 'nav-stacked' : '' }}">
    @foreach($items as $item)
        <li role="presentation" class="{{ $item->active ? 'active' : '' }}"><a href="{{ $item->url }}">{{ $item->name }}</a></li>
    @endforeach
</ul>