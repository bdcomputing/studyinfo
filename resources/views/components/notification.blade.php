@if (session('success') || session('error'))
<div x-data="{ show: true }" x-show="show" x-transition
    x-init="setTimeout(() => show = false, 3000)"
    class="fixed top-5 flex gap-3 right-5 px-4 py-3 items-center rounded-lg shadow-lg text-white z-[99999999]
        {{ session('success') ? 'bg-green-500' : 'bg-red-500' }}">
    @if(session('success'))
    <i class="bi bi-check-circle text-2xl"></i>

    @else
    <i class="bi bi-exclamation-circle text-2xl"></i>
    @endif
    <p>{{ session('success') ?? session('error') }}</p>

    <button @click="show = false" class="ml-4 text-white font-bold">&times;</button>
</div>
@endif