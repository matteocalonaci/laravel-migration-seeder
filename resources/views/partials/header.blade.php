
<header>
    <div class="links">
    <a class="@if (Route::currentRouteName() == 'home') active @endif" href="{{ route('home')}}" >HOME</a>
    <a class="@if (Route::currentRouteName() == 'trains') active @endif" href="{{ route('trains')}}" >TRENI</a>

    </div>
    <h1 class="text-center p-1" style="color:red">Laravel-Migration-Seeder</h1>
    <hr style="color: white;">
</header>
