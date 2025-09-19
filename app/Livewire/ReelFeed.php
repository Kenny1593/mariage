<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Reel;

class ReelFeed extends Component
{
    public function render()
    {
        $reels = Reel::latest()->get();
        return view('livewire.reel-feed', ['reels' => $reels]);
    }
}
