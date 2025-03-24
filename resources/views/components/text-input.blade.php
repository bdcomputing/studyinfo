@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge(['class' => ' bg-transparent border-gray-300   text-gray-600 rounded-md  w-full px-5']) }}>
