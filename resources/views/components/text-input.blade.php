@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'px-10 border-gray-300 form-control  text-gray-600 rounded-md shadow-sm']) }}>