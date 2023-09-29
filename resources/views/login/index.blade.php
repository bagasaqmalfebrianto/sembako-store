@extends('layout.main')

@section('container')

        @if(session()->has('success'))
        <div class="flex justify-center self-center  z-10">

            <div class="alert alert-danger alert-dismissible fade show w-400" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
          @endif

        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

      <div class="flex justify-center self-center  z-10 my-5">
        <div class="p-12 bg-white mx-auto rounded-2xl w-600 ">
            <div class="mb-4">
              <h3 class="font-semibold text-2xl text-gray-800">LOGIN </h3>
              <p class="text-gray-500">Silahkan masuk ke akun Anda.</p>
            </div>
            <form action="/login" method="post">
            @csrf
            <div class="space-y-5">
                <div class="space-y-2">
                    <label class="text-sm font-medium text-gray-700 tracking-wide">Email</label>
                              @error('email')
                                <div class="">
                                    {{ $message }}
                                </div>
                              @enderror
                <input type="email" class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400
                @error('email') is-invalid
                @enderror"  placeholder="name@example.com" name="email" id="email" autofocus required value="{{ old('email') }}">
            </div>
            <div class="space-y-2">
                <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
                    Password
                </label>
                <input class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" type="password" placeholder="Enter your password" name="password" id="password">
            </div>
        </form>
              {{-- <div class="flex items-center justify-between">
              <div class="flex items-center">
                <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 bg-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                <label for="remember_me" class="ml-2 block text-sm text-gray-800">
                  Remember me
                </label>
              </div>
              <div class="text-sm">
                <a href="#" class="text-green-400 hover:text-green-500">
                  Forgot your password?
                </a>
              </div>
            </div> --}}
            <div>
              <button type="submit" class="w-full flex justify-center bg-green-400  hover:bg-green-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                Sign in
              </button>
            </div>
            </div>
            {{-- <div class="pt-5 text-center text-gray-400 text-xs">
              <span>
                Copyright © 2021-2022
                <a href="https://codepen.io/uidesignhub" rel="" target="_blank" title="Ajimon" class="text-green hover:text-green-500 ">AJI</a></span>
            </div> --}}
        </div>




@endsection
