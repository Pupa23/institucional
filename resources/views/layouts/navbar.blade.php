<div class="container d-flex align-items-center">

    <!--<h1 class="logo mr-auto"><a href="index.html">Staudohar</a></h1>-->
    <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

    <nav class="nav-menu d-none d-lg-block">
        <ul>
            @for($i = 0; $i < count($menus); $i++)
                <li><a href="#{{ strtolower($menus[$i]['items']) }}">{{ $menus[$i]['items'] }}</a></li>
            @endfor

        </ul>
    </nav>

</div>
