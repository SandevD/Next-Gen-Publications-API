@extends('dashboard.layouts.master')

@section('admin-content')
    @if (Session::has('success'))
        <div class="rounded-md bg-green-100 pl-12 p-8">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-3">
                    <div class="mt-1 text-sm text-gray-800">
                        <p class="font-bold">{{ Session::get('success') }}
                        </p>
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    @endif




    @if (count($errors) > 0)
        <div class="rounded-md bg-red-50 pl-12 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/x-circle -->
                    <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">Whoops! There were some problems with your input.</h3>
                    <div class="mt-2 text-sm text-red-700">
                        <ul role="list" class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <form method="POST" action="{{ route('generalInfo.update') }}" enctype="multipart/form-data"
        class="space-y-8 divide-y divide-gray-200 px-12 py-5">
        {{-- @method('PATCH') --}}
        @csrf
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
            <div>
                <div class="p-5">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">General Information</h3>
                </div>

                <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">

                    <h3 class="text-lg leading-6 font-medium text-gray-900">Home Page</h3>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="description" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Main description
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <textarea name="home_description" id="home_description" autocomplete="home_description" required
                                placeholder="Home Description"
                                class="flex-1 tiny_mce_editor block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                             {{ old('home_description', $generalInfoData->home_desc) }}
                        </textarea>
                            {{-- <textarea id="home_description" name="home_description" rows="7" placeholder="Enter Home Description" required
                                class="max-w-2xl shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">{{ $generalInfoData->home_desc }}</textarea> --}}
                        </div>
                    </div>

                    <h3 class="text-lg leading-6 font-medium text-gray-900">About Us Page</h3>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="aboutUs_why_choose_us" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Why Choose Us
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <textarea name="aboutUs_why_choose_us" id="aboutUs_why_choose_us" autocomplete="aboutUs_why_choose_us" required
                                placeholder="Why Choose us"
                                class="flex-1 tiny_mce_editor block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                        {{ old('aboutUs_why_choose_us', $generalInfoData->aboutUs_why_choose_us) }}
                    </textarea>
                            {{-- <textarea id="aboutUs_why_choose_us" name="aboutUs_why_choose_us" rows="5" placeholder="Enter Description"
                                required
                                class="max-w-2xl shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">{{ $generalInfoData->aboutUs_why_choose_us }}</textarea> --}}
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="aboutUs_who_we_are" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Who we are
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <textarea name="aboutUs_who_we_are" id="aboutUs_who_we_are" autocomplete="aboutUs_who_we_are" required
                                placeholder="Who We Are"
                                class="flex-1 tiny_mce_editor block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                                 {{ old('aboutUs_who_we_are', $generalInfoData->aboutUs_who_we_are) }}
                            </textarea>
                            {{-- <textarea id="aboutUs_who_we_are" name="aboutUs_who_we_are" rows="5" placeholder="Enter Description" required
                                class="max-w-2xl shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">{{ $generalInfoData->aboutUs_who_we_are }}</textarea> --}}
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="aboutUs_vission" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Vission
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <textarea name="aboutUs_vission" id="aboutUs_vission" autocomplete="aboutUs_vission" required placeholder="Who We Are"
                                class="flex-1 tiny_mce_editor block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                                 {{ old('aboutUs_vission', $generalInfoData->aboutUs_vission) }}
                            </textarea>
                            {{-- <textarea id="aboutUs_who_we_are" name="aboutUs_who_we_are" rows="5" placeholder="Enter Description" required
                                class="max-w-2xl shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">{{ $generalInfoData->aboutUs_who_we_are }}</textarea> --}}
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="aboutUs_mission" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Mission
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <textarea name="aboutUs_mission" id="aboutUs_mission" autocomplete="aboutUs_mission" required placeholder="Who We Are"
                                class="flex-1 tiny_mce_editor block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                                 {{ old('aboutUs_mission', $generalInfoData->aboutUs_mission) }}
                            </textarea>
                            {{-- <textarea id="aboutUs_who_we_are" name="aboutUs_who_we_are" rows="5" placeholder="Enter Description" required
                                class="max-w-2xl shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">{{ $generalInfoData->aboutUs_who_we_are }}</textarea> --}}
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="aboutUs_establishment" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Year of Establishment
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <textarea name="aboutUs_establishment" id="aboutUs_establishment" autocomplete="aboutUs_establishment" required
                                placeholder="Year of Establishment"
                                class="flex-1 tiny_mce_editor block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                                 {{ old('aboutUs_establishment', $generalInfoData->aboutUs_establishment) }}
                            </textarea>
                            {{-- <textarea id="aboutUs_establishment" name="aboutUs_establishment" rows="5" placeholder="Enter Description"
                                required
                                class="max-w-2xl shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">{{ $generalInfoData->aboutUs_establishment }}</textarea> --}}
                        </div>
                    </div>

                    <h3 class="text-lg leading-6 font-medium text-gray-900">Contact Us Page</h3>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="contact_addres" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Addres
                        </label>
                        <div class="max-w-2xl flex rounded-md shadow-sm">
                            <input type="text" name="contact_addres" id="contact_addres" autocomplete="addres"
                                required placeholder="Addres" value="{{ $generalInfoData->contact_addres }}"
                                class="flex-1  block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="contact_phone" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Phone
                        </label>
                        <div class="max-w-2xl flex rounded-md shadow-sm">
                            <input type="text" name="contact_phone" id="contact_phone" autocomplete="phone" required
                                placeholder="Phone" value="{{ $generalInfoData->contact_phone }}"
                                class="flex-1  block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="contact_email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Email
                        </label>
                        <div class="max-w-2xl flex rounded-md shadow-sm">
                            <input type="text" name="contact_email" id="contact_email" autocomplete="email" required
                                placeholder="Email" value="{{ $generalInfoData->contact_email }}"
                                class="flex-1  block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                        </div>
                    </div>

                    <h3 class="text-lg leading-6 font-medium text-gray-900">Social Links</h3>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="contact_facebook" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Facebook
                        </label>
                        <div class="max-w-2xl flex rounded-md shadow-sm">
                            <input type="text" name="contact_facebook" id="contact_facebook" required
                                placeholder="Facebook Link" value="{{ $generalInfoData->contact_facebook }}"
                                class="flex-1  block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="contact_twitter" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            YouTube
                        </label>
                        <div class="max-w-2xl flex rounded-md shadow-sm">
                            <input type="text" name="contact_youtube" id="contact_youtube"
                                autocomplete="contact_youtube" required placeholder="Twitter Link"
                                value="{{ $generalInfoData->contact_youtube }}"
                                class="flex-1  block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="description" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Instagram
                        </label>
                        <div class="max-w-2xl flex rounded-md shadow-sm">
                            <input type="text" name="contact_insta" id="contact_insta" autocomplete="contact_insta"
                                required placeholder="Instagram Link" value="{{ $generalInfoData->contact_insta }}"
                                class="flex-1  block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                        </div>
                    </div>




                </div>
            </div>


        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update
                    General Information</button>
            </div>
        </div>
    </form>
@endsection

@section('custom-js')
    <script src="/assets/js/imageUpload.js"></script>
    <script src="https://cdn.tiny.cloud/1/qwkitz9r92dxve353wnbknvrkx8kdx8s6asyfjgxp9tybec4/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="/assets/js/function.js"></script>
    <script type="text/javascript">
        makeTinymceTextArea('tiny_mce_editor');
        document.getElementById('book_main_image').addEventListener("change", function(e) {
            uploadImage('book', 'main', 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048');
        }, false);

        document.getElementById('book_main_file').addEventListener("change", function(e) {
            uploadFile('book', 'main', 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048');
        }, false);
    </script>
@endsection
