<div>

    <h1>Crea il tuo annuncio!</h1>

    <form wire:submit.prevent='store'>
        @csrf
        @if (session('message'))
            <div class="alert alert-success"><i class="fa-solid fa-circle-check fa-lg"></i> {{session('message')}}</div>
        @endif

        <div class="mb-3">
            <label for="title" class="form-label">Titolo annuncio</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title" name="title" id="title" aria-describedby="emailHelp">
            @error('title')
                {{$message}}
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" wire:model="description"
            name="description"></textarea>
            @error('description')
                {{$message}}
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" wire:model="price" id="price">
            @error('price')
                {{$message}}
            @enderror
        </div>

        {{-- <div class="mb-3">
            <label for="ProdactImg" class="form-label">Immagine prodotto</label>
            <input type="file" class="form-control" id="ProdactImg" wire:model="img">
        </div> --}}

        <div class="mb-3">
            <label for="category">Categoria</label>
            <select wire:model.defer="category" id="category" class="form-control @error('category') is-invalid @enderror" >
                <option value="" label="Scegli la categoria"> </option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category')
                {{$message}}
            @enderror
        </div>

        <button class="btn btn-primary">Crea</button>
    </form>
</div>
