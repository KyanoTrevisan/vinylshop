@props(['disabled' => false])

<textarea
{{ $disabled ? '$disabled' : '' }}
    {!! $attributes->merge(['class' => "border-gray300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"]) !!}
>{{ $slot }}</textarea>

