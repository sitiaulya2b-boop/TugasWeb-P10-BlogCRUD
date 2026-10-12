@props(['title' => ''])

<div class="card shadow-sm mb-4">
    @if ($title)
        <div class="card-header bg-white fw-bold">
            {{ $title }}
        </div>
    @endif
    <div class="card-body">
        {{ $slot }}
    </div>
</div>