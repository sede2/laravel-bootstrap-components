<div class="alert alert-{{ $type ?? 'success' }} {{ isset($dimisable) ? 'alert-dimisable' : '' }}" role="alert">
    @if(isset($dimisable))
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    @endif
    {{ $slot }}
</div>