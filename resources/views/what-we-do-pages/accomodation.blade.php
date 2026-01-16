<x-layout>

    <style>

        .content-wrapper {
            max-width: 1500px;  
            margin: 0 auto;
        }


        /* --- Slider Layout (Text + Image Side-by-Side) --- */
        .slider-content {
            display: flex;
            align-items: center;
            margin:0 auto;
            gap: 30px;
            width: 1200px !important;;
        }

        /* Shorter text width */
        .slider-content p {
            flex: 0.5; 
            text-align: justify;
        }

        .slider-content p strong {
            font-size: 1.2rem;
        }

        .slider-content img {
            flex: 0.5; 
            width: 550px;
            border-radius: 10px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: var(--secondaryColor);
            font-weight: bold;
            font-size: 20px, !important;
            transform: translateY(-50%);
            transition: var(--transition);
        }

        .swiper-button-next:hover, 
        .swiper-button-prev:hover {
            color: black;         /* darker on hover */
        }

        /* --- Mobile Responsive Fix --- */
        @media (max-width: 768px) {
            .slider-content {
                flex-direction: column;
                text-align: center;
            }

            .slider-content p {
                flex: none;
                width: 100%;
            }

            .slider-content img {
                max-width: 100%;
            }
        }

        
    </style>

    <div>

        {{-- Banner --}}
        <div class="banner-area accomo-banner">
            <h1>Accommodation Arrangement</h1>
        </div>

        {{-- Main Content --}}
        <div class="content-wrapper my-5">
            <div class="container">

                {{-- On-Campus & Off-Campus Section --}}
                <div class="row mb-5 align-item-center">

                    <!-- ON CAMPUS -->
                    <div class="col-md-6">
                        <h3 class="pb-2">On-Campus Accommodation Arrangement</h3>
                        <p style="text-align: justify;">
                            Enjoy the convenience of our service, which includes complimentary on-campus hostel
                            arrangements wherever you choose to study. 
                            We ensure they meet campus rules and quality standards, guaranteeing you a better and
                            safer experience. Contact us or speak with a MyEducation counselor for full details.
                        </p>
                    </div>

                    <!-- OFF CAMPUS -->
                    <div class="col-md-6">
                        <h3 class="pb-2">Off-Campus Accommodation Arrangement</h3>
                        <p style="text-align: justify;">
                            Our off-campus accommodation options are carefully screened to match your preferences
                            and lifestyle. We verify safety, location convenience, and pricing to ensure you enjoy 
                            a comfortable, secure living environment. Contact us or speak with a MyEducation counselor 
                            for full details.
                        </p>
                    </div>

                </div>

                {{-- Slider Section --}}
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h2 class="pb-3 text-center">Peace of Mind: How We Select Your Ideal Hostel</h2>

                        <!-- Swiper -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">

                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <div class="slider-content">
                                        <p>
                                            <strong>Unwavering Security and Safety</strong><br>
                                            Your safety is our absolute highest priority. 
                                            When selecting your accommodation, we ensure security is paramount. 
                                            Most of our partner premises feature a robust, three-tiered security system, which typically includes a manned entrance guard post, access card control at the lobby, and access card security for lift access, giving you complete peace of mind.
                                        </p>
                                        <img src="{{ asset('assets/img/slide_image/safety_image.jpg') }}" alt="">
                                    </div>
                                </div>

                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <div class="slider-content">
                                        <p>
                                            <strong>Thriving Student Community</strong><br>
                                            We believe in the power of connection and community—'Birds of a feather flock together.' 
                                            We identify areas where you can thrive alongside like-minded peers. 
                                            Our recommended locations are specifically chosen to be student-friendly and will be selected based on your preferences and interests to support your lifestyle.
                                        </p>
                                        <img src="{{ asset('assets/img/slide_image/community.jpg') }}" alt="">
                                    </div>
                                </div>

                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <div class="slider-content">
                                        <p>
                                            <strong>Ultimate Local Convenience</strong><br>
                                            We understand a student's daily life, and convenience is key. 
                                            All our hostel options are located in vibrant townships where your daily essentials and needs are available within easy walking distance. 
                                            Everything you need to manage your day is right at your doorstep.
                                        </p>
                                        <img src="{{ asset('assets/img/slide_image/convenience_store.jpg') }}" alt="">
                                    </div>
                                </div>

                                <!-- Slide 4 -->
                                <div class="swiper-slide">
                                    <div class="slider-content">
                                        <p>
                                            <strong>Fitness and Fun</strong><br>
                                            Student life shouldn't be all work and no play. We prioritize facilities that support a healthy mind and body. 
                                            Our partner accommodations emphasize physical well-being by providing features for recreation and fitness, such as swimming pools, gymnasiums, basketball courts, parks, or other engaging spaces.
                                        </p>
                                        <img src="{{ asset('assets/img/slide_image/fitness_asia.webp') }}" alt="">
                                    </div>
                                </div>

                                <!-- Slide 5 -->
                                <div class="swiper-slide">
                                    <div class="slider-content">
                                        <p>
                                            <strong>Transparent and Fair Pricing</strong><br>
                                            You should never have to worry about overpaying. 
                                            Our pricing is meticulously vetted to ensure fairness. 
                                            All quoted prices are first screened by our real estate partners, then carefully benchmarked against current market prices before being presented to you, guaranteeing you a competitive and honest rate.
                                        </p>
                                        <img src="{{ asset('assets/img/slide_image/Hotel-Room-Pricing.png') }}" alt="">
                                    </div>
                                </div>                              
                            </div>

                            {{-- <div class="swiper-pagination"></div> --}}
                            <!-- Navigation Buttons -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    {{-- Swiper JS --}}
    <script>
    var swiper = new Swiper(".mySwiper", {
            loop: true,
            speed: 700,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 3000,
            }
        });
    </script>

</x-layout>
