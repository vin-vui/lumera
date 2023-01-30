@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-gray-900 placeholder:text-gray-200 w-full border-b-1 border-gray-300 bg-transparent border-t-0 border-x-0 focus:border-b-1 focus:border-orange-300 focus:ring-0 focus:border-t-0 focus:border-x-0 active:border-t-0 active:border-x-0']) !!}>
