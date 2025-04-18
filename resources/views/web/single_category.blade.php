<x-layout>
<h1>{{ $category ? $category['name'] : 'Default Name' }}</h1>
    <hr>
    <p>
        {{ $category ? $category['description'] : 'Default Description' }}
    </p>
</x-layout>