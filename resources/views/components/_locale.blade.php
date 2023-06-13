<form class="d-line" action="{{route('set_language_locale',$lang)}}" method="POST">
@csrf
<button type="submit" class="btn  d-flex justify-content-end">
    <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" width="15" height="15" class=""/>
</button>

</form>