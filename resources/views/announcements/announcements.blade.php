<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Tutti gli annunci</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-evenly">
            @foreach ($announcements as $announcement)
                <div class="col-12 col-md-3 m-2 bg-light my-5">
                    <div class="card">
                        <img src="https://picsum.photos/100" class="card-img-top" alt="Image Announcement">
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p class="card-title">{{ $announcement->description }}</p>
                            <p class="card-subtitle">{{ $announcement->price }}€</p>
                            <a href="" class="btn btn-outline-dark my-2">Categoria:
                                {{ $announcement->category->name }}</a>
                            <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</p>
                            <div class="d-flex justify-content-around m-2">
                                <a href="{{route('announcement_show', compact('announcement'))}}" class="btn btn-primary">Dettagli</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$announcements->links()}}
        </div>
    </div>
</x-layout>