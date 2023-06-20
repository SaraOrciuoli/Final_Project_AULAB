<x-layout>

    <div class="container-fluid bg-details">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-md-6 text-center text-white">
                <h1>{{ __('ui.annuncio') . ' ' . $announcement->title }}</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dignissimos eaque earum aliquam quos?
                    Facilis officia est ad itaque dolore, quos, aut dolores pariatur non ducimus doloremque! Ullam, sit
                    iure.</p>
            </div>
        </div>
    </div>
    
    <div class="bg-acc">
        <div class="container p-4">
            <div class="row row-form-detail bg-main animation-fade justify-content-center align-items-center h-100 py-5">
                <div class="col-12 col-md-5 col-lg-7">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($announcement->images as $image)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ $image->getUrl(400, 300) }}" alt="img">
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                            <i class="fa-solid fa-chevron-left fa-2xl text-acc" aria-hidden="true"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                            <i class="fa-solid fa-chevron-right fa-2xl text-acc" aria-hidden="true"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                
                    <div class="col-12 col-md-5 col-lg-5">
                        <div class="pb-0 pb-md-0 pb-lg-5">
                            <h5 class="card-title my-3 my-md-0">Nome: {{ $announcement->title }}</h5>
                            <p class="card-title mt-0 mt-md-3">Descrizione: {{ $announcement->description }}</p>
                            <p class="card-subtitle my-3">Prezzo: {{ $announcement->price }}€</p>
                            <a href="{{ route('category_show', ['category' => $announcement->category]) }}"
                                class="btn btn-card-category">{{ __('ui.categoria') }}: {{ $announcement->category->name }}</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-layout>
