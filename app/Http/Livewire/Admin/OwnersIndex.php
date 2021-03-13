<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Owner;
use Livewire\WithPagination;

class OwnersIndex extends Component
{
	use WithPagination;
	protected $paginationTheme = "bootstrap";
	public $search;

	public function updatingSearch()
	{
		$this->resetPage();
	}

    public function render()
    {

        $owners = Owner::where('name', 'LIKE', '%' . $this->search . '%')
            ->orWhere('code', 'LIKE', '%' . $this->search . '%')
            ->orWhere('phone', 'LIKE', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.admin.owners-index', compact('owners'));
    }
}
