<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MenuChart extends Component
{
    public $barchart_data;

    // Mount Parameter
    public function mount(){
        $raw_data = json_decode(Http::get('https://dummyjson.com/products'), true)["products"]; // select 'title', 'price', 'rating, stock, category'
        $this->barchart_data = array_map(function($item){
            $filter["id"] = $item["id"];
            $filter["label"] = $item["title"];
            $filter["y"] = $item["price"];
            $filter["rating"] = $item["rating"];
            $filter["stock"] = $item["stock"];
            $filter["category"] = $item["category"];

            return (array) $filter;
        }, collect($raw_data)->take(20)->toArray());
    }

    // Render Page
    public function render(){
        return view('livewire.menu-chart');
    }
}
