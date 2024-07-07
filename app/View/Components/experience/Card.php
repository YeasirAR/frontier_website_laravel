<?php

namespace App\View\Components\experience;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $reverse,
        public string $name,
        public string $position,
        public string $imgUrl,
        public object $description,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.experience.card');
    }
}
