@extends('layouts.app')


@section('content')
     <h1>Les Questions:</h1>
     <form action="{{route('reponses')}}" mathod="POST">
         <ol>
             @foreach($listeQCM as $item)
                 <li>{{$item->lib_question}}</li>
                 <ul>
                     @foreach($listeReponse as $reponse)
                         @if($reponse->id_question == $item->id_question)
                             <li><input type="radio" name="{{$item->id_question}}" value="{{$reponse->correct}}">{{$reponse->lib_reponse}}</li>
                         @endif
                     @endforeach
                 </ul>
             @endforeach
         </ol>
         <input type="submit" value="Valider">
     </form>


@endsection
