@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Cita')
@section('content')


<section style="padding-top: 150px">
	<div style="height: 1300px; min-width: 320px" id="calendry"></div>
</section>

@endsection

@section('scripts')
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>

<script type="text/javascript">
	calendry=Calendly.initInlineWidget ({ 
		url: 'https://calendly.com/iesa', 
		parentElement: document.getElementById ('calendry'), 
        utm: { 
            utmCampaign: "{{$utm['utm_source']}}", 
            utmSource: "{{$utm['utm_campaign']}}", 
            utmMedium: "{{$utm['utm_anuncio_id']}}", 
        },
	});
	console.log(calendry)
</script>
@endsection



