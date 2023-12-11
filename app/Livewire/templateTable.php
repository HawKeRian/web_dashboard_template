<?php

namespace App\Livewire;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
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
        return collect([
            ['id' => 1, 'name' => 'Name 1', 'price' => 1.58, 'created_at' => now(),],
            ['id' => 2, 'name' => 'Name 2', 'price' => 1.68, 'created_at' => now(),],
            ['id' => 3, 'name' => 'Name 3', 'price' => 1.78, 'created_at' => now(),],
            ['id' => 4, 'name' => 'Name 4', 'price' => 1.88, 'created_at' => now(),],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(),],
        ]);
    }

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            // Exportable::make('export')
            //     ->striped()
            //     ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput()->showToggleColumns(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function addColumns(): PowerGridColumns
    {
        return PowerGrid::columns()
            ->addColumn('id')
            ->addColumn('name')
            ->addColumn('price')
            ->addColumn('created_at_formatted', function ($entry) {
                return Carbon::parse($entry->created_at)->format('d/m/Y');
            });
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable()
                ->sortable(),

            Column::make('Name', 'name')
                ->searchable()
                ->sortable(),

            Column::make('Price', 'price')
                ->sortable(),

            Column::make('Created', 'created_at_formatted'),

            Column::action('Action')
        ];
    }


    public function actions($row): array
    {
        return [
            Button::add('edit-data')  
                ->slot('
                <div class="flex items-center dark:hover:bg-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 me-2">
                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                    </svg>
                    <p class="p-0 m-0">Edit</p>
                </div>
                ')
                ->class('mx-1 btn-primary')
                ->dispatch('edit_data', ['item_id' => $row["id"]]),

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
                ->dispatch('delete_data', ['item_id' => $row["id"]]),
        ];
    }
}
