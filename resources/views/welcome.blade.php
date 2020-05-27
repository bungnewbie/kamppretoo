<x-app-layout title="Welcome">
  @section('body')
    <section class="absolute w-full h-full bg-gray-400 bg-scroll"
      style="background-image: url(./images/register_bg_2.png);"
    >
      <div class="container mx-auto px-4">
          <div class="flex content-center items-center justify-center mt-16">
            <div class="w-full lg:w-4/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0"
              >
              <div class="rounded-t mb-0 px-6 py-6">
                <div class="text-center mb-3">
                  <h6 class="text-gray-600 text-sm font-bold">
                    Sign in with
                  </h6>
                </div>
                <div class="btn-wrapper text-center">
                  <a
                  href="{{ url('auth/github') }}"
                    class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                    style="transition: all 0.15s ease 0s;"
                  >
                    <img
                      alt="github"
                      class="w-5 mr-2"
                      src="{{ asset('images/github.svg') }}"
                    />github</a
                  >
                  {{-- <a
                    href="{{ url('auth/twitter') }}"
                    class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                    style="transition: all 0.15s ease 0s;"
                  >
                    <img
                      alt="twitter"
                      class="w-5 mr-2"
                      src="{{ asset('images/twitter.svg') }}"
                    /></a> --}}
                    <a
                    href="{{ url('auth/facebook') }}"
                    class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                    style="transition: all 0.15s ease 0s;"
                  >
                    <img
                      alt="facebook"
                      class="w-5 mr-2"
                      src="{{ asset('images/facebook.svg') }}"
                    />facebook</a>
                </div>
                <div class="text-gray-500 text-center mt-3 font-bold">
                  <small>Please login using github or facebook</small>
                </div>
                <hr class="mt-6 border-b-1 border-gray-400" />
              </div>
              <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <div class="text-gray-500 text-center mb-3 font-bold">
                  <small>Or sign in with credentials</small>
                </div>
                <form>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="grid-password"
                      >Email</label
                    ><input
                      disabled
                      type="email"
                      class="cursor-not-allowrd disabled:opacity-75 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                      placeholder="Email"
                      style="transition: all 0.15s ease 0s;"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="grid-password"
                      >Password</label
                    ><input
                      disabled
                      type="password"
                      class="cursor-not-allowrd disabled:opacity-75 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                      placeholder="Password"
                      style="transition: all 0.15s ease 0s;"
                    />
                  </div>
                  <div class="flex flex-wrap mt-6">
                    <div class="w-1/2">
                      <label class="inline-flex items-center cursor-pointer"
                        ><input
                          disabled
                          type="checkbox"
                          id="customCheckLogin"
                          class="cursor-not-allowrd disabled:opacity-75 form-checkbox text-gray-800 ml-1 w-5 h-5"
                          style="transition: all 0.15s ease 0s;"
                        /><span class="ml-2 text-sm font-semibold text-gray-700"
                          >Remember me</span
                        ></label
                      >
                    </div>
                    <div class="w-1/2 text-right">
                      <a href="#"
                        ><small>Create new account</small></a
                      >
                    </div>
                  </div>
                  <div class="text-center mt-6">
                    <button
                      disabled
                      type="button"
                      class="cursor-not-allowed disabled:opacity-75 bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                    >
                      Sign In
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @stop
</x-app-layout>
