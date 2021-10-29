@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 pt-16 items-center">

        <div class="popular">
            <h2 class="tracking-wider font-semi-bold text-xl text-yellow-500">POPULAR MOVIES</h2>
            <div class="grid grid-cols-1 sm-grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-14">
                <div class="mt-8">
                    <a href="#"><img src="/img/1.jpg" class="hover:opacity-90 transition duration-500 ease-in-out"></a>

                    <div class="mt-4 font-sans">
                        <a href="#" class="text-lg mt-2">Movie Name</a>
                        <div class="flex items-center text-gray-900 text-sm mt-1">
                            <span><i class="fas fa-star text-yellow-300"></i></span>
                            <span class="ml-1">75%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 5 2020</span>
                        </div>
                        <div class="text-gray-900 mt-1">
                            <p>Action,Thriller</p>
                        </div>
                    </div>

                </div>
                
                
                </div>
            </div>
        


        <div class="Now mt-36">
            <h2 class="tracking-wider font-semi-bold text-xl text-yellow-500">NOW PLAYING</h2>
            <div class="grid grid-cols-1 sm-grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-14">
                <div class="mt-8">
                    <a href="#"><img src="/img/1.jpg" class="hover:opacity-70 transition duration-500 ease-in-out"></a>

                    <div class="mt-4 font-sans">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Movie Name</a>
                        <div class="flex items-center text-gray-900 text-sm mt-1">
                            <span><i class="fas fa-star text-yellow-300"></i></span>
                            <span class="ml-1">75%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 5 2020</span>
                        </div>
                        <div class="text-gray-900 mt-1">
                            <p>Action,Thriller</p>
                        </div>
                    </div>

                </div>
                
                
                </div>
            </div>
        </div>
@endsection