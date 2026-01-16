<x-layout>
    <div>
        {{-- section banner area --}}
        <div class="banner-area counseling-banner">
            <h1>Counseling</h1>
        </div>

        {{-- Content area --}}
        <div class="content-wrapper">
            <div class="container mx-2 my-5">
                <div class="row g-5">
                    {{-- Description section --}}
                    <div class="col-5">
                        <p style="text-align: justify;">
                            The dedicated team of counselors at Overseas Uni is intimately familiar with every stage of the study abroad journey. 
                            We are here to provide seamless assistance from your very first step until the day you are successfully enrolled at your chosen university.
                            We find that while the administrative tasks—like documentation and application processing—are straightforward, students often find making the right decision the most challenging part. 
                            Selecting your overseas education path is an extremely critical commitment to your future. 
                            Therefore, we strongly encourage our students to begin by engaging in thorough self-discovery. 
                            By understanding your core personality traits and inherent capabilities, we can accurately refine the potential global careers and courses that align perfectly with you. 
                            This systematic approach allows us to streamline the numerous available options, ensuring we quickly narrow in on your preferred choice. 
                            This ultimately saves you valuable time and significant financial resources that might otherwise be spent on a less suitable educational path.
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

<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        speed: 700,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 3000,

        },
    });
</script>

</x-layout>