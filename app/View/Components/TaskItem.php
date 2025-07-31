<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TaskItem extends Component
{

    public $contents;
    public $id;

    /**
     * Create a new component instance.
     */
    public function __construct($contents, $id)
    {
        $this->contents = $contents;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.task-item');
    }
}
