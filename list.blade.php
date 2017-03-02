<ul class="list-group">
    @foreach($items as $item)
        <li class="list-group-item">
            @if($item->badge)
                @component('bootstrap.badge')
                    {{ $item->badge }}
                @endcomponent
            @endif
            {{ $item->name }}
        </li>
    @endforeach
</ul>