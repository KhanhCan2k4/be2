<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Layout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //WW
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = Category::all();
        return view('components.layout', ['categories' => $categories]);
    }
}
