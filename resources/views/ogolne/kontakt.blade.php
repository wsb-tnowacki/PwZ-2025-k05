@extends('layout.layout')
@section('podtytul', 'Strona kontaktowa')
@section('tresc')
    <div>
        Treść strony kontaktowej 
        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae velit repellat voluptatibus, vel aliquid eveniet exercitationem quod? Voluptas, eaque id molestiae itaque, est, exercitationem culpa voluptatum expedita voluptate impedit ipsa?</div>

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