
    <!--minimap-->
    <div id="minimap" class="ce">
		<div class="parentmini">
            <div class="canvasmini">
				<canvas id="myCanvas" width="490" height="490" style="border:1px solid #d3d3d3;">Your browser does not support the HTML5 canvas tag.</canvas>
			</div>
			<div class="quartermini">
				<?xml version="1.0" standalone="no"?>
				<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
				<svg width="490" height="490" viewBox="0 0 490 490" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="map" class="quartermap" zoomAndPan="magnify">
				<g z-index="6">
				<rect width="490" height="490" x="0" y="0" fill="rgb(205,235,139)" />
				</g>
				@if($placedata->def >=50 && $placedata->def <=199)				
				<g z-index="7">
				<rect width="350" height="350" x="70" y="70" stroke="rgb(128,64,32)" stroke-width="3" fill="rgb(255,204,153)" />
				</g>
				@elseif($placedata->def >=200 && $placedata->def <=599)				
				<g z-index="7">
				<rect width="350" height="350" x="70" y="70" stroke="rgb(160,82,45)" stroke-width="4" fill="rgb(255,204,153)" />
				</g>
				@elseif($placedata->def >=600)				
				<g z-index="7">
				<rect width="350" height="350" x="70" y="70" stroke="rgb(128,128,128)" stroke-width="5" fill="rgb(255,204,153)" />
				</g>
				@endif

				@foreach($quarters as $quarter)					
					@if($quarter->categories->quarter_name =="marke")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(255,255,255)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="hospital")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(106,0,255)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="gateway")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(160,82,45)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="castellany")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(160,82,45)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="market")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(255,255,136)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="diocese")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(225,213,231)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="port")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(27,161,226)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="centre")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(255,242,204)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="university")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(0,80,239)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="tiltyard")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(248,206,204)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="industry")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(255,255,136)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="citadel")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(160,82,45)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="roadside_inn")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(240,163,10)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="fortified_abbey")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(218,232,252)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="abbey_grange")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(218,232,252)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="abbey_scriptorium")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(218,232,252)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="lordship")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(248,206,204)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="factory")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(255,242,204)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="inn")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(240,163,10)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="commandery")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(216,0,115)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="abbacy")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(218,232,252)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="parish")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(225,213,231)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="farmstead")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(213,232,212)" />
						</a>
						</g>
					@elseif($quarter->categories->quarter_name =="hunting lodge")
						<g z-index="8">
						<a xlink:href="/quarters/{{ $quarter->quarter_id }}"><title>{{ $quarter->quarter_name }}</title>
						<rect width="70" height="70" x="{{ ($quarter->x * 70) - 70 }}" y="{{ ($quarter->y * 70) - 70 }}" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(96,169,23)" />
						</a>
						</g>
					@endif					
				@endforeach
				</svg>
			</div>
		</div>
    </div>
