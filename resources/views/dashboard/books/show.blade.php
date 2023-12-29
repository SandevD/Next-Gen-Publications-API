@extends('dashboard.layouts.master')



@section('admin-content')
    <section>
        <!-- Main Content Section -->
        <div class="py-6">
            <div class="px-12 flex justify-between">
                <h1 class="text-2xl font-semibold text-gray-900">
                    {{ $book->title }}
                </h1>
                <a href="{{ route('books.index') }}"
                    class="ml-3 inline-flex justify-center px-6 py-3 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back</a>
            </div>

            <div class="space-y-8  px-12 py-4">
                <div class="space-y-8 divide-y bg-white px-8 py-8 shadow divide-gray-200 sm:space-y-5">
                    <!-- component -->
                    <div class="bg-gray-200 p-8 font-sans h-screen w-full flex flex-row justify-center items-center">
                        <div class="card w-full mx-auto bg-white shadow-xl hover:shadow p-4">
                            <div class="text-center mt-2 text-3xl font-medium">
                                book: {{ $book->title }}
                            </div>
                            <div class="text-left p-4 font-light text-sm">
                                <div class="flex justify-center items-center  py-4">
                                    <div class="flex flex-col">
                                        <h2 class="text-xl text-center font-bold py-2 mx-2">Main Image</h2>
                                        <img class="w-96 px-4" src="{{ $book->image }}" alt="">
                                    </div>
                                </div>

                                <div class="flex flex-col items-center py-4">
                                    <h2 class="text-xl font-bold mx-2">book Title</h2>
                                    <h3> {{ $book->title }} </h3>
                                </div>
                                {{-- <div class="flex flex-col items-center py-4">
                                    <h2 class="text-xl font-bold mx-2">ISBN Number</h2>
                                    <h3> {{ $book->isbn }} </h3>
                                </div> --}}
                                <div class="flex flex-col items-center py-4">
                                    <h2 class="text-xl font-bold mx-2">Category</h2>
                                    <h3> {{ $book->categories->name }} </h3>
                                    <h3> {{ $book->grades->name }} </h3>
                                </div>



                                <div class="flex flex-col py-4 ">
                                    <h2 class="text-xl text-center font-bold  mx-2 ">Book Description</h2>
                                    <div class="px-40 mt-4 text-lg text-center">
                                        {!! $book->desc !!}
                                    </div>
                                </div>

                                <div class="flex flex-col py-4 ">
                                    <h2 class="text-xl text-center font-bold  mx-2 ">Book Order Link</h2>
                                    <div class="px-40 mt-4 text-lg text-center">
                                        {{ $book->link }}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Main Content Section -->
    </section>
@endsection

@section('custom-js')
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Datatables CSS CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <!-- Sweet Alert2 CDN -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $(document).ready(function() {

        })
    </script>
@endsection
