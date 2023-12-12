<?php

namespace App\Livewire;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Http;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridColumns;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class templateTable extends PowerGridComponent
{
    public function datasource(): ?Collection
    {
        $raw_data = json_decode(Http::get('https://dummyjson.com/products'), true)["products"];
        return collect($raw_data);
    }

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            // Exportable::make('export')
            //     ->striped()
            //     ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput()->showToggleColumns()->includeViewOnTop('components.datatable.header-top'),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function addColumns(): PowerGridColumns
    {
        return PowerGrid::columns()
            ->addColumn('id')
            ->addColumn('title')
            ->addColumn('price')
            ->addColumn('brand')
            ->addColumn('category')
            ->addColumn('rating')
            // ->addColumn('created_at_formatted', function ($entry) {
            //     return Carbon::parse($entry->created_at)->format('d/m/Y');
            // })
            ;
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable()
                ->sortable(),

            Column::make('Product Name', 'title')
                ->searchable()
                ->sortable(),

            Column::make('Price', 'price')
                ->searchable()
                ->sortable(),

            Column::make('Brand', 'brand')
                ->searchable()
                ->sortable(),

            Column::make('Category', 'category')
                ->searchable()
                ->sortable(),

            Column::make('Rating', 'rating')
                ->searchable()
                ->sortable(),

            // Column::make('Created', 'created_at_formatted'),

            Column::action('Action')
        ];
    }


    public function header(): array
    {
        return [
            Button::add('add-data')
                    ->render(function () {
                        // Wire:click to function inside templateTable :::: wire:click="add_data"
                        return Blade::render(<<<HTML
                            <button class=" btn-dark" wire:click="add_data"
                                    data-tooltip-target="add-data-tooltip" data-tooltip-style="light" data-tooltip-placement="top">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 w-5 h-5 text-pg-primary-500 dark:text-pg-primary-300">
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>

                            <div id="add-data-tooltip" role="tooltip" class="absolute z-10 inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm tooltip opacity-0 invisible" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(213.6px, -630.4px, 0px);" data-popper-placement="top">
                                Insert Data
                                <div class="tooltip-arrow" data-popper-arrow="" style="position: absolute; left: 0px; transform: translate3d(56px, 0px, 0px);"></div>
                            </div>
                        HTML);
                    }),
                    // ->openModal('add_data', []),
        ];
    }


    public function actions($row): array
    {
        return [
            Button::add('view-data')  
                ->slot('
                <div class="flex items-center dark:hover:bg-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 me-2">
                        <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                    </svg>
                    <p class="p-0 m-0">View</p>
                </div>
                ')
                ->class('mx-1 btn-primary')
                ->dispatch('view_data', ['product_id' => $row["id"]]),


            Button::add('edit-data')  
                ->slot('
                <div class="flex items-center dark:hover:bg-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 me-2">
                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                    </svg>
                    <p class="p-0 m-0">Edit</p>
                </div>
                ')
                ->class('mx-1 btn-warning')
                ->dispatch('edit_data', ['product_id' => $row["id"]]),

            Button::add('delete-data')  
                ->slot('
                <div class="flex items-center dark:hover:bg-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 me-2">
                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                    </svg>
                    <p class="p-0 m-0">Delete</p>
                </div>
                ')
                ->class('mx-1 btn-danger')
                ->dispatch('delete_data', ['product_id' => $row["id"]]),
        ];
    }

    // Dispatch to MenuDatatable sd
    public function add_data(){
        $this->dispatch('add_data', []);
    }
}
