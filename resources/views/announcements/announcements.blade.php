<x-layout>

    <div class="container-fluid bg-annunci">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-6 text-center text-white">
                <h1>{{__('ui.annunci')}}</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dignissimos eaque earum aliquam quos? Facilis officia est ad itaque dolore, quos, aut dolores pariatur non ducimus doloremque! Ullam, sit iure.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-acc">
        <div class="row">
            <div class="col-12 text-center p-0">
                    <ul class="d-flex justify-content-between p-0 h-100 align-items-center" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                            <li class="border-card">
                                <a class="text-white fs-5" href="{{ route('category_show', compact('category')) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-evenly">
            @forelse ($announcements as $announcement)
                <x-card_all_announcement :announcement="$announcement"/>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead">{{__('ui.non ci sono annunci per questa ricerca')}}.</p>
                    </div>
                </div>
            @endforelse
            {{$announcements->links()}}
        </div>
    </div>
</x-layout>