<x-app-layout title="{{logged_in_user()->name}}">
  @push('js')
    <script lang="javascript">
      const btn = document.getElementById('copy');
      const url = btn.getAttribute('token');

      btn.addEventListener('click', () => {
        let el = document.createElement('input');
            el.setAttribute('value', url);

            document.body.appendChild(el);

            el.select();

            try {
              document.execCommand('copy');
              alert('sudah..');
            } catch(e) {
              alert(e);
            }

            document.body.removeChild(el);
      }, false);

      const purge = () => {
        if (confirm('Delete it?')) {
          alert('sudah..');
          setTimeout(() => {
            alert('tapi boong aowkaowk');
          }, 1000);
        }
      }
    </script>
  @endpush

  @section('body')
    <x-navbar></x-navbar>
    <main class="profile-page">
      <section class="relative block" style="height: 500px;">
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80");'
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-50 bg-black"
          ></span>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px; transform: translateZ(0px);"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-gray-300 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
      </section>
      <section class="relative py-16 bg-gray-300">
        <div class="container mx-auto px-4">
          <div
            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64"
          >
            <div class="px-6">
              <div class="flex flex-wrap justify-center">
                <div
                  class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center"
                >
                  <div class="relative">
                    <img
                      alt="..."
                      src="{{logged_in_user()->avatar_url}}"
                      class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16"
                      style="max-width: 150px;"
                    />
                  </div>
                </div>
                <div
                  class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center"
                >
                  <div class="py-6 px-3 mt-32 sm:mt-0">
                    {{-- <button
                      type="button"
                      class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
                    ><i class="fab fa-twitter"></i></button>
                    <button
                      type="button"
                      class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
                    ><i class="fab fa-facebook"></i></button> --}}
                    <a
                      target="blank"
                      href="whatsapp://send?text=Bagikan balasan tentang {{logged_in_user()->name}} tanpa dikenali  {{user_url()}}"
                      class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
                    ><i class="fab fa-whatsapp"></i></a>
                    <button
                      type="button"
                      class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
                    ><i class="fab fa-instagram"></i></button>
                    <button
                      id="copy"
                      token="{{ user_url() }}"
                      type="button"
                      class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
                    ><i class="fa fa-copy"></i></button>
                  </div>
                </div>
                <div class="w-full lg:w-4/12 px-4 lg:order-1">
                  <div class="flex justify-center py-4 lg:pt-4 pt-8">
                    <div class="mr-4 p-3 text-center">
                      <span
                        class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                        >{{$messages->count()}}</span
                      ><span class="text-sm text-gray-500">Messages</span>
                    </div>
                    <div class="mr-4 p-3 text-center">
                      <span
                        class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                        >{{$messages->count()}}</span
                      ><span class="text-sm text-gray-500">Messages</span>
                    </div>
                    <div class="mr-4 p-3 text-center">
                      <span
                        class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                        >{{$messages->count()}}</span
                      ><span class="text-sm text-gray-500">Messages</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center mt-12">
                <h3
                  class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
                >{{logged_in_user()->name}}</h3>
                <div
                  class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase"
                >
                  <i
                    class="fa fa-envelope mr-2 text-lg text-gray-500"
                  ></i>{{logged_in_user()->email}}</div>
              </div>
              <div class="mt-10 border-t border-gray-300 text-center">
                <div class="container my-12 mx-auto px-4 md:px-12">
                  <div class="flex flex-wrap -mx-1 lg:-mx-4">
                    <!-- Column -->
                    @if ($messages->count() > 0)
                      @foreach ($messages as $message)
                        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                          <article class="overflow-hidden rounded-lg shadow-lg border-t-2 border-pink-500">
                            <header class="flex items-center justify-between leading-tight p-3 md:p-4">
                              <p class="text-sm"><i class="fa fa-calendar mr-1"></i> {{ convert_date($message->created_at) }}</p>
                              <p class="text-sm"><i class="fa fa-clock mr-1"></i> {{ convert_time($message->created_at) }}</p>
                            </header>
                            <p class="text-left p-3 md:p-4">{{ $message->message }}</p>
                            <footer class="flex items-center justify-end leading-none p-3 md:p-4">
                              <button class="text-grey-darker hover:text-red-600 focus:outline-none"
                                onclick="purge()"
                              >
                                <span class="hidden">Like</span>
                                <i class="fa fa-trash"></i>
                              </button>
                            </footer>
                          </article>
                        </div>
                      @endforeach
                    @else
                      <div class="my-1 px- m-auto w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                        <article class="overflow-hidden rounded-lg p-6 shadow-lg border-t-2 border-pink-500">
                          <h1 class="text-center uppercase text-md font-semibold">message empty yet! <br> Share your link to people send you message <i class="fa fa-heart text-red-400 ml-1"></i></h1>
                        </article>
                      </div>
                    @endif
                    <!-- end column -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  @stop
</x-app-layout>
