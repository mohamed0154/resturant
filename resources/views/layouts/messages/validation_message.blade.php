@if ($errors->any())
    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 border border-red-400 rounded-lg" role="alert">
        <ul class="list-disc list-inside space-y-1">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
