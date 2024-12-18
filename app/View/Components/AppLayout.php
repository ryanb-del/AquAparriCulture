<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
use Illuminate\View\View;


class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {



        // this check the role of the user and returns the appropriate layout for its blade
        if (Auth::user()->roles[0]->name == "admin")
        {
            return view('layouts.Admin.app');
        }


    }
}
