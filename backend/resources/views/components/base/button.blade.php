<button type="{{$type ?? 'button'}}" onclick="location.href='{{ $url ?? '' }}'"
        class="{{ $class ?? 'px-4 py-2.5' }}  flex flex-row justify-center items-center bg-gray-500 text-white rounded-lg-xl focus:outline-none transition duration-150">
    {{$icon ?? ''}}
    <p class="font-medium text-sm">{{ $slot }}</p>
</button>
