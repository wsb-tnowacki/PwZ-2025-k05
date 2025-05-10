@extends('layout.layout')
@section('tytul', 'Lista postów')
@section('podtytul', 'Lista postów')
@section('tresc')
@isset($posty)
    @if ($posty->count())
    <table class="table table-striped">
        <thead>
            <th scope="col">Lp</th>
            <th scope="col">Tytuł</th>
            <th scope="col">Autor</th>
            <th scope="col">Data powstania</th>
        </thead>
        <tbody>
            @foreach ($posty as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><a href="{{route('post.show', $post->id)}}">{{$post->tytul}}</a></td>
                    <td>{{$post->autor}}</td>
                    <td>{{date('j F Y',strtotime($post->created_at))}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <div>Nie ma żadnych postów</div>
    @endif
@else
    <div>Nie ma żadnych postów</div>
@endisset
@endsection
