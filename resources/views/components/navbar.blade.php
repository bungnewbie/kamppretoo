<nav
  class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
>
  <div
    class="container px-4 mx-auto flex flex-wrap items-center justify-between"
  >
    <div
      class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
    >
      <a
        href="/"
        class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white"
        >Kampreto</a
      >
      <button
        type="button"
        onclick="event.preventDefault(); document.getElementById('logout').submit();"
        class="bg-white text-gray-800 lg:absolute lg:mr-12 lg:mt-2 lg:right-0 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none"
      >
        Logout
      </button>
    </div>
  </div>
</nav>

<form method="post" id="logout" action="{{ route('logout') }}">
  @csrf
</form>
