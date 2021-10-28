<?php

namespace App\Http\Livewire;

use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\SiteSearch\Search as SiteSearch;

class Search extends Component
{
    use WithPagination;

    public $query = '';

    public function render()
    {
        $hits = $this->query != '' ? $this->getSearchResults() : null;
        return view('livewire.search', [
            'hits' => $hits
        ]);
    }

    public function updatingQuery()
    {
        $this->resetPage();
    }

    protected function getSearchResults(): Paginator
    {
        return SiteSearch::onIndex('stitcher')->query($this->query)->paginate();
    }
}
