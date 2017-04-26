@extends("layouts.app")

@section("content")
    <section>
        <h1 class="text-center">Want to know about your batik more?</h1>
        <h1 class="text-center primary">Batique</h1>
        <form>
        	<div class="columns">
	        	<div class="column is-mobile is-half is-offset-one-quarter">
		        	<div class="field-is-horizontal">
			        	<div class="field-body">
			        		<div class="columns">
			       				<div class="column is-5">
			       					<div class="field is-grouped">
										    <p class="control is-expanded">
										      <input class="input" type="file" placeholder="Your photo here">
										    </p>
									    </div>
		        				</div>
			        			<div class="column is-2">
			        			<h5 class="text-center">or</h5>
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
    						<div class="column is-4">
    							<div class="card">
									  <div class="card-image">
									    <figure class="image is-4by3">
									      <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">
									    </figure>
									  </div>
									  <div class="card-content">
									    <div class="content">
									      <h3 class="text-center">Batik 1</h3>
									    </div>
									  </div>
									</div>
    						</div>
    						<div class="column is-4">
    							<div class="card">
									  <div class="card-image">
									    <figure class="image is-4by3">
									      <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">
									    </figure>
									  </div>
									  <div class="card-content">
									    <div class="content">
									      <h3 class="text-center">Batik 2</h3>
									    </div>
									  </div>
									</div>
    						</div>
    						<div class="column is-4">
    							<div class="card">
									  <div class="card-image">
									    <figure class="image is-4by3">
									      <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">
									    </figure>
									  </div>
									  <div class="card-content">
									    <div class="content">
									      <h3 class="text-center">Batik 1</h3>
									    </div>
									  </div>
									</div>
    						</div>
    					</div>
    				</div>
    				<div class="column is-4">
              <div class="category-list">
                  <h2 class="text-center">Tags</h2>
                  @foreach($tag_batiks as $tag)
                      <a href="{{ action('PageController@show_category',$tag->id)}}">{{ $tag->tag_batik }}</a>
                  @endforeach
              </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
@endsection
