<div class="w-96 mx-auto flex flex-col items-center gap-4">
    <x-icon icon="zap" size="36" />
    <span>{{ $slot }}</span>
    @if(isset($cta))
        <div class="mt-5">
            {{ $cta }}
        </div>
    @endif
</div>
