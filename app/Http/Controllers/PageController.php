<?php

namespace App\Http\Controllers;

use App\Services\PageReceiver;

class PageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show(?string $slug = null)
    {
        return (new PageReceiver($slug))->handle();
    }
}
