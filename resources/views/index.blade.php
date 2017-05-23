@extends("layouts.app")

<?php if(!isset($errors)) {
  $errors = array();
}

?>

@section("content")
    <section>
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
        <h1 class="text-center">Want to know about your batik more?</h1>
        <h1 class="text-center primary">Batique</h1>
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
    </section>
    <section class="most-viewed-list">
    	<div class="columns">
    		<div class="column">
    			<div class="columns">
    				<div class="column is-8 bordered-right">
    					<h2 class="text-center">Most Viewed Batik</h2>
    					<div class="columns list-content">
                @foreach($batiks as $batik)
                  <div class="column is-4">
      							<div class="card">
  									  <div class="card-image">
  									    <figure class="image is-4by3">
  									      <img src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/{{$batik->gambar_pola_batik}}" alt="Image">
  									    </figure>
  									  </div>
  									  <div class="card-content">
  									    <div class="content">
  									      <h4 class="text-center"><a href="{{ action('PageController@rincian_informasi',$batik->id)}}">{{$batik->nama_batik}}</h4></a>
  									    </div>
  									  </div>
  									</div>
      						</div>
                @endforeach
    					</div>
    				</div>
    				<div class="column is-4">
              <div class="category-list">
                  <h3>Tags</h3>
                  @foreach($tag_batiks as $tag)
                      <a href="{{ action('PageController@daftar_batik_tag',$tag->tag_batik)}}">{{ $tag->tag_batik }}</a>
                  @endforeach
              </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <canvas id="mcanvas" hidden></canvas>
    <script>
      $(document).ready(function() {
        $('#nav_knowledge').addClass("is-active");
      });
    </script>
@endsection
