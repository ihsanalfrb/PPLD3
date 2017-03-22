<nav class="nav">
  <div class="container">
    <div class="nav-left">
        <a class="nav-item is-brand" href="http://bulma.io">
          <img src="{{ URL::asset('images/logo.png')}}" alt="Bulma: a modern CSS framework based on Flexbox">
        </a>
      </div>
      <div class="nav-center">
        <a class="nav-item" href="https://github.com/jgthms/bulma">
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
        <a class="nav-item is-active" href="http://bulma.io/">Home</a>
        <a class="is-hidden nav-item  " href="http://bulma.io/templates/">
          <span>Templates</span>
          <span class="tag is-small is-success">New!</span>
        </a>
        <a class="nav-item  " href="/documentation/overview/start/">Documentation</a>
        <a class="nav-item " href="http://bulma.io/blog/">Blog</a>
        <span class="nav-item">
          <a id="twitter"
            class="button"
            data-social-network="Twitter"
            data-social-action="tweet"
            data-social-target="http://bulma.io"
            target="_blank"
            href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&url=http://bulma.io&via=jgthms">
            <span class="icon">
              <i class="fa fa-twitter"></i>
            </span>
            <span>Tweet</span>
          </a>
          <a class="button is-primary" href="https://github.com/jgthms/bulma/archive/0.4.0.zip">
            <span class="icon">
              <i class="fa fa-download"></i>
            </span>
          <span>Download</span>
          </a>
        </span>
      </div>
  </div>    
</nav>