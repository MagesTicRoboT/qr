<?php

namespace App\Http\Livewire;

use App\Models\Qr;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrForm extends Component
{
    public $category = "Text";
    public $categories = ['Text', 'Link', 'Email', 'Contact No', 'Location', 'Wifi'];
    public $image_name;


    public $text;

    public $link;
    public $link_type = "Static";

    public $subject;
    public $email;
    public $body;

    public $latitude;
    public $longitude;

    public $contact_no;
    public $message;


    public function render()
    {
        return view('livewire.qr-form');
    }
    public function selected_category($category)
    {
        $this->category = $category;
    }

    public function submit_text()
    {
        $data = $this->validate([
            'text' => ['required', 'string', 'min:1', 'max:255'],
        ]);
        $this->save_data($data);
    }
    public function submit_link()
    {
        $data = $this->validate([
            'link' => ['required'],
            'link_type' => ['required'],
        ]);
        $this->save_data($data);

        // if($this->link_type == "Static"){
        //     $this->image_name = time().'.png';
        //     $this->create_qr_code($this->link);
        // }
        // else{
        //     $this->image_name = time().'.png';
        //     $data['user_id'] = auth()->user()->id;
        //     $data['slug'] = time();
        //     $data['dynamic'] = true;
        //     $data['qr_image'] = $this->image_name;

        //     $qr = Qr::create($data);
        //     $this->create_qr_code(route('page.link', $qr));
        //     $this->emit_function();

        // }
    }
    public function submit_email(){
        $data = $this->validate([
            'subject' => ['required'],
            'email' => ['required'],
            'body' => ['required'],
        ]);
        $this->save_data($data);
    }
    public function submit_contact(){
        $data = $this->validate([
            'contact_no' => ['required'],
            'message' => ['required'],
        ]);
        $this->save_data($data);
    }
    public function submit_location(){
        $data = $this->validate([
            'longitude' => ['required'],
            'latitude' => ['required'],
        ]);
        $this->save_data($data);
    }
    public function submit_wifi(){
        $data = $this->validate([
            'encryption' => ['required'],
            'ssid' => ['required'],
            'password' => ['required'],
            'hidden' => ['required'],

        ]);
        $this->save_data($data);

    }
    public function save_data($data)
    {
        $this->image_name = time().'.png';
        $input = [
            'user_id' => auth()->user()->id,
            'slug' => time(),
            'type' => $this->category,
            'data' => $data,
            'qr_image' => $this->image_name
        ];

        $qr = Qr::create($input);

        if($qr->type == "Text"){
            $file = QrCode::size(500)->format('png')->generate($this->text);
            Storage::disk('public')->put('qr/'.$this->image_name, $file);
        }
        elseif($qr->type == "Link"){
            if($this->link_type == "Static"){
                $file = QrCode::size(500)->format('png')->generate($this->link);
                Storage::disk('public')->put('qr/'.$this->image_name, $file);
            }
            else{
                $file = QrCode::size(500)->format('png')->generate(route('page.link', $qr));
                Storage::disk('public')->put('qr/'.$this->image_name, $file);
            }
        }
        elseif($qr->type == "Email"){
            $file = QrCode::size(500)->format('png')->email($this->email, $this->subject, $this->body);
            Storage::disk('public')->put('qr/'.$this->image_name, $file);
        }
        elseif($qr->type == "Contact No"){
            $file = QrCode::size(500)->format('png')->phoneNumber($this->contact_no, $this->message);
            Storage::disk('public')->put('qr/'.$this->image_name, $file);
        }
        elseif($qr->type == "Location"){
            $file = QrCode::size(500)->format('png')->geo($this->longitude, $this->latitude);            
            Storage::disk('public')->put('qr/'.$this->image_name, $file);
        }
        elseif($qr->type == "Wifi"){
            $file = QrCode::size(500)->format('png')->size(500)->format('png')->generate($this->text);
            Storage::disk('public')->put('qr/'.$this->image_name, $file);
        }

        $this->emit_function();
    }
    public function emit_function()
    {
        if(Storage::disk('public')->exists('qr/'.$this->image_name)){
            $this->emit('EnableDownload');
            $this->emit('QrImage', $this->image_name);
        }
    }
}
