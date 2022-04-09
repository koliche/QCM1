@extends('layouts.app')
@section('content')
<form action="#">
    <fieldset>
        <legend>Questions Formulaires</legend>
        <ul>
            @foreach ($formulaires as $formulaire )
                <li><a href="{{ route("questions",$formulaire->id_formulaire) }}">{{ $formulaire->lib_formulaire }}</a></li>
            @endforeach
        </ul>
    </fieldset>
</form>


@endsection
