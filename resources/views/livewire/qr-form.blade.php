<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="row">
        @livewire('qr')
        <div class="col-8">
            <div class="block block-themed block-rounded">
                <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                    @foreach ($categories as $item)
                        <li class="nav-item">
                            <a class="nav-link {{$item == $category ? 'active' : ''}}" href="#text" wire:click="selected_category('{{$item}}')">{{$item}}</a>
                        </li>
                    @endforeach
                    <li wire:loading class="nav-item ml-auto">
                        <a class="nav-link" href="#">
                            <i class="fa fa-spin fa-cog text-primary"></i>
                        </a>
                    </li>
                </ul>

                <div class="block-content tab-content overflow-hidden">
                    <div class="tab-pane fade fade-left {{$category == "Text" ? 'show active' : ''}}" id="text" role="tabpanel">
                        <form wire:submit.prevent="submit_text">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" wire:model="text" rows="10" placeholder="Enter Your Text" wire:model="text" required></textarea>
                                        @error('text')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 text-center mb-3">
                                    <button class="btn btn-lg btn-rounded btn-outline-primary" type="submit" data-toggle="click-ripple">
                                        Submit Your Request
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade fade-left {{$category == "Link" ? 'show active' : ''}}" id="link" role="tabpanel">
                        <form wire:submit.prevent="submit_link">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" wire:model="link" rows="10" placeholder="Paste Your Url" required></textarea>
                                        @error('link')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="from-group">
                                        <div class="custom-control custom-radio custom-control-inline mb-5">
                                            <input class="custom-control-input" type="radio" name="example-inline-radios" id="example-inline-radio1" wire:model="link_type" value="Static">
                                            <label class="custom-control-label" for="example-inline-radio1">Static</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline mb-5">
                                            <input class="custom-control-input" type="radio" name="example-inline-radios" id="example-inline-radio2" wire:model="link_type" value="Dynamic">
                                            <label class="custom-control-label" for="example-inline-radio2">Dynamic</label>
                                        </div>
                                        @error('link_type')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 text-center mb-3">
                                    <button class="btn btn-lg btn-rounded btn-outline-primary" type="submit" data-toggle="click-ripple">
                                        <i class="si si-check"></i> Submit Your Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade fade-left {{$category == "Email" ? 'show active' : ''}}" id="email" role="tabpanel">
                        <form wire:submit.prevent="submit_email">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" wire:model="subject" class="form-control" placeholder="Type Subject">
                                        @error('subject')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" wire:model="email" class="form-control" placeholder="Type Email">
                                        @error('email')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="body">Body</label>
                                        <textarea class="form-control" wire:model="body" rows="6" placeholder="Type Your Message" required></textarea>
                                        @error('body')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-12 text-center mb-3">
                                    <button class="btn btn-lg btn-rounded btn-outline-primary" type="submit" data-toggle="click-ripple">
                                        <i class="si si-check"></i> Submit Your Request</button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade fade-left {{$category == "Contact No" ? 'show active' : ''}}" id="contact_no" role="tabpanel">
                        <form wire:submit.prevent="submit_contact">
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="Contact">Contact No</label>
                                        <input type="text" wire:model="contact_no" class="form-control" placeholder="Enter Your Contact No">
                                        @error('contact_no')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" wire:model="message" rows="6" placeholder="Type Your Message" required></textarea>
                                        @error('message')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-12 text-center mb-3">
                                    <button class="btn btn-lg btn-rounded btn-outline-primary" type="submit" data-toggle="click-ripple">
                                        <i class="si si-check"></i> Submit Your Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade fade-left {{$category == "Location" ? 'show active' : ''}}" id="location" role="tabpanel">
                        <form wire:submit.prevent="submit_location">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Longitude</label>
                                        <input type="text" wire:model="longitude" class="form-control" placeholder="longitude">
                                        @error('longitude')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Latitude</label>
                                        <input type="text" wire:model="latitude" class="form-control" placeholder="latitude">
                                        @error('latitude')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 text-center mb-3">
                                    <button class="btn btn-lg btn-rounded btn-outline-primary" type="submit" data-toggle="click-ripple" wire:click="">
                                        <i class="si si-check"></i> Submit Your Request</button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade fade-left {{$category == "Wifi" ? 'show active' : ''}}" id="wifi" role="tabpanel">
                        <form wire:submit.prevent="submit_wifi">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Encryption</label>
                                        <input type="text" name="encryption" class="form-control">
                                        @error('text')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">SSID</label>
                                        <input type="text" name="ssid" class="form-control">
                                        @error('text')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">password</label>
                                        <input type="password" name="password" class="form-control">
                                        @error('text')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="hidden">Hidden</label>
                                        <select name="hidden" class="form-control">
                                            <option value="false">false</option>
                                            <option value="true">true</option>
                                        </select>
                                        @error('text')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 text-center mb-3">
                                    <button class="btn btn-lg btn-rounded btn-outline-primary" type="submit" data-toggle="click-ripple" wire:click="">
                                        <i class="si si-check"></i> Submit Your Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="block">
                <div class="block-content">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="form-group">
                                <div class="btn-group mx-1 btn-group-toggle">
                                    @foreach ($categories as $item)
                                        <label class="btn btn-outline-primary mx-1 {{$item == $category ? 'active focus' : ''}}" data-toggle="click-ripple">
                                            <input type="radio" name="options"
                                                autocomplete="off"  value="{{$item}}" wire:click="selected_category('{{$item}}')"> {{$item}}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-12">

                            <form>
                                <div class="row">
                                    <div class="col-12">

                                        <div class="row">
                                            @if ($category == "Text")
                                                <form wire:submit.prevent="submit">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="text" rows="10" placeholder="Enter Your Text" wire:model="text" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center mb-3">
                                                        <button class="btn btn-lg btn-rounded btn-outline-primary" type="button" data-toggle="click-ripple" wire:click="submit_text">
                                                            <i class="si si-check"></i> Submit Your Request</button>
                                                    </div>
                                                </form>
                                            @endif
                                            @if ($category == "Link")
                                                <form wire:submit.prevent="submit">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="link" rows="10" placeholder="Paste Your Url" required></textarea>
                                                        </div>

                                                    </div>
                                                    <div class="col-12">
                                                        <div class="from-group">
                                                            <div class="custom-control custom-radio custom-control-inline mb-5">
                                                                <input class="custom-control-input" type="radio" name="example-inline-radios" id="example-inline-radio1" value="option1" checked>
                                                                <label class="custom-control-label" for="example-inline-radio1">Static</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline mb-5">
                                                                <input class="custom-control-input" type="radio" name="example-inline-radios" id="example-inline-radio2" value="option2">
                                                                <label class="custom-control-label" for="example-inline-radio2">Dynamic</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center mb-3">
                                                        <button class="btn btn-lg btn-rounded btn-outline-primary" type="submit" data-toggle="click-ripple" wire:click="">
                                                            <i class="si si-check"></i> Submit Your Request</button>
                                                    </div>
                                                </form>
                                            @endif
                                            @if ($category == "Email")
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="subject">Subject</label>
                                                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Type Subject">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" id="email" class="form-control" placeholder="Type Email">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="message">Mesage</label>
                                                        <textarea class="form-control" name="message" rows="6" placeholder="Type Your Message" required></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    <button class="btn btn-lg btn-rounded btn-outline-primary" type="submit" data-toggle="click-ripple" wire:click="">
                                                        <i class="si si-check"></i> Submit Your Request</button>
                                                </div>
                                            @endif
                                            @if ($category == "Contact No")
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="Contact">Contact No</label>
                                                        <input type="text" name="contact_no" class="form-control" placeholder="Enter Your Contact No">
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    <button class="btn btn-lg btn-rounded btn-outline-primary" type="submit" data-toggle="click-ripple" wire:click="">
                                                        <i class="si si-check"></i> Submit Your Request</button>
                                                </div>
                                            @endif
                                            @if ($category == "Location")
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">Longitude</label>
                                                        <input type="text" name="longitude" class="form-control" placeholder="longitude">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">Latitude</label>
                                                        <input type="text" name="latitude" class="form-control" placeholder="latitude">
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    <button class="btn btn-lg btn-rounded btn-outline-primary" type="submit" data-toggle="click-ripple" wire:click="">
                                                        <i class="si si-check"></i> Submit Your Request</button>
                                                </div>
                                            @endif
                                            @if ($category == "Wifi")
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">Encryption</label>
                                                        <input type="text" name="encryption" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">SSID</label>
                                                        <input type="text" name="ssid" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">password</label>
                                                        <input type="password" name="password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="hidden">Hidden</label>
                                                        <select name="hidden" class="form-control">
                                                            <option value="false">false</option>
                                                            <option value="true">true</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    <button class="btn btn-lg btn-rounded btn-outline-primary" type="submit" data-toggle="click-ripple" wire:click="">
                                                        <i class="si si-check"></i> Submit Your Request</button>
                                                </div>

                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div> --}}
        </div>
    </div>



</div>
