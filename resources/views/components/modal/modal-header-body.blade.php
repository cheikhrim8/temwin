
    @if(isset($title))
        <div class="modal-header">
            <h4 class="modal-title">{{ $title }}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        </div>
    @endif
    <div class="modal-body">
        {{ $slot }}
    </div>






