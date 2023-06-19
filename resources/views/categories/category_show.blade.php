<x-layout>
    <div class="container box-container">
        <div class="row">
            <div class="col-12 text-md-center">
                <h1>{{__('ui.esplora le categorie')}} {{$category->name}}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row row-category">
            <div class="col-12 bg-acc rounded mb-5 ">
                
                <div class="row vh-100">
                    @forelse ($category->announcements as $announcement)
                    <div class="col-12 col-md-3 m-2 bg-light d-flex align-items-center h-75">
                        <div class="card conteiner-fluid">
                            <img src="https://picsum.photos/100" class="card-img-top" alt="Image Announcement">
                            <div class="card-body">
                                <h5 class="card-title">{{ $announcement->title }}</h5>
                                <p class="card-title">{{ $announcement->description }}</p>
                                <p class="card-subtitle">{{ $announcement->price }}€</p>
                                <a href="" class="btn btn-outline-dark my-2">{{__('ui.categoria')}}
                                    {{ $announcement->category->name }}</a>
                                <div class="d-flex justify-content-around m-2">
                                    <a href="{{route('announcement_show', compact('announcement'))}}" class="btn btn-primary">Dettagli</a>
                                </div>
                                <p class="card-footer">{{__('ui.pubblicato il:')}} {{$announcement->created_at->format('d/m/Y')}} - Autore:{{$announcement->user->name ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 ">
                        <p>{{__('ui.non sono presenti annunci per questa categoria')}}</p>
                        <p>Publicane uno: <a href="{{route('create_announcement')}}" class="btn btn-success">Nuovo annuncio</a></p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

</x-layout>