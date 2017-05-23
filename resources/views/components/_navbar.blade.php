<style type="text/css" scoped>
    #nav-toggle-state {
        display: none;
    }

    #nav-toggle-state:checked ~ .nav-menu {
        display: block;
    }
</style>
<nav class="nav has-shadeow">
    <div class="nav-left has-text-centered">
        <a class="nav-item is-brand" href="{{ action('PageController@index') }}">
            <i class="fa fa-home"> </i>
            <h3 class="title is-5">Batique</h3>
        </a>
        <a class="nav-item" href="https://gitlab.com/PPL2017csui/PPLD3  ">
      <span class="icon">
        <i class="fa fa-gitlab"></i>
      </span>
        </a>
        <a class="nav-item" href="https://batiqueweb.wordpress.com/blog/">
      <span class="icon">
        <i class="fa fa-wordpress"></i>
      </span>
        </a>
    </div>

    <div class="nav-center">

    </div>

    <label class="nav-toggle" for="nav-toggle-state">
      <span></span>           <!-- ^^^^^^^^^^^^^^^^ -->
      <span></span>
      <span></span>
    </label>


    <!-- This checkbox is hidden -->
    <input type="checkbox" id="nav-toggle-state" />

    <div class="nav-right nav-menu">
        <a id="nav_categories" class="nav-item is-tab hero is-primary" href="{{ action('PageController@categories')}}">Categories</a>
        <a id="nav_forums" class="nav-item is-tab hero is-primary" href="{{ action('PageController@daftar_thread')}}">Forums</a>

        @if(isset($user))
            <a id="nav_forums" class="nav-item is-tab hero is-primary" href="{{ action('PageController@show_profile')}}">Profile</a>
            <form action={{ action('Auth\LoginController@logout') }} method="POST" class="hero is-primary nav-item is-tab ">
                {{ csrf_field() }}
                <input id="nav_forums" class="nav-item button is-primary" type="submit" value="Logout"/>
            </form>
        @else
            <a id="nav_login" class="nav-item is-tab hero is-primary" href="{{ action('Auth\LoginController@showLoginForm')}}">Login</a>
        @endif
        <span class="nav-item hero is-primary ">
        <form id="search_batik" action="">
          <div class="field is-grouped">
            <p class="control is-expanded">
              <input id="search_input" class="input" type="text" placeholder="Find a batik" name="keywords">
            </p>
            <p class="control">
              <a id="search_button" href="{{ action('PageController@search_batik', '')}}"><input class="button is-outlined is-warning is-inverted" type="submit" value="Search"></a>
            </p>
          </div>
        </form>
      </span>

    </div>
</nav>
<script>
    $('#search_input').on('input',function(e){
        var url = "{{ action('PageController@search_batik', ':keywords')}}"
        $('#search_button').attr("href", url.replace(':keywords', $('#search_input').val()));
    });

    $('#search_batik').on('submit',function(e){
        e.preventDefault();
        location.href =   $('#search_button').attr("href");
    });
</script>
