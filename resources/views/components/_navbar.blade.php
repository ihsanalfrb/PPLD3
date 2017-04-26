<nav class="nav has-shadow">
  <div class="container">
    <div class="nav-left">
        <a class="nav-item is-brand" href="{{ action('PageController@index') }}">
          <img src="{{ URL::asset('images/logo.png')}}" alt="Bulma: a modern CSS framework based on Flexbox">
        </a>
        <a id="nav_knowledge" class="nav-item is-tab is-hidden-mobile" href="{{ action('PageController@index')}}">Knowledge</a>
        <a id="nav_categories" class="nav-item is-tab is-hidden-mobile" href="{{ action('PageController@categories')}}">Categories</a>
        <a class="nav-item is-tab is-hidden-mobile" href="#">Forums</a>
        <a class="nav-item is-tab is-hidden-mobile" href="#">Learn More</a>
        <a class="nav-item is-tab is-hidden-mobile" href="#">About Us</a>


      </div>

      <span id="nav-toggle" class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
      </span>
      <div id="nav-menu" class="nav-right nav-menu">
        <span class="nav-item">
          <div class="field is-grouped">
            <form action="{{ action('PageController@search_batik')}}" method="get">
            <p class="control is-expanded">
              <input class="input" type="text" placeholder="Find a batik" name="keywords">
            </p>
            <p class="control">
              <input class="button is-primary" type="submit" value="Search">
            </p>
              <input type="submit" value="Submit">
            </form>
          </div>
        </span>
      </div>
  </div>
</nav>
