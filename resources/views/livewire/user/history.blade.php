<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="row">
        @foreach ($user->qr as $item)
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="block">
                            <div class="block-content p-0">
                                <div class="options-container fx-item-zoom-in fx-overlay-slide-left">
                                    <img class="img-fluid options-item" src="{{$item->qr_image}}" alt="">
                                    <div class="options-overlay bg-black-op">
                                        <div class="options-overlay-content">
                                            <h3 class="h4 text-white mb-5">Qr Image</h3>
                                            <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="javascript:void(0)">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>
                                            <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                                <i class="fa fa-times"></i> Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="block" style="min-height: 365px;">
                            <div class="block-content">
                                <div class="content-heading">
                                    <span class="badge badge-primary">{{$item->type}}</span>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        @if ($item->type == "Text")
                                            <h4 class="font-w400">Text: <small class="ml-2">{{$item->data['text']}}</small></h4>
                                        @endif
                                        @if ($item->type == "Link")
                                            <h4 class="font-w400">Link: <small class="ml-2">{{$item->data['link']}}</small></h4>
                                            <h4 class="font-w400">Type: <small class="ml-2">{{$item->data['link_type']}}</small></h4>
                                            @if ($item->data['link_type'] == "Dynamic")
                                                <button class="btn btn-primary">Edit</button>
                                            @endif

                                        @endif
                                        @if ($item->type == "Email")
                                            <h4 class="font-w400">Subject: <small class="ml-2">{{$item->data['subject']}}</small></h4>
                                            <h4 class="font-w400">Email: <small class="ml-2">{{$item->data['email']}}</small></h4>
                                            <h4 class="font-w400">Body: <small class="ml-2">{{$item->data['body']}}</small></h4>

                                        @endif
                                        @if ($item->type == "Contact No")
                                            <h4 class="font-w400">Body: <small class="ml-2">{{$item->data['contact_no']}}</small></h4>
                                            <h4 class="font-w400">Message: <small class="ml-2">{{$item->data['message']}}</small></h4>
                                        @endif
                                        @if ($item->type == "Location")
                                            <h4 class="font-w400">Location: <small class="ml-2">{{$item->data['longitude']}}, {{$item->data['latitude']}}</small></h4>
                                        @endif
                                        @if ($item->type == "Wifi")
                                            <h4>{{$item->data['a']}}</h4>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
