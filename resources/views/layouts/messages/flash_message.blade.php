@if (session('success'))
    <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-800 border border-green-300 shadow">
        {{ session('success') }}
    </div>
@elseif (session('failed'))
    <div class="mb-4 p-4 rounded-lg bg-red-100 text-red-800 border border-red-300 shadow">
        {{ session('failed') }}
    </div>
@endif
