<x-layout>
    <div>
        {{-- section banner area --}}
        <div class="banner-area application-banner">
            <h1>Application Services</h1>
        </div>

        {{-- Content area --}}
        <div class="content-wrapper">
            <div class="container mx-2 my-5">
                <div class="row g-5">
                    {{-- Description section --}}
                    <div class="col-5">
                        <p style="text-align: justify;">
                            <h3></h3>
                        </p>
                    </div>
                    {{-- Slider section --}}
                    <div class="col-7 justify-content-center">
                        <h3 class="pb-2">Ready to Decide? How to Arrange Your Professional Counseling</h3>

                        <!-- Swiper Wrapper -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">

                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <div class="slider-content">
                                        <p><strong>Step 1: </strong>Complete your Career Test in Overseas Uni and get your Holland Code.</p>
                                        <img src="{{ asset('assets/img/slide_image/counseling-step-1.jpg') }}" alt="" style="width:100%;">
                                    </div>
                                </div>

                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <div class="slider-content">
                                        <p><strong>Step 2: </strong>Consult our experienced counselors for a personalized assessment.</p>
                                        <img src="{{ asset('assets/img/slide_image/counseling-step-2.jpg') }}" alt="" style="width:100%;">
                                    </div>
                                </div>

                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <div class="slider-content">
                                        <p><strong>Step 3: </strong>Detailed Comparison of Available Institutions and Academic Offerings.</p>
                                        <img src="{{ asset('assets/img/slide_image/counseling-step-3.jpg') }}" alt="" style="width:100%;">
                                    </div>
                                </div>

                            </div>

                            <!-- Optional: Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>