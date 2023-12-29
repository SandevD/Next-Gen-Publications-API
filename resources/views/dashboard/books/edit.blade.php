@extends('dashboard.layouts.master')

@section('admin-content')
    @if (Session::has('success'))
        <div class="rounded-md bg-green-50 pl-12 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/check-circle -->

                </div>
                <div class="ml-3">
                    <div class="mt-2 text-sm text-green-800">
                        <p> {{ Session::get('success') }}</p>
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


    <form method="POST" action="{{ route('books.update', $book->id) }}" enctype="multipart/form-data"
        class="space-y-8 divide-y divide-gray-200 p-12">
        @method('PATCH')
        @csrf
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
            <div>
                <div>
                    <h3 class="text-2xl leading-6 font-medium pt-4 text-gray-900">Upgrade a Book</h3>

                </div>

                <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="title" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 ">
                            Title
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div class="max-w-lg flex rounded-md shadow-sm">
                                <input type="text" name="title" value="{{ old('title', $book->title) }}" id="title"
                                    autocomplete="title" required placeholder="Enter Title"
                                    class="flex-1  block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                            </div>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="link" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 ">
                            Link
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div class="max-w-lg flex rounded-md shadow-sm">
                                <input type="text" name="link" value="{{ old('link', $book->link) }}" id="link"
                                    autocomplete="link" required placeholder="Enter Link"
                                    class="flex-1  block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                            </div>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="description" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Description
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <textarea name="description" id="description" autocomplete="description" required placeholder="Description"
                                class="flex-1 tiny_mce_editor block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                            {{ old('description', $book->desc) }}
                        </textarea>
                            <p class="mt-2 text-sm text-gray-500">Write a few sentences about book.</p>
                        </div>
                    </div>

                    {{-- <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="isbn" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 ">
                            ISBN Number
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div class="max-w-lg flex rounded-md shadow-sm">
                                <input type="text" name="isbn" id="isbn" autocomplete="isbn"
                                    value="{{ old('isbn', $book->isbn) }}" required placeholder="Enter ISBN Number"
                                    class="flex-1  block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                            </div>
                        </div>
                    </div> --}}

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="grade" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> grade
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <select id="grade" name="grade" autocomplete="category-name" required
                                class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                @foreach ($categories as $category)
                                    <option value="{{ old('grade', $category->id) }}"
                                        @if ($book->category_id == $category->id) selected @endif>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="category" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Category
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <select id="category" name="category" autocomplete="category-name" required
                                class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                @foreach ($grades as $grade)
                                    <option value="{{ old('category', $grade->id) }}"
                                        @if ($book->grade == $grade->id) selected @endif>
                                        {{ $grade->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    {{-- <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="sub_category" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Sub
                            Category
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <select id="sub_category" name="sub-category" autocomplete="sub-category-name"
                                class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                <option value="3">United States</option>
                                <option value="3">Canada</option>
                                <option value="3">Mexico</option>
                            </select>
                        </div>
                    </div> --}}


                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Cover
                            photo </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div
                                class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">

                                    <img id="book_main_image_show" class="p-28 rounded-3xl" src="{{ $book->image }}"
                                        alt="">



                                    <div class="flex items-center justify-center text-sm text-gray-600">
                                        <label for="book_main_image"
                                            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span class="flex p-2">Upload a file</span>
                                            <input id="book_main_image" name="image" type="file" class="sr-only">

                                            <input type="hidden" name="book_main_image_hidden" id="book_main_image_hidden"
                                                value="{{ old('book_main_image_hidden', $book->image) }}">
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG up to 10MB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> PDF
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div
                                class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <h5></h5>
                                    <span id="book_main_file_show">{{ $book->pdf }}</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12  text-gray-400"
                                        stroke="currentColor" id="book_main_file_svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>
                                    <div class="flex items-center justify-center text-sm text-gray-600">
                                        <label for="book_main_file"
                                            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span class="flex items-center justify-center p-3">Upload a file</span>
                                            <input id="book_main_file" name="file" value="" type="file"
                                                class="sr-only">
                                            <input type="hidden" name="book_main_file_hidden" id="book_main_file_hidden"
                                                value="{{ old('book_main_file_hidden', $book->pdf) }}">
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500">PDF 10MB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update
                    Book</button>
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
