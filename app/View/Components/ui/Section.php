<?php

namespace App\View\Components\ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Section extends Component
{
    public $bgImg;
    public $height;
    public $bgPosition;
    public $bgFixed;
    public function __construct(
        string $bgImg = 'default-bg.png',
        string $height = 'default-height',
        string $bgPosition = 'center',
        string $bgFixed = 'no'
    ) {
        $this->bgImg = $bgImg;
        $this->height = $height;
        $this->bgPosition = $bgPosition;
        $this->bgFixed = $bgFixed;
    }
    public function render(): View|Closure|string
    {
        return view('components.ui.section');
    }
}
