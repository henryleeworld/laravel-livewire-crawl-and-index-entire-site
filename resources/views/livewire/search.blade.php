<div>
    <div class="flex items-center mb-8" id="query">
        <input class="border border-grey-500 bg-white text-gray-900 appearance-none w-full rounded-md py-3 px-4 focus:outline-none" placeholder="{{ __('Search') }}..." type="text" wire:model.debounce.ls="query">
    </div>
    @if($hits?->items())
        <h2 class="text-2xl font-semibold mb-4">{{ __('Results for') . ' ' . "$query" }}<h2>
        <div>
            <ul>
                @foreach($hits as $hit)
                    <li wire:key="{{ $hit->id }}" class="mb-6 space-y-1">
                        <a href="{{ $hit->url }}">
                            <div class="text text-gray-900">{{ $hit->url }}</div>
                            <div class="text-lg hover:underline text-blue-600">{{ $hit->title() }}</div>
                            <div class="text-gray-800">{!! $hit->highlightedSnippet() !!}</div>
                        </a>
                    </li>
                @endforeach
            </ul>
            {{ $hits->links() }}
            @if($query !== '' && !count($hits->items()))
                <div>
                    {{ __('No results found ') }}
                </div>
            @endif
        </div>
    @endif
</div>
