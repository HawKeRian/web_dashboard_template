<?php

namespace App\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class MenuDatatable extends Component
{
    use LivewireAlert;

    protected $listeners = ["add_data", "view_data", "edit_data", "delete_data"];

    // Insert Data
    public function add_data(){
        $this->alert('success', 'Insert Data', [
            'position' => 'center',
            'toast' => false,
        ]);
        // dd("Ready to Insert Data");
    }

    // View Data
    public function view_data(){
        $this->alert('info', 'View Data', [
            'position' => 'center',
            'toast' => false,
        ]);
        // dd("Ready to View Data");
    }

    // Update Data
    public function edit_data(){
        $this->alert('warning', 'Update Data', [
            'position' => 'center',
            'toast' => false,
        ]);
        // dd("Ready to Update Data");
    }

    // Delete Data
    public function delete_data(){
        $this->alert('error', 'Delete Data', [
            'position' => 'center',
            'toast' => false,
        ]);
        // dd("Ready to Delete Data");
    }

    // Swith Theme
    public function switchTheme(){
        dd("hello!");
        $this->dispatch("swicth_theme")->self();
    }

    // Render Page
    public function render(){
        return view('livewire.menu-datatable');
    }
}
