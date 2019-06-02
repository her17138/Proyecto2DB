@extends('master')

@section('body')

<h1 style="margin-right: 2%;">Simulación de datos</h1>
<input type="date" id='fecha_inicial'>
<input type="date" id='fecha_final' style="margin: 5% 5%;">
<br>
<button class='innerLink' style="margin-right: 5%;height: 40px; background-color: #121921; color:#F0CD2F; padding-bottom: 2%; padding-right: 18.3%; padding-left: 1.5%; padding-top: 1.3%; padding-bottom:2.4%; width:100px; top:30%; down:30%; left:50%;right:50%; font-family:Nunito; font-weight: normal; font-size: 30px;" id='trigger_link'>Simular</button>
<br>  

@endsection