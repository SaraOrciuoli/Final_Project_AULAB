<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Presto.it</h1>
            </div>

            <div class="col-12 text-center">
                <div class="mx-5">
                    @if (session('access'))
                        <div class="alert alert-danger">{{ session('access') }}</div>
                    @endif
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row justify-content-evenly">
            @foreach ($announcements as $announcement)
            <x-card_announcement :announcement="$announcement"/>
            @endforeach
        </div>
    </div>

</x-layout>
