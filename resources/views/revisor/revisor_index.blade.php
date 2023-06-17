<x-layout>

    <div class="container-fluid p-5 bg-gradient bg-success shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">
                    {{ $announcement_to_check ? 'Annuncio da rivisionare' : 'Non ci sono annunci da revisionare' }}
                </h1>
            </div>
        </div>
    </div>

    @if ($announcement_to_check)
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                        @if ($announcement_to_check->images)
                            <div class="carousel-inner">
                                @foreach ($announcement_to_check->images as $image)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <img src="{{$image->getUrl(400,300)}}" class="img-fluid p-3 rounded"
                                            alt="img">
                                    </div>
                                @endforeach
                            </div>
                            <div>
                                <h5>Tags</h5>
                                <div class="p-2">
                                    @if ($image->labels)
                                        @foreach ($image->labels as $label)
                                            <p class="d-inline">{{$label}},</p>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div>
                                <div>
                                    <h5>Revisione immagini</h5>
                                    <p>Adulti:<span class="{{$image->adult}}"></span></p>
                                    <p>Satira:<span class="{{$image->spoof}}"></span></p>
                                    <p>Medicina:<span class="{{$image->medical}}"></span></p>
                                    <p>Violenza:<span class="{{$image->violence}}"></span></p>
                                    <p>Contento Esplicito:<span class="{{$image->racy}}"></span></p>
                                </div>
                            </div>
                        @else
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://picsum.photos/id/27/1200/200" class="img-fluid p-3 rounded"
                                        alt="img">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/id/27/1200/200" class="img-fluid p-3 rounded"
                                        alt="img">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/id/27/1200/200" class="img-fluid p-3 rounded"
                                        alt="img">
                                </div>
                            </div>
                        @endif
                        <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <h5 class="card-title">{{ $announcement_to_check->title }}</h5>
                    <p class="card-title">{{ $announcement_to_check->description }}</p>
                    <p class="card-footer">Pubblicato il: {{ $announcement_to_check->created_at->format('d/m/Y') }} -
                        Autore: {{ $announcement_to_check->user->name ?? '' }}</p>
                </div>
            </div>

            <div class="row ">
                <div class="col-12 col-md-6 d-flex">
                    <form method="POST"
                        action="{{ route('revisor_accept_announcement', ['announcement' => $announcement_to_check]) }}">
                        @csrf
                        @method('patch')

                        <button type="submit" class="btn btn-success shadow">Accetta Annuncio</button>
                    </form>

                    <form method="POST" action="{{ route('revisor_reject_announcement', ['announcement' => $announcement_to_check]) }}"
                        class="mx-4">
                        @csrf
                        @method('patch')

                        <button type="submit" class="btn btn-danger shadow">Rifiuta Annuncio</button>
                    </form>
                    <form method="POST" action="{{ route('revisor_undo_announcement', ['announcement' => $announcement_to_check]) }}"
                        class="mx-4">
                        @csrf
                        @method('patch')

                        <button type="submit" class="btn btn-danger shadow">Annulla Operazione</button>
                    </form>


                </div>
            </div>
        </div>
    @endif
<h2>Articoli Revisionati</h2>
    @foreach ($announcement_checked as $announcement)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                    @if ($announcement->images)
                        <div class="carousel-inner">
                            @foreach ($announcement->images as $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{$image->getUrl(400,300)}}" class="img-fluid p-3 rounded"
                                        alt="img">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/id/27/1200/200" class="img-fluid p-3 rounded"
                                    alt="img">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/id/27/1200/200" class="img-fluid p-3 rounded"
                                    alt="img">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/id/27/1200/200" class="img-fluid p-3 rounded"
                                    alt="img">
                            </div>
                        </div>
                    @endif
                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <h5 class="card-title">{{ $announcement->title }}</h5>
                <p class="card-title">{{ $announcement->description }}</p>
                <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }} -
                    Autore: {{ $announcement->user->name ?? '' }}</p>
                    <form method="POST" action="{{ route('revisor_undo_announcement', ['announcement' => $announcement]) }}"
                        class="mx-4">
                        @csrf
                        @method('patch')

                        <button type="submit" class="btn btn-danger shadow">Annulla Operazione</button>
                    </form>

            </div>
        </div>
    </div>
    @endforeach



</x-layout>
