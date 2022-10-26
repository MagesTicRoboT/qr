<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Qr extends Component
{
    public $enable_download = false;
    public $image;
    public $image_name;

    protected $listeners = [
        'EnableDownload' => 'enable_download',
        'QrImage' => 'image',
    ];

    public function render()
    {
        return view('livewire.qr');
    }
    public function enable_download()
    {
        $this->enable_download = true;
    }
    public function image($image_name)
    {
        $this->image_name = $image_name;
        $this->image = asset('storage/qr/'.$image_name);
    }
    public function download_image()
    {
        if(Storage::disk('public')->exists('qr/'.$this->image_name)){
            return Storage::disk('public')->download('qr/'.$this->image_name);
        }
    }
}
