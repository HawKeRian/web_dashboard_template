<?php

namespace App\Livewire;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridColumns;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class archiveTable extends PowerGridComponent
{
    public $raw_data;
    public $brand_list = [];
    public $category_list;
    public $product_name = "";
    public $selected_brand;
    public $selected_category;
    public $filter_data = [];



    public function datasource(): ?Collection{
        $this->raw_data = json_decode(Http::get('https://dummyjson.com/products'), true)["products"];
        $this->category_list = collect($this->raw_data)->pluck('category')->unique()->toArray();
        $this->category_list = array_values($this->category_list);

        if ($this->filter_data == []) {
            return collect($this->raw_data);
        }else{
            return collect($this->filter_data);
        }

    }

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showToggleColumns()->includeViewOnTop('components.datatable.archive-header-top'),                                                                                                                                                                                                                                                                                                                                                                                         
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
            ->addColumn('brand')
            ->addColumn('category')
            ->addColumn('price')
            ->addColumn('datetime', function ($entry) {
                return Carbon::parse(now())->format('d/m/Y H:i:s');
            });
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->hidden(),

            Column::make('Product Name', 'title')
                ->searchable()
                ->sortable(),

            Column::make('Brand', 'brand')
                ->searchable()
                ->sortable(),

            Column::make('Category', 'category')
                ->searchable()
                ->sortable(),

            Column::make('Price', 'price')
                ->searchable()
                ->sortable(),

            Column::make('Datetime', 'datetime'),

            Column::action('Action')
        ];
    }


    // Initial Brand Option
    public function setBrand(){
        $this->brand_list = collect($this->raw_data)->where('category',$this->selected_category)->pluck('brand')->unique()->toArray();
        $this->brand_list = array_values($this->brand_list);

        // $this->dispatch('pg:eventRefresh-default');
        // $this->dispatch('refreshTable', []);
    }


    // Searching Log/Archive
    public function searching(){
        if (trim($this->selected_brand) == "" || trim($this->selected_brand) == null ||
            trim($this->selected_category) == "" || trim($this->selected_category) == null) {
                if ($this->product_name == "" || $this->product_name == null) {
                    $this->filter_data = [];
                    return;
                }else{
                    // Searching with product_name only
                    $this->filter_data = collect($this->raw_data)->filter(function($items){
                        return str_contains(strtolower($items["title"]), strtolower($this->product_name));
                    });
                }
        }else{
            if ($this->product_name == "" || $this->product_name == null) {
                // Searching with selected_brand and category only
                $this->filter_data = collect($this->raw_data)->filter(function($items){
                    return $items["brand"] === $this->selected_brand && $items["category"] === $this->selected_category;
                });

            }else{
                // Searching with all of them
                $this->filter_data = collect($this->raw_data)->filter(function($items){
                    return $items["brand"] === $this->selected_brand &&
                            $items["category"] === $this->selected_category &&
                            str_contains(strtolower($items["title"]), strtolower($this->product_name));
                });
            }
        }
    }

    // Reset Searching
    public function resetSearch(){
        $this->product_name = "";
        $this->selected_brand = null;
        $this->selected_category = null;
        $this->filter_data = [];
    }
}
