<div {{ $attributes->merge(['class' => 'card']) }}>
    @if($heading ?? null)
        <div class="card-header bg-info">{{ $heading }}</div>
    @endif
    <div class="card-content">
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
</div>





