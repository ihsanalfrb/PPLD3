@extends("layouts.app")

<?php if(!isset($errors)) {
  $errors = array();
}

?>

@section("content")
	<div class="columns">
    <section class="hero is-warning column is-12">
		<div class="hero-body">
      @if (count($errors) > 0)
        <div class="notification is-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      @if(\Illuminate\Support\Facades\Session::has('error'))
        <div class="notification is-danger">
          {{\Illuminate\Support\Facades\Session::get('error')}}
        </div>
      @endif
			<div class="container has-text-centered">
				<div class="container has-text-centered">
					<h1 class="is-1 title">Want to know about your batik more?</h1>
					<img class="is-medium is-1" src="{{ URL::asset('images/batiquewords.png')}}">
					{{--<h1 class="title is-1">Batique</h1>--}}
				</div>
        <form action="{{ url('identify') }}" id="form_indentify" method="POST" enctype="multipart/form-data">
    			{{ csrf_field() }}
    			<div class="columns">
    				<div class="column is-mobile is-half is-offset-one-quarter">
    					<div class="field-is-horizontal">
    						<div class="field-body">
    							<div class="columns">
    								<div class="column is-5">
    									<div class="field is-grouped">
    										<p class="control is-expanded">
    											<input id="image_file"class="input" type="file" placeholder="Your photo here" name="image">
    										</p>
    									</div>
    								</div>
    								<div class="column is-2">
    									<h5 class="text-center">or</h5>
    								</div>
    								<div class="column is-5">
    									<div class="field is-grouped">
    										<p class="control is-expanded">
    											<input class="input" type="text"id="image_link" name="link" placeholder="link">
    										</p>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="columns">
    				<div class="column is-2 is-offset-5">
    					<input type="submit" name="submit" value="Search Batik" class="button is-primary block">
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
