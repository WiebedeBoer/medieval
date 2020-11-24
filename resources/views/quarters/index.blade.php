@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

@foreach($places as $place)


            <br>DB::table('quarters')->insert([
            <br>'quarter_rank' => 'centre',
            <br>'x' => '5',
            <br>'y' => '3',
            <br>'quarter_name' => 'hall of {{$place->place_name}}',
            <br>'quarter_category' => '8',
            <br>'place' => '{{$place->place_id}}',
            <br>'region' => '{{$place->region}}'
            <br>]);




@endforeach

@endsection