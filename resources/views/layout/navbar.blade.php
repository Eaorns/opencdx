<nav class="navbar bg-body-secondary border-bottom px-3">
    <a class="navbar-brand fs-3" href="/">
        <svg class="d-inline-block align-text-top me-2" id="logo-39" width="50" height="40" viewBox="0 0 50 40" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M25.0001 0L50 15.0098V24.9863L25.0001 40L0 24.9863V15.0099L25.0001 0Z" fill="#A5B4FC" class="ccompli2"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M0 15.0098L25 0L50 15.0098V24.9863L25 40L0 24.9863V15.0098ZM25 33.631L44.6967 21.8022V18.1951L44.6957 18.1945L25 30.0197L5.30426 18.1945L5.3033 18.1951V21.8022L25 33.631ZM25 24.5046L40.1018 15.4376L36.4229 13.2298L25 20.0881L13.5771 13.2298L9.89822 15.4376L25 24.5046ZM25 14.573L31.829 10.4729L25 6.37467L18.171 10.4729L25 14.573Z" fill="#4F46E5" class="ccustom"></path> <path d="M25.0001 0L0 15.0099V24.9863L25 40L25.0001 0Z" fill="#A5B4FC" class="ccompli2" fill-opacity="0.3"></path> </svg>
        {{ app('settings')['site.name'] }}
    </a>
    <div>
    @auth
    <div class="row">
        <div class="col">
            <p class="fs-5 mb-0 pt-1 text-nowrap">
                Hello, {{ Auth::user()->first_name }}!
            </p>
        </div>
        <div class="col">
            {{ Form::open(array('url' => '/logout')) }}
                {{ Form::submit('Logout', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
        </div>
    @endauth
    @guest
    <div>
        <a href="/register" class="btn btn-secondary m-1" role="button">Register</a>
        <a href="/login" class="btn btn-primary m-1" role="button">Login</a>
    </div>
    @endguest
    </div>
</nav>