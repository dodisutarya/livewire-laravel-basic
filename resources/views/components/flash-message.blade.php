@if (flash()->message)
    <div class="alert d-flex alert-{{ flash()->class ?? 'success' }}" role="alert">


        @if (flash()->class === 'warning' || flash()->class === 'danger')
            <i class="bi bi-exclamation-triangle me-2"></i>
        @endif

        @if (flash()->class === 'info')
            <i class="bi bi-info-circle me-2"></i>
        @endif

        @if (!flash()->class === 'success' || flash()->class === 'success')
            <i class="bi bi-check-circle-fill me-2"></i>
        @endif


        {{ flash()->message }}
    </div>
@endif
