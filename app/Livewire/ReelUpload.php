<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Reel;
use Livewire\WithFileUploads;

class ReelUpload extends Component
{
    use WithFileUploads;

    public $video;
    public $description;

    public function save()
    {
        $user=session('user');
        $this->validate([
            'video' => 'required|file|mimes:mp4,mov,avi|max:10240',
        ]);

        $filename = now()->timestamp . '.' . $this->video->getClientOriginalExtension();

        $path = $this->video->storeAs('reels', $filename, 'public');

        Reel::create([
            'idinvite' => $user->id, // nécessite l'auth
            'video' => $path,
        ]);

        session()->flash('message', 'Reel uploadé !');

        $this->reset(['video', 'description']);
    }

    public function render()
    {
        return view('livewire.reel-upload');
    }
}
