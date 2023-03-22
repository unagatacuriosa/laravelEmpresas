<div  class="h-15v bg-header flex flex-row justify-between p-5">
    <img src="{{asset("img/logo.png")}}" alt="logo">
    <h1 class="text-7xl text-white">Gestion de Empresas</h1>
    @auth
        {{auth()->user()->name}}
        <form action="logout" method="post">
            @csrf
            <x-layout.login-button>Logout</x-layout.login-button>
        </form>
    @endauth
    @guest
        <form action="login" method="post">
            @csrf
            <div class="flex flex-row">
                <input class="text-xs w-2/12 h-1/6 m-3" type="email" name="email" placeholder="email">
                <input class="text-xs w-2/12 h-1/6 m-3" type="password" name="password" placeholder="password">
            </div>
            <div  class="flex flex-row">
                <x-layout.login-button>Login</x-layout.login-button>
                <x-layout.a-button href="{{route('register')}}">Register</x-layout.a-button>
            </div>
        </form>
    @endguest
</div>
