<?php

namespace App\Services;

use App\Models\Page;

class PageReceiver
{
    private string $slug;

    public function __construct(
        string $slug = null
    ) {
        $this->slug = is_null($slug) ? Page::HOME_SLUG : $slug;
    }

    /**
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function handle()
    {
        if ($this->isHomePage()) {
            $this->incrementPageVisit();

            return view('home');
        }

        if (!$this->pageExists()) {
            abort(404);
        }

        if (!$this->pageModelExists()) {
            abort(404);
        }

        $this->incrementPageVisit();

        return view($this->slug);
    }

    private function isHomePage(): bool
    {
        return $this->slug === Page::HOME_SLUG;
    }

    private function pageExists(): bool
    {
        return view()->exists($this->slug);
    }

    private function pageModelExists(): bool
    {
        return Page::query()->slug($this->slug)->exists();
    }

    private function incrementPageVisit()
    {
        $page = Page::query()->slug($this->slug)->first();

        visits($page)->increment();
    }
}