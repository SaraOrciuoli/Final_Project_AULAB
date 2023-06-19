<div>
    <div class="container-fluid bg-create">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-6 text-center text-white">
                <h1>{{__('ui.crea annuncio')}}</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dignissimos eaque earum aliquam quos? Facilis officia est ad itaque dolore, quos, aut dolores pariatur non ducimus doloremque! Ullam, sit iure.</p>
            </div>
        </div>
    </div>
    
        <div class="container-fluid d-flex justify-content-center align-items-center p-4 bg-acc">
            <div class="row row-form-create animation-fade h-100">
    
                <div class="col-12 d-flex align-items-center justify-content-center p-md-5 bg-sec rounded-circle">
                    <div class="input-box-create">
                        
                        <form wire:submit.prevent='store'>
                            @csrf

                            @if (session('create_confirmation'))
                                <div class="alert alert-success"><i class="fa-solid fa-circle-check fa-lg"></i> {{session('create_confirmation')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Chiudi avviso"></button>
                                </div>
                            @endif
                    
                            <div class="box-form mt-4">
                                <input type="text" class="form-control form-control-custom input-custom input-form @error('title') is-invalid @enderror" wire:model="title" name="title" id="title" aria-describedby="emailHelp">
                                @error('title')
                                    {{$message}}
                                @enderror
                                <label for="title" class="form-label">{{__('ui.titolo')}}</label>
                            </div>
                    
                            <div class="box-form my-5">
                                <textarea id="description" cols="30" rows="10" class="form-control form-control-custom input-custom @error('description') is-invalid @enderror" wire:model="description"
                                name="description"></textarea>
                                @error('description')
                                    {{$message}}
                                @enderror
                                <label for="description" class="form-label">{{__('ui.descrizione')}}</label>
                            </div>
                    
                            <div class="box-form">
                                <input type="number" step="0.01" class="form-control form-control-custom input-custom @error('price') is-invalid @enderror" wire:model="price" id="price">
                                @error('price')
                                    {{$message}}
                                @enderror
                                <label for="price" class="form-label">{{__('ui.prezzo')}}</label>
                            </div>
                    
                            <div class="box-form my-5">
                                <select wire:model.defer="category" id="category" class="form-control form-control-custom input-custom @error('category') is-invalid @enderror" >
                                    <option value="" label=""> </option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" class="bg-dark text-acc">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    {{$message}}
                                @enderror
                                <label for="category">{{__('ui.categoria')}}</label>
                            </div>
                    
                            <div class="mb-5">
                                <input type="file" multiple class="form-control form-control-custom input-create shadow @error('images') is-invalid @enderror " wire:model="images" id="images" name="images" placeholder="Img">
                                @error('images')
                                    {{$message}}
                                @enderror
                    
                            </div>

                            @if (!empty($images))
                                <div class="row my-3">
                                    <div class="col-12">
                                        <p>Photo preview:</p>
                                        <div class="row border border-info rounded shadow py-4">
                                            @foreach ($images as $key => $image)
                                                <div class="col m-0">
                                                    <div class="img-preview mx-auto rounded shadow" style="background-image: url({{$image->temporaryUrl()}})"></div>
                                                    <div class="d-flex justify-content-center my-3">
                                                        <button type="button" class="btn btn-danger shadow" wire:click="removeImage({{$key}})">{{__('ui.cancella')}}</button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                    
                    
                            <button class="btn btn-card-announcement">{{__('ui.crea')}}</button>
                        </form>
                    </div>
                </div>
    
            </div>
        </div>
</div>
