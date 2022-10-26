<div class="col-4">
    <div class="block block-themed block-rounded" wire:loading.class="block-mode-loading">
        <div class="block-content p-4">
            <div class="row">
                <div class="col-12 text-center">
                    @if ($image)
                        <img src="{{$image}}" class="img-thumbnail mt-2 opacity-25" width="200px" height="200px" alt="Qr Code Image">
                    @else
                        <img src="{{ asset('storage/qr/qr.png') }}" class="img-thumbnail mt-2 opacity-25" width="200px" height="200px" alt="Qr Code Image">
                    @endif
                    @if ($enable_download)
                        <div class="form-group mt-3">
                            <button class="btn btn-lg btn-rounded btn-outline-primary" data-toggle="click-ripple" wire:click="download_image">
                                <i class="fa fa-download mr-5"></i>
                                Download
                            </button>
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
