@extends('admin.layout.app')
@section('content')
    <div class="flex flex-wrap">
        <div class="w-full lg:w-8/12 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    @if ($errors->any())
                        <div class="alert alert-danger p-5">
                            <ul class="bg-red-500 rounded p-4 text-white">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    <li>{{ 'dudo' }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            My account
                        </h6>
                        <a href="{{ route('users.show.downlines', auth()->user()->id) }}"
                            class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none 
                            focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="button">
                            View Downlines
                        </a>
                    </div>
                </div>

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form method="post" action="{{ route('profile.update') }}" novalidate>@csrf @method('patch')
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            User Information
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="name">
                                        Username
                                    </label>
                                    <input type="text" name="name" id="name"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow 
                                        focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="{{ old('name') ?? auth()->user()->name }}" />
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="email">
                                        Email address
                                    </label>
                                    <input type="email" name="email" id="email"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow 
                                        focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="{{ old('email') ?? auth()->user()->email }}" />
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="fname">
                                        First Name
                                    </label>
                                    <input type="text" name="fname" id="fname"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow 
                                        focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="{{ old('fname') ?? auth()->user()->fname }}" />
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="lname">
                                        Last Name
                                    </label>
                                    <input type="text" name="lname" id="lname"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="{{ old('lname') ?? auth()->user()->lname }}" />
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300" />

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Contact Information
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="address">
                                        Address
                                    </label>
                                    <input type="text" id="address" name="address"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="{{ old('"address"') ?? auth()->user()->address }}" />
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="city">
                                        City
                                    </label>
                                    <input type="text" id="city" name="city"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="{{ old('"city"') ?? auth()->user()->city }}" />
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="country">
                                        Country
                                    </label>
                                    <input type="text" id="country" name="country"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="{{ old('"country"') ?? auth()->user()->country }}" />
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="postcode">
                                        Postal Code
                                    </label>
                                    <input type="text" id="postcode" name="postcode"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="{{ old('"postcode"') ?? auth()->user()->postcode }}" />
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300" />

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            About Me
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full my-4">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Gender
                                    </label>
                                    <div class="flex flex-wrap justify-even my-4">
                                        <label for="male"> Male
                                            <input type="radio" name="gender" id="male" value="male">
                                        </label>

                                        <label for="female">
                                            Female
                                            <input type="radio" name="gender" id="female" value="female">
                                        </label>
                                    </div>

                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="about_me">
                                        About me
                                    </label>
                                    <textarea type="text" id="about_me" name="about_me"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow
                                        focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        rows="4">A beautiful UI Kit and Admin for JavaScript & Tailwind CSS. It is Free and Open Source.</textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit"
                            class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="button">
                            Update Profile
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
                <x-user-profile-card />
            </div>
        </div>
    </div>
@endsection
