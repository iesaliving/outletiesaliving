@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Cita')
@section('content')

	<section style="padding-top: 150px">
	<!-- Principio del widget integrado de Calendly -->
	<div class="calendly-inline-widget" data-url="https://calendly.com/iesa/cookingdemo" style="min-width:320px;height:830px;"></div>
	<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
	<!-- Final del widget integrado de Calendly -->
</section>

@endsection

