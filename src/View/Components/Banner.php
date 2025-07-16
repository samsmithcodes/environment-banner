<?php

namespace SamSmithCodes\EnvironmentBanner\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banner extends Component
{
    public string $environment;
    public string $bg_class;
    public string $bg_dark_class;
    public string $text_class;
    public string $text_dark_class;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->environment = config('environment-banner.environment');
        $this->bg_class = config('environment-banner.colors.bg');
        $this->bg_dark_class = "dark:".config('environment-banner.colors.bg_dark');
        $this->text_class = config('environment-banner.colors.text');
        $this->text_dark_class = "dark:".config('environment-banner.colors.text_dark');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('environment-banner::components.banner');
    }
}
