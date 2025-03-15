@extends('layout.layout')
@section('tytul', 'O nas')
@section('podtytul', 'Strona o nas')
@section('tresc')
    <div>
        Treść strony o nas 
        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae velit repellat voluptatibus, vel aliquid eveniet exercitationem quod? Voluptas, eaque id molestiae itaque, est, exercitationem culpa voluptatum expedita voluptate impedit ipsa?</div>
       {{-- $_SERVER['SERVER_SOFTWARE'] --}}
        <ol>
            @isset($zadania)
            {{--
            <?php foreach ($zadania ?? '' as $zadanie) : ?>
            <li><?= $zadanie ?></li>
            <?php endforeach; ?>
            --}}
            @foreach ($zadania as $zadanie)
                <li>{{ $zadanie }}</li>
            @endforeach                
            @endisset
        </ol>

    </div>
@endsection
