@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

@foreach($quarters as $quarter)
<br>DB::table('buildings')->insert([
<br>'building_name' => 'guild of {{$quarter->cities->place_name}}',
<br>'building_type' => '256',
<br>'place' => '{{$quarter->place}}',
<br>'quarter' => '{{$quarter->quarter_id}}',
<br>'region' => '{{$quarter->region}}'
<br>]);
@endforeach

@foreach($buildings as $building)
    @if($building->building_name =="monastery")
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'sahn',
    <br>'room_category' => 'garden',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'dormitory',
    <br>'room_category' => 'bedroom',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'refectory',
    <br>'room_category' => 'banquet hall',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'calefactory',
    <br>'room_category' => 'warming room',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'undercroft',
    <br>'room_category' => 'storage',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'hospitium',
    <br>'room_category' => 'guest hall',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'infirmary',
    <br>'room_category' => 'health',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'muniment',
    <br>'room_category' => 'muniment',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    @elseif($building->building_name =="tariq")
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'sahn',
    <br>'room_category' => 'garden',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'dormitory',
    <br>'room_category' => 'bedroom',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'refectory',
    <br>'room_category' => 'banquet hall',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'granary',
    <br>'room_category' => 'storage',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'majlis',
    <br>'room_category' => 'guest hall',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'infirmary',
    <br>'room_category' => 'health',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'muniment',
    <br>'room_category' => 'muniment',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    @elseif($building->building_name =="chapterhouse")
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'chapterhouse',
    <br>'room_category' => 'bedroom',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'refectory',
    <br>'room_category' => 'banquet hall',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'muniment',
    <br>'room_category' => 'muniment',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    @elseif($building->building_name =="guild")
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'guild hall',
    <br>'room_category' => 'audience hall',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'warehouse',
    <br>'room_category' => 'storage',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    <br>DB::table('rooms')->insert([
    <br>'room_name' => 'muniment',
    <br>'room_category' => 'muniment',
    <br>'building' => '{{$building->building_id}}'
    <br>]);
    @endif
@endforeach

@endsection