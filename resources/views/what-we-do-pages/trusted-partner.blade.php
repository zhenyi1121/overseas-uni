<x-layout>
    <div>
        {{-- section banner area --}}
        <div class="banner-area partner-banner">
            <h1>Trusted Partner</h1>
        </div>

        {{-- Content area --}}
        <div class="content-wrapper">
            <div class="container m-5">
                <div class="row g-5">
                    {{-- Description section --}}
                    <div class="col-6">
                        <h4>We ensure the highest standards of quality across our network:</h4>
                        <p style="text-align: justify;">
                            All our partner institutions across the Southeast Asian region are rigorously accredited by their respective country's National Education Board or Quality Assurance Agency. 
                            This commitment to certification guarantees the academic integrity of your degree.<br>
                            As official partners to these leading universities and colleges, Overseas Uni provides you with direct, privileged access to all the information you need, including:
                            <ul class="partner-description">
                                <li>Up-to-date scholarship details</li>
                                <li>Comprehensive fee structures</li>
                                <li>Specific entry requirements</li>
                                <li>And much more.</li>
                            </ul>
                        </p>
                        <p style="text-align: justify;">
                            Leveraging this extensive network of insider information, we are dedicated to providing you with unbiased advice and ensuring our recommendations are perfectly tailored to your individual preferences and career goals.<br>
                            With over a thousand courses available from hundreds of trusted universities and colleges across Southeast Asia, we have proudly assisted thousands of students in successfully enrolling in their education institution of choice, both locally and internationally.
                        </p>
                    </div>
                    {{-- Image section --}}
                    <div class="col-5 d-flex justify-content-center">
                        <div class="partner-img my-auto pl-1 d-block">
                            <img src="{{ asset('assets/img/slide_image/partner.png') }}" alt="" style="width:100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>