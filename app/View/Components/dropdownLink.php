<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dropdownLink extends Component {

    public $icon;
    public $link;

    /**
     * Create a new component instance.
     */
    public function __construct($icon = '', $link = '') {
        $this->icon = $icon;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.dropdown-link');
    }
}
