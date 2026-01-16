<x-layout>
    <div>
        {{-- section banner area --}}
        <div class="banner-area contact-banner">
            <h1>Contact Us</h1>
        </div>

        {{-- Content area --}}
        <div class="content-area m-5">
            {{-- contact section --}}
            <div class="contact-wrapper p-2 d-flex">
                <div class="row">
                    <div class="contact-form col-lg-7">
                        <form>
                            @csrf
                            <div class="row">
                                <div class="form-group mx-4 my-1 col-lg-12">
                                    <i class='bx bxs-user'></i>
                                    <input type="text" name='name' class="form-control" id="name" placeholder="Name" required>
                                </div>
                                <div class="form-group mx-4 my-1 col-lg-12">
                                    <i class='bx bxs-phone' ></i>
                                    <input type="text" name='number' class="form-control" id="number" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group mx-4 my-1 col-lg-12">
                                    <i class='bx bxs-envelope' ></i>
                                    <input type="text" name='email' class="form-control" id="email" placeholder="Email" required>
                                </div>
                                <div class="form-group mx-4 my-1 col-lg-12">
                                    <textarea type="text" name='message' class="form-control" id="message" rows="6" style="height:120px;padding-left:4px;" placeholder="Message" required></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>