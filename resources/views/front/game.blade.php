@extends('layouts.masterpage')
@section('seo')
    <title>GameFun | Games</title> 
    <meta name="description" content="This is gaming zone website where all type of games are display">
    <meta name="keywords" content="This is gaming zone website where all type of games are display">
@endsection
@section('banner')
  <h1 class="font-semibold text-white text-xl">Play Free Online Games On Mobile & Tablet</h1>
@endsection
@section('content')

    <!-- ====== Blog Section Start -->
    <section class="pt-20  pb-10 lg:pb-10">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
            @foreach($game as $key)
                <div class="w-full md:w-2/12 lg:w-2/12 px-2">
                    <div class="mb-5 group wow fadeInUp" data-wow-delay=".1s">
                        <div class="rounded overflow-hidden mb-2">
                            <a href="{{route('game-detail',['id'=>$key->slug])}}" class="block">
                                <img src="{{asset('assets/images/gamedetail/' .$key->image)}}" alt="image" class="w-full transition group-hover:scale-125 group-hover:rotate-6" />
                            </a>
                        </div>
                        <div>
                            <p class="text-base text-body-color">
                                <a href="{{route('game-detail',['id'=>$key->slug])}}" class="font-semibold text-lg sm:text-lg lg:text-lg xl:text-lg mb-4 inline-block text-dark hover:text-primary">{{$key->name}} </a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $game->links('pagination::tailwind') }}
                </div>
            </div>
            
        </div>
    </section>
  
   @endsection