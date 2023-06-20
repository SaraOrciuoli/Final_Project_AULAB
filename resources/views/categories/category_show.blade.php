<x-layout>

    <div class="container-fluid bg-annunci">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-11 col-md-8 col-lg-5 text-center text-white">
                <h1>{{ __('ui.esplora le categorie') }} {{ $category->name }}</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dignissimos eaque earum aliquam quos?
                    Facilis officia est ad itaque dolore, quos, aut dolores pariatur non ducimus doloremque! Ullam, sit
                    iure.</p>
            </div>
        </div>
    </div>

    <div class="bg-acc">
        <div class="container">
            <div class="row animation-fade h-100 p-5 justify-content-center">
                @forelse ($category->announcements as $announcement)
                    <div class="col-11 col-md-6 col-lg-4 opacity-0 card-id my-5">
                        <div
                            class="card-announcement d-flex justify-content-evenly align-items-center position-relative  shadow border-0 p-5">
                            <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(400, 300): 'https://picsum.photos/200' }}"
                                class="image-card-announcement" alt="Image Announcement">
                            <div class="card-body text-center">
                                <h5 class="card-title targetCard">{{ $announcement->title }}</h5>
                                <p class="card-title">{{ $announcement->description }}</p>
                                <p class="card-subtitle">{{ $announcement->price }}€</p>
                                <p class="card-subtitle">{{ __('ui.pubblicato il') }}:
                                    {{ $announcement->created_at->format('d/m/Y') }}</p>
                                <div class="d-flex justify-content-around m-2">
                                    <a href="{{ route('announcement_show', compact('announcement')) }}"
                                        class="button learn-more mt-3">
                                        <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                        </span>
                                        <span class="button-text">{{ __('ui.dettagli') }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-8 bg-sec shadow rounded my-5">
                        <p>Non sono presenti annunci per questa categoria</p>
                        <p>Publicane uno: <a href="{{ route('create_announcement') }}" class="btn btn-success">Nuovo
                                annuncio</a></p>
                    </div>
                @endforelse
            </div>

        </div>
    </div>
    </div>
</x-layout>
