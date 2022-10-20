@extends('layouts.masterpage')
@section('seo')
<title>GameFun | {{$gamedetail->meta_title}}</title>
<meta name="description" content="{{$gamedetail->meta_description}}">
<meta name="keywords" content="{{$gamedetail->meta_tag}}">
@endsection 
@section('banner')
<h1 class="font-semibold text-white text-4xl">{{$gamedetail->name}}</h1>
@endsection
@section('content')

 <!-- ====== Blog Section Start -->
 <section class="pt-5  pb-5 lg:pb-10">
        <div class="container">
            <div class="flex flex-wrap justify-center ">
                <div class="p-10 w-5/6 h-full ">
                    <iframe src="{{$gamedetail->embeded}}" width="650" height="420" scrolling="none" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 pb-5 lg:pb-10">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                @foreach($game as $key )
                <div class="w-full md:w-2/12 lg:w-2/12 px-2">
                    <div class="mb-5 group wow fadeInUp" data-wow-delay=".1s">
                        <div class="rounded overflow-hidden mb-2">
                            <a href="{{route('game-detail',['id'=>$key->slug])}}" class="block">
                                <img src="{{asset('assets/images/gamedetail/' .$key->image)}}" alt="image" class="w-full transition group-hover:scale-125 group-hover:rotate-6" />
                            </a>
                        </div>
                        <div>
                            <p class="text-base text-body-color">
                                <a href="{{route('game-detail',['id'=>$key->slug])}}" class="font-semibold text-lg sm:text-lg lg:text-lg xl:text-lg mb-4 inline-block text-dark hover:text-primary"> {{$key->name}}</a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ====== Blog Section End -->
 
@endsection