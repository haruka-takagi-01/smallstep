    <nav class="navbar navbar-expand-xl navbar-dark bg-dark mt-0 mb-3 sticky-top ">
        <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav3">
            <ul class="navbar-nav">
                <li class="nav-item">
                    {!! link_to_route('kakugen.search', '格言を探す', [] , ['class' => 'nav-link ']) !!}
                </li>
                <li class="nav-item">
                    {!! link_to_route('kakugen.input', '格言を登録する', [] , ['class' => 'nav-link']) !!}
                </li>
                
            </ul>
        </div>
    </nav>