<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\GuideArticles;
use App\Models\HealthArticles;
use App\Models\KidsArticles;
use App\Models\BabyArticles;

class Kids extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
       return view('components.kids', [
           'kidsArticles'  => $kidsArticles = KidsArticles::take(6)->get(),

       ]);
    }
}
