<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: rgb(97, 25, 25);padding: 0px;">
    <div class="container-fluid p-1">
        <a style="font-weight: 1500; padding-left: 30px;" class="navbar-brand" href="{{ route('home') }}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="display: flex; align-items: left;">
            <div style="display: flex;flex:1">

            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 linkNavBar">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tickets.index') }}">tickets</a>
                </li>

                </li>

            </ul>
        </div>
    </div>
</nav>
