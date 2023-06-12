<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Tutti gli annunci</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-evenly">
            @forelse ($announcements as $announcement)
                <x-card_announcement :announcement="$announcement"/>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead">Non ci sono annunci per questa ricerca.</p>
                    </div>
                </div>
            @endforelse
            {{$announcements->links()}}
        </div>
    </div>
</x-layout>