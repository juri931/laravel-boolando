
<header>
    <nav class="top">
        {{-- Categories --}}
        <ul>
            {{-- @foreach ($menues as $menu)
            <li>
                <a href="/home">{{ $menu['main']['text'] }}</a>
            </li>
            @endforeach --}}
        </ul>

        <!-- Logo -->
        <img class="logo" src="img/boolean-logo.png" alt="logo" />

        <!-- Icons -->
        <div class="icons">
            <ul>
                {{-- <li v-for="(item, index) in iconsMenu" :key="`m-${item}`">
                <a :href="item.href">{{ item.text }}</a>
                </li> --}}
            </ul>
        </div>
    </nav>
</header>
