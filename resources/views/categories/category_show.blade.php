<x-layout>

    <div class="container-fluid bg-annunci">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-11 col-md-8 col-lg-5 text-center text-white">
                <h1>{{__('ui.esplora le categorie')}} {{$category->name}}</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dignissimos eaque earum aliquam quos? Facilis officia est ad itaque dolore, quos, aut dolores pariatur non ducimus doloremque! Ullam, sit iure.</p>
            </div>
        </div>
    </div>
    

    <div class="container-fluid d-flex justify-content-center align-items-center p-4 bg-acc">
        <div class="row row-form-create animation-fade h-100">
                    @forelse ($category->announcements as $announcement)
                    <div class="col-12 col-md-3 m-2 d-flex align-items-center">
                        <div class="card">
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