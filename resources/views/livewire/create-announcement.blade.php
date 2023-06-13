<div class="my-5">

    <h1>Crea il tuo annuncio!</h1>

    <form wire:submit.prevent='store'>
        @csrf
        @if (session('create_confirmation'))
            <div class="alert alert-success"><i class="fa-solid fa-circle-check fa-lg"></i> {{session('create_confirmation')}}
                <button type="button" class="float-end btn-close" data-bs-dismiss="alert" aria-label="Chiudi avviso"></button>
            </div>
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

        <div class="mb-3">
            <label for="temporary_images" class="form-label">Immagine</label>
            <input type="file" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" wire:model="temporary_images" id="price" name="images" placeholder="Img">
            @error('temporary_images.*')
                {{$message}}
            @enderror
        </div>
        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>Photo preview:</p>
                    <div class="row border border-4 border-info rounded shadow py-4">
                        @foreach ($images as $key => $image)
                            <div class="col my-3">
                                <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}})"></div>
                                <button type="button" class="btn btn-danger shadow s-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif


        <button class="btn btn-card-announcement">Crea</button>
    </form>
</div>
