@extends("layouts.app")

@section("content")
	<div class="columns">
    <section class="hero is-warning column is-12">
		<div class="hero-body">
			<div class="container has-text-centered">
				<div class="container has-text-centered">
					<h1 class="is-1 title">Want to know about your batik more?</h1>
					<img class="is-medium is-1" src="{{ URL::asset('images/batiquewords.png')}}">
					{{--<h1 class="title is-1">Batique</h1>--}}
				</div>
				<form>
					<div class="container has-text-centered">
						<div class="columns">
							<div class="column is-mobile is-half is-offset-one-quarter">
								<div class="field-is-horizontal">
									<div class="field-body">
										<div class="columns container has-text-centered">
											<div class="column is-5">
												<div class="field is-grouped">
													<p class="control is-expanded">
													  <input class="input" type="file" placeholder="Your photo here">
													</p>
												</div>
											</div>
											<div class="column is-2">
												<h3 class="title is-4 has-text-centered">or</h3>
											</div>
											<div class="column is-5">
												<div class="field is-grouped">
													<p class="control is-expanded">
													  <input class="input" type="text" placeholder="link">
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="has-text-centered">
							<input type="submit" name="submit" value="Search Batik" class="button is-medium is-outlined is-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
    </section>
	</div>
	<div class="columns">
		<section class="most-viewed-list">
					<div class="columns">
						<div class="column has-text-centered" is-12>
							<h5 class="subtitle is-5">Most Viewed Batik</h5>
							<div class="columns list-content">
								@foreach($batiks as $batik)
									<div class="column is-2">
									<div class="card">
											<div class="card-image">
												<figure class="image">
													<a href="{{ action('PageController@rincian_informasi',$batik->id)}}">
														<img src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/{{$batik->gambar_pola_batik}}" alt="Image"></a>
												</figure>
											</div>
											<div class="card-content has-text-centered">
												<div class="content">
													<h4 class="has-text-centered title is-6"><a href="{{ action('PageController@rincian_informasi',$batik->id)}}">{{$batik->nama_batik}}</a></h4>
												</div>
											</div>
									</div>
									</div>
								@endforeach
							</div>
						</div>
						<div class="column is-4">
							<div class="category-list">
								<h5 class="subtitle is-5">Tags</h5>
								@foreach($tag_batiks as $tag)
									<a class="tag is-dark is-small" href="{{ action('PageController@daftar_batik_tag',$tag->tag_batik)}}">{{ $tag->tag_batik }}</a>
								@endforeach
							</div>
						</div>
					</div>
	</section>
	</div>
    <script>
      $(document).ready(function() {
        $('#nav_knowledge').addClass("is-active");
      });
    </script>

@endsection
