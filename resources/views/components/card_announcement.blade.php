<div class="col-11 col-md-6 col-lg-4 opacity-0 card-id my-5">
    <div class="card d-flex justify-content-evenly align-items-center position-relative  shadow border-0 p-5">
        <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/200'}}" class="image-card-back" alt="Image Announcement">
        <div class="card-body text-center">
            <h5 class="card-title targetCard">{{ $announcement->title }}</h5>
            <p class="card-title">{{ $announcement->description }}</p>
            <p class="card-subtitle">{{ $announcement->price }}€</p>
            <p class="card-subtitle">{{__('ui.publicato il')}}: {{ $announcement->created_at->format('d/m/Y') }}</p>
            <div class="d-flex justify-content-around m-2">
                <a href="{{ route('announcement_show', compact('announcement'))}}" class="button learn-more mt-3">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">{{__('ui.dettagli')}}</span>
                </a>
            </div>
        </div>
    </div>
</div>
