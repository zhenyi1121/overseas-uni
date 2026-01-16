<x-layout>
    <div>
        {{-- section banner area --}}
        <div class="banner-area countries-banner">
            <h1>Country</h1>
        </div>

        {{-- Content area --}}
        <div class="content-area m-5">
            {{-- Filter section --}}
            <div class="filter-section">
                <strong>Filter By Letter:</strong>
                @foreach (range('A', 'Z') as $letter)
                    <a href="#" class="h5 alphabet-link flex-fill text-start px-1 py-1" data-letter="{{ $letter }}">
                        {{ $letter }}
                    </a>
                @endforeach
            </div>
            
        </div>
    </div>
</x-layout>