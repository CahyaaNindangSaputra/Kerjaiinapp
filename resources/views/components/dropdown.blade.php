@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'origin-top-left left-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'right':
    default:
        $alignmentClasses = 'origin-top-right right-0';
        break;
}

switch ($width) {
    case '48':
        $width = 'w-48';
        break;
}
@endphp

<div class="relative" data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open">

    </div>

    <div show="open"
            transition:enter="transition ease-out duration-200"
            transition:enter-start="transform opacity-0 scale-95"
            transition:enter-end="transform opacity-100 scale-100"
            transition:leave="transition ease-in duration-75"
            transition:leave-start="transform opacity-100 scale-100"
            transition:leave-end="transform opacity-0 scale-95"
            class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">

        </div>
    </div>
</div>
