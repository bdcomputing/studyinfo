<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2 bg-primary hover:bg-primary-800  rounded-md font-semibold text-sm font-semibold text-white']) }}>
    {{ $slot }}
</button>