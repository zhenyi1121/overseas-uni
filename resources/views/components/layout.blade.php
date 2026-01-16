    <!-- resources/views/components/layout.blade.php -->
    <!DOCTYPE html>
    <html lang="en">

    <head>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Overseas.Uni</title>
        

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=League+Spartan:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'></link>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/navbar.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/footer.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css') }}">
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/navbar.js') }}"></script>
        
        
        

    {{-- Main Content of Page --}}
    <body>

        {{-- Navbar Section --}}
        <x-navbar></x-navbar>

        {{-- Page Body Section --}}
        <main>
            {{ $slot }} <!-- This is where the page-specific content goes -->
        </main>

        {{-- Footer Section --}}
        <footer>
            <!-- Footer content -->
            <x-footer></x-footer>
        </footer>
        
    </body>
    </html>