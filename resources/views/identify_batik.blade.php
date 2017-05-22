@extends("layouts.app")

@section("content")
    <section>
    <script>
              $(document).ready(function() {
					// set interval between movement
					var interval = 3000;
					// starting point
					var counter = 0;
					var myVar;
					start();
					function start() {
						myVar = setInterval(forward, interval);
						$(document.getElementById("prev")).prop('disabled', true);
					}
					function endOfSlide() {
						counter++;
						if (counter === $(".slide").length) {
							$(".slides").css("margin-left", "0px");
							counter = 0;
						}
					}
					function forward() {
						$(".slides").animate({
							"margin-left" : "-=700px"
						}, 2000, endOfSlide);
						 $(document.getElementById("prev")).prop('disabled', false);
					}
					function backward() {
						$(".slides").animate({
							"margin-left" : "+=700px"
						}, 2000, endOfSlide);
						if (counter === 0) {
							$(document.getElementById("prev")).prop('disabled', true);
						}
					}
					$("#slider").mouseover(function() {
						clearInterval(myVar);
					});
					$("#slider").mouseleave(function() {
						start();
					});
					$("#next").click(function() {
						forward();
						clearInterval(myVar);
					});
					$("#prev").click(function() {
						backward();
						clearInterval(myVar);
					});

				});
		</script>
				<style>
					.show {
						display: block;
					}

					#slider {
						width: 400px;
						height: 300px;
						overflow: hidden;
						margin: auto;
					}

					#slider .slides {
						margin: 0;
						padding: 0;
						width: 3500px;
						height: 400px;
						display: block;
					}
					.photo-slide {
						width:400px;
						height:auto;
					}
				</style>
  		 <img src="data:{{$type}};base64,{{$original_image}}">
  		 		<button id="prev">Prev image</button>
                <button id="next">Next image</button>
                <div id="slider">
                    <ul class="slides">
            <div class="columns">
              <div class="column is-2">
              <div class="column is-6">
					@foreach($batiks as $batik)
                        <li class="slide"><img class="photo-slide"
                            src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/{{ $batik->gambar_pola_batik }}" alt="{{ $batik->gambar_pola_batik }}"></li>
                 @endforeach
              </div>
            </div>
            </div>
          </ul>
          </div>
          <div id ="information">
         @foreach($batiks as $batik)
         <div id ="{{ $batik->nama_batik }}">
          <h3><a href="{{ action('PageController@rincian_informasi',$batik->id)}}">{{ $batik->nama_batik }}</a></h3>
                <p>Asal Batik: {{$batik->asal_daerah}}
                <p>Jenis Pola:
                      @if($batik->cluster_batik == null || $batik->cluster_batik == '')
                        <i>pola belum dikenal</i>
                      @endif
                   {{$batik->cluster_batik}} </p>
         @endforeach     
          </div>

    </section>
@endsection
