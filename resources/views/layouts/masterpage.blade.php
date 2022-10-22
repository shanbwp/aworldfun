<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('seo')
    <link rel="shortcut icon" href="{{asset('assets/images/setting/' .$gs->fav_icon)}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.css')}}" />

    <!-- ==== WOW JS ==== -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <meta name="google-site-verification" content="iuYnHEaZOcbmcLIWe9FvenNAjj_xwbr7N530Gic_UU0" />
     
</head>

<body>
    <!-- ====== Navbar Section Start -->
    <div class="ud-header bg-transparent absolute top-0 left-0 z-40 w-full flex items-center">
        <div class="container">
            <div class="flex -mx-4 items-center justify-between relative">
                <div class="px-4 w-60 max-w-full">
                    <a href="{{route('home')}}" class="navbar-logo w-full block py-5">
                        <img src="{{asset('assets/images/setting/' .$gs->logo)}}" alt="logo" class="w-full header-logo" />
                    </a>
                </div>
                <div class="flex px-4 justify-between items-center w-full">
                    <div>
                        <button id="navbarToggler" class="block absolute right-4  top-1/2  -translate-y-1/2  lg:hidden  focus:ring-2 ring-primary  px-3  py-[6px] rounded-lg">
                            <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                            <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                            <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                        </button>
                        <nav id="navbarCollapse" class="absolute   py-5   lg:py-0 lg:px-4    xl:px-6  bg-white  lg:bg-transparent shadow-lg  rounded-lg  max-w-[250px] w-full lg:max-w-full lg:w-full   right-4   top-full  hidden  lg:block lg:static lg:shadow-none">
                            <ul class="blcok lg:flex">
                                <li class="relative group">
                                    <a href="{{route('home')}}" class="ud-menu-scroll text-base text-dark  lg:text-white  lg:group-hover:opacity-70 lg:group-hover:text-white  group-hover:text-primary  py-2  lg:py-6 lg:inline-flex lg:px-0  flex  mx-8  lg:mr-0"> Home</a>
                                </li>
                                @foreach($cats as $category)
                                <li class="relative group">
                                    <a href="{{route('category-game',$category->slug)}}" class="ud-menu-scroll text-base text-dark  lg:text-white  lg:group-hover:opacity-70 lg:group-hover:text-white  group-hover:text-primary  py-2  lg:py-6 lg:inline-flex lg:px-0  flex  mx-8  lg:mr-0"> {{$category->name}} </a>
                                </li>
                                @endforeach

                                
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- ====== Banner Section Start -->
    <div class="relative  z-10 pt-[120px] md:pt-[130px] lg:pt-[160px] pb-[100px] bg-primary overflow-hidden">
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">
                    <div class="text-center">
                        @yield('banner')

                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="absolute top-0 left-0 z-[-1]">
                <svg width="495" height="470" viewBox="0 0 495 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
                    <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
                    <path d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z" stroke="white" stroke-opacity="0.08" stroke-width="12" />
                </svg>
            </span>
            <span class="absolute top-0 right-0 z-[-1]">
                <svg width="493" height="470" viewBox="0 0 493 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
                    <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
                    <path d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z" stroke="white" stroke-opacity="0.06" stroke-width="13" />
                </svg>
            </span>
        </div>
    </div>
    @yield('content')
    <footer class="bg-black pt-2 relative z-10 wow fadeInUp" data-wow-delay=".15s">


        <div class="border-t border-opacity-40 py-8 mt-12 lg:mt-[60px]">
            <div class="container">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full md:w-2/3 lg:w-1/2 px-4">
                        <div class="my-1">
                            <div class="flex items-center  justify-center md:justify-start -mx-3">
                                <a href="{{route('about')}}" class="text-base text-[#f3f4fe]   hover:text-primary px-3"> About Us </a>
                                <a href="{{route('contact')}}" class="text-base text-[#f3f4fe]   hover:text-primary px-3"> Contact Us </a>
                                <a href="{{route('privacypolicy')}}" class="text-base text-[#f3f4fe] hover:text-primary px-3"> Privacy policy </a>
                                <a href="{{route('termconditions')}}" class="text-base text-[#f3f4fe]  hover:text-primary px-3"> Terms of service </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/4 lg:w-1/4 px-4">
                        <div class="flex items-center md:justify-center wow fadeInUp" data-wow-delay=".1s">
                            <div class="flex items-center">
                                <a href="{{$gs->fb_url}}" class="mr-4 mb-2">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16Z" fill="#4064AC" />
                                        <path d="M19.439 14.4H18.1992H17.7564V13.8839V12.2839V11.7677H18.1992H19.1291C19.3726 11.7677 19.5719 11.5613 19.5719 11.2516V8.51613C19.5719 8.23226 19.3947 8 19.1291 8H17.5128C15.7638 8 14.5461 9.44516 14.5461 11.5871V13.8323V14.3484H14.1033H12.5978C12.2878 14.3484 12 14.6323 12 15.0452V16.9032C12 17.2645 12.2435 17.6 12.5978 17.6H14.059H14.5018V18.1161V23.3032C14.5018 23.6645 14.7454 24 15.0996 24H17.1807C17.3136 24 17.4243 23.9226 17.5128 23.8194C17.6014 23.7161 17.6678 23.5355 17.6678 23.3806V18.1419V17.6258H18.1328H19.1291C19.4169 17.6258 19.6383 17.4194 19.6826 17.1097V17.0839V17.0581L19.9925 15.2774C20.0147 15.0968 19.9925 14.8903 19.8597 14.6839C19.8154 14.5548 19.6161 14.4258 19.439 14.4Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="{{$gs->twitter_url}}" class="mr-4 mb-2">
                                    <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M32 16.7347C32 25.5713 24.8366 32.7347 16 32.7347C7.16344 32.7347 0 25.5713 0 16.7347C0 7.89818 7.16344 0.734741 16 0.734741C24.8366 0.734741 32 7.89818 32 16.7347ZM23.6036 12.8349C24.3771 12.7431 25.1147 12.5375 25.8004 12.2334C25.2878 13.0004 24.6395 13.6738 23.8917 14.2128C23.8991 14.3765 23.9028 14.5417 23.9028 14.7074C23.9028 19.7617 20.0558 25.5892 13.0213 25.5892C10.8616 25.5892 8.85088 24.9563 7.15927 23.8708C7.45789 23.9064 7.76307 23.9244 8.07111 23.9244C9.8634 23.9244 11.5122 23.3132 12.8214 22.2873C11.1474 22.2562 9.73534 21.1504 9.24876 19.6313C9.48206 19.6758 9.72136 19.6995 9.96836 19.6995C10.3166 19.6995 10.6552 19.653 10.9757 19.5652C9.22651 19.2141 7.90768 17.6685 7.90768 15.8154C7.90768 15.7995 7.90768 15.7832 7.90796 15.767C8.42335 16.0542 9.01346 16.2262 9.64007 16.2458C8.61444 15.5602 7.93876 14.3891 7.93876 13.0625C7.93876 12.3618 8.12758 11.7044 8.45672 11.1396C10.3431 13.4541 13.1613 14.9766 16.3398 15.1361C16.2742 14.856 16.2402 14.5642 16.2402 14.2644C16.2402 12.1527 17.953 10.44 20.0647 10.44C21.1653 10.44 22.1593 10.9043 22.8569 11.6473C23.7277 11.4759 24.5466 11.1579 25.2856 10.7195C24.9995 11.6131 24.3934 12.3618 23.6036 12.8349Z" fill="#55ACEE" />
                                    </svg>
                                </a>
                                <a href="{{$gs->linkedin_url}}" class="mb-2">
                                    <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M32.7861 16C32.7861 24.8366 25.6227 32 16.7861 32C7.94958 32 0.786133 24.8366 0.786133 16C0.786133 7.16344 7.94958 0 16.7861 0C25.6227 0 32.7861 7.16344 32.7861 16ZM8.50669 8.82376C8.50669 7.69545 9.36262 6.83666 10.6709 6.83666C11.9795 6.83666 12.7835 7.69545 12.8089 8.82376C12.8089 9.92811 11.9795 10.8117 10.6455 10.8117H10.6207C9.33781 10.8117 8.50669 9.92811 8.50669 8.82376ZM26.3457 23.884V17.2875C26.3457 13.7551 24.4593 12.1112 21.9431 12.1112C19.9109 12.1112 19.0045 13.2292 18.4963 14.0113V12.3813H14.6712C14.7226 13.4602 14.6712 23.8837 14.6712 23.8837H18.496V17.4595C18.496 17.1147 18.5219 16.7733 18.6226 16.5274C18.8998 15.8395 19.5276 15.129 20.5843 15.129C21.969 15.129 22.5212 16.1843 22.5212 17.7296V23.884H26.3457ZM18.4963 14.0113V14.0489H18.4709C18.4745 14.0424 18.4793 14.0358 18.4841 14.0292L18.4841 14.0291C18.4883 14.0232 18.4926 14.0173 18.4963 14.0113ZM8.73421 23.8839H12.5575V12.3812H8.73421V23.8839Z" fill="#007AB9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/3 lg:w-1/4 px-4 pb-4">
                        <div class="flex justify-center  md:justify-end my-1">
                            <p class="text-base text-[#f3f4fe]">
                                Designed and Developed by
                                <a href="https://logicssol.com/" rel="nofollow noopner" target="_blank" class="text-primary  hover:underline"> LogicsSol </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a href="javascript:void(0)" class="hidden  items-center  justify-center  bg-primary text-white  w-10 h-10  rounded-md  fixed  bottom-8  right-8  left-auto  z-[999]  hover:bg-dark  back-to-top  shadow-md  transition duration-300 ease-in-out">
        <span class="w-3 h-3 border-t border-l  border-white rotate-45 mt-[6px]"></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== All Scripts -->
    <script src="{{asset('/assets/js/main.js')}}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DJJKDH1E6T"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-DJJKDH1E6T');
    </script>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXR2S52" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
</body>

</html>