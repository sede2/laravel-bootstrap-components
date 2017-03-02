<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="{{ $id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        {{ $slot }}
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="{{ $id }}">
        @foreach($items as $item)
            @if($item->type == 'separator')
                <li role="separator" class="divider"></li>
            @else
                <li><a href="{{ $item->url }}">{{ $item->name }}</a></li>
            @endif
        @endforeach
    </ul>
</div>