
@extends('layouts.masterpage')

@section('seo')
<title>Games | Play Free Online Games Without Downloading | Agamefun</title> 
    <meta name="description" content="Play hundreds of free online games for kids. No downloads, no registration, just fun. Math Games. Board Games. Crazy Games. Zombies Games. Sports Games. Skill Games. Tanks Games. Click here for cool games!">
    <meta name="keywords" content="1000 free games to play, online games to play with friends, best free online games, online games for pc free, crazy games, Play Free Online Games, Best Games, play high-quality browser games, Free Kids Games, Online Games for Kids, fun games">
@endsection
@section('banner')
<h1 class="font-semibold text-white text-4xl">About Us Page</h1>
@endsection
@section('content')

      <!-- ====== About Section Start -->
      <section  id="about" class="pt-20 lg:pt-[120px] pb-20 lg:pb-[120px] bg-[#f3f4fe]"  >
      <div class="container">
        <div class="bg-white wow fadeInUp" data-wow-delay=".2s">
          <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
              <div
                class="
                  lg:flex
                  items-center
                  justify-between
                  border
                  overflow-hidden
                "
              >
                <div
                  class="
                    lg:max-w-[565px]
                    xl:max-w-[640px]
                    w-full
                    py-12
                    px-7
                    sm:px-12
                    md:p-16
                    lg:py-9 lg:px-16
                    xl:p-[70px]
                  "
                >
                  <span
                    class="
                      text-sm
                      font-medium
                      text-white
                      py-2
                      px-5
                      bg-primary
                      inline-block
                      mb-5
                    "
                  >
                    About Us
                  </span>
                  <h2  class=" font-bold  text-3xl  sm:text-4xl 2xl:text-[40px] sm:leading-snug text-dark mb-6">  Best Free Online Games for Kids. </h2>
                  <p class="text-base text-body-color mb-9 leading-relaxed">
                  Agamefun is a gaming website. We've developed over 50 flash games with their distinct style and identifiable brand throughout the years. Each web game provides 4-5 hours of engaging gaming. It is a collection of difficult puzzles and board games, as well as arcades and shooters. The majority of our brand games are playable in multiplayer mode, making them even more addicting and interactive! We keep up with the times and have already made our top titles available on mobile.
                  </p>
                  <p class="text-base text-body-color mb-9 leading-relaxed">
                  You may play online on mobile without downloading anything - simply visit agamefun.com from your tablet or smartphone to get a library of free amazing games. Our young and creative staff manages agamefun.com. So what are you waiting for play amazing games on agamefun.com. Follow us on Facebook, Twitter, Instagram, and Tiktok, or subscribe to our YouTube channel for new game videos and walkthroughs to stay up to speed on our new releases and promos. Contact us If you have any problems to report or simply have a query, please email us at agamefun@gmail.com.
                  </p>
                   
                </div>
                <div class="text-center">
                  <div class="relative inline-block z-10">
                    <img  src="{{asset('assets/images/about/about-image.svg')}}" alt="image" class="mx-auto lg:ml-auto" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== About Section End -->

  @endsection