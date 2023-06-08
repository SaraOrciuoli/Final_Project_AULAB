<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Annuncio {{ $announcement->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
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
                <h5 class="card-title">{{ $announcement->title }}</h5>
                <p class="card-title">{{ $announcement->description }}</p>
                <p class="card-subtitle">{{ $announcement->price }}€</p>
                <a href="" class="btn btn-outline-dark my-2">Categoria:
                    {{ $announcement->category->name }}</a>
                
                <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }} -
                    Autore:{{ $announcement->user->name ?? '' }}</p>
            </div>
        </div>
    </div>

</x-layout>
