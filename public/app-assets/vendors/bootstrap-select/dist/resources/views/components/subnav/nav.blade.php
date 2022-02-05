<nav id="subnav"
     class="navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container">
        <button class="navbar-toggler my-1" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto justify-content-center">
                {{$slot}}
            </ul>
        </div>
    </div>
</nav>

