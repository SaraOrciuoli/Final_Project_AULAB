<x-layout>

    <div class="container-fluid p-5 bg-gradient bg-success shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">
                    {{$announcement_to_check ? 'Annuncio da rivisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>

    @if($announcement_to_check)
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
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
                    <form method="POST" action="{{route('revisor_accept_announcement', ['announcement' => $announcement_to_check])}}">
                        @csrf
                        @method('patch')

                        <button type="submit" class="btn btn-success shadow">Accetta Annuncio</button>
                    </form>

                    <form method="POST" action="{{route('revisor_reject_announcement', ['announcement' => $announcement_to_check])}}" class="mx-4">
                        @csrf
                        @method('patch')

                        <button type="submit" class="btn btn-danger shadow">Rifiuta Annuncio</button>
                    </form>
                </div>
            </div>
        </div>
    @endif

</x-layout>