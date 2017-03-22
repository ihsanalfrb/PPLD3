<nav class="nav has-shadow">
  <div class="container">
    <div class="nav-left">
        <a class="nav-item is-brand" href="http://bulma.io">
          <img src="{{ URL::asset('images/logo.png')}}" alt="Bulma: a modern CSS framework based on Flexbox">
        </a>
        <a class="nav-item is-tab is-hidden-mobile is-active" href="#">Knowledge</a>
        <a class="nav-item is-tab is-hidden-mobile" href="#">Forums</a>
        <a class="nav-item is-tab is-hidden-mobile" href="#">Learn More</a>
        <a class="nav-item is-tab is-hidden-mobile" href="#">About Us</a>
      </div>
      <div class="nav-center">
        <a class="nav-item" href="https://github.com/rizqyfaishal">
          <span class="icon">
            <i class="fa fa-github"></i>
          </span>
        </a>
        <a class="nav-item" href="https://twitter.com/jgthms">
          <span class="icon">
            <i class="fa fa-twitter"></i>
          </span>
        </a>
      </div>
      <span id="nav-toggle" class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
      </span>
      <div id="nav-menu" class="nav-right nav-menu">
        <span class="nav-item">
          <div class="field is-grouped">
            <p class="control is-expanded">
              <input class="input" type="text" placeholder="Find a batik">
            </p>
            <p class="control">
              <a class="button is-primary">
                Search
              </a>
            </p>
          </div>
        </span>
      </div>
  </div>    
</nav>