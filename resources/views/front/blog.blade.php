@extends('layouts.masterpage')
@section('seo')
<title>Kids Games | Free Online Exciting Games | Agamefun</title>
<meta name="description" content="Play free games for kids online at agamefun.com. A new kid's game is added daily. Pick your favorite game, and have fun! All games are free, with no hassle, and no registration.">
<meta name="keywords" content="puzzle games, action games, sports games, flash games, adventure games, multiplayer games, Online Video Games, Popular Games Online, games, video games, video games 2022">
@endsection

@section('banner')
<h1 class="font-semibold text-white text-4xl">Online Popular Games to Play</h1>
@endsection
@section('content')


<!-- ====== Blog Section Start -->
<section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
  <div class="container">
    <div class="flex flex-wrap -mx-4">
    @foreach($blogs as $key)
      <div class="w-full md:w-1/2 lg:w-1/3 px-4">
        <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
          <div class="rounded overflow-hidden mb-8">
            <a href="{{route('blog-detail', ['id'=>$key->slug])}}" class="block">
              <img src="{{asset('assets/images/blog/' .$key->image)}}" alt="Kids Games | Free Online Exciting Games | Agamefun" class="w-full transition group-hover:scale-125 group-hover:rotate-6"/>
            </a>
          </div>
          <div>
            <span class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">{{$key->date}}</span>
            <h3>
              <a href="{{route('blog-detail', ['id'=>$key->slug])}}" class="font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark  hover:text-primary">
                {{$key->name}}</a></h3>
            <p class="text-base text-body-color">
             {{$key->short_description}}
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