<div class="col-12 col-md-6 float-end d-flex align-items-center justify-content-center position-relative p-md-5">
    <div class="input-box">
    <h4 class="title-form text-lightDark mt-5 mt-md-0">{{ __('ui.contattaci') }}</h4>
    <form wire:submit.prevent="send">
        @csrf

        <div class="box-form my-5">
            <input type="text" class="form-control form-control-custom input-custom input-form @error('user') is-invalid @enderror" id="user" wire:model.debounce="user">
            @error('user')
                <p>{{ $message }}</p>
            @enderror
            <label for="user" class="form-label">{{ __('ui.nome utente') }}</label>
        </div>

        <div class="box-form">
            <input type="email" class="form-control form-control-custom input-custom @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" wire:model.debounce="email">
            @error('email')
                <p>{{ $message }}</p>
            @enderror

            <label for="email" class="form-label">{{ __('ui.email') }}</label>
        </div>


        <div class="box-form my-5">
            <textarea class="form-control form-control-custom input-custom @error('body') is-invalid @enderror" name="body" id="" cols="30" rows="10" wire:model.debounce="body"></textarea>
            @error('body')
                <p>{{ $message }}</p>
            @enderror
            <label for="body" class="form-label">{{ __('ui.scrivi un messaggio') }}</label>
        </div>
        <div class="my-3">
            <button type="submit" class="btn btn-card-announcement">{{ __('ui.invia') }}</button>
        </div>
    </form>
</div>
