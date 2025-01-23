@foreach ($menuItems as $routeName => $menuItem)
    @if (gettype($routeName) == 'array')

    @else
        <li>
            <a href="{{ route($routeName) }}" class="navbar-menu__item" aria-current="page">{{ $menuItem }}</a>
        </li>
    @endif
@endforeach

<li>
    <a href="#" class="navbar-menu__item" aria-current="page">Home</a>
</li>

<li>
    <a href="#" class="navbar-menu__item">About</a>
</li>

<li>
    <button class="navbar-menu__item dropdown flex items-center justify-between w-full md:w-auto">
        Dropdown
        <svg class="w-2.5 h-2.5 ms-2.5 transform transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
    </button>

    <ul class="font-normal ms-4 hidden" aria-labelledby="dropdownLargeButton">
        {{-- <li>
            <a href="#" class="active__dropdown block px-4 py-2 navbar-menu__item">Dashboard</a>
        </li> --}}

        <li>
            <a href="#" class="block px-4 py-2 navbar-menu__item">Dashboard</a>
        </li>

        <li>
            <a href="#" class="block px-4 py-2 navbar-menu__item">Earnings</a>
        </li>
    </ul>
</li>

<li>
    <a href="#" class="navbar-menu__item">Services</a>
</li>

<li>
    <a href="#" class="navbar-menu__item">Contact</a>
</li>
