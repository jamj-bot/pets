<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Vet;
use Livewire\WithPagination;

class VetsIndex extends Component
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
	   $vets = Vet::where('name', 'LIKE', '%' . $this->search . '%')
		->orWhere('email', 'LIKE', '%' . $this->search . '%')
		->orWhere('code', 'LIKE', '%' . $this->search . '%')
		->paginate(10);

        return view('livewire.admin.vets-index', compact('vets'));
    }
}
