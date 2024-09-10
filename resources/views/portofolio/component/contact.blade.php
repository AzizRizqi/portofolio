@section('content')
    <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">How can you communicate?</p>
            <h6 class="section-title mb-5">Contact Me</h6>
            <!-- contact form -->
            <form action="{{ route('contact.store') }}" class="contact-form col-md-10 col-lg-8 m-auto" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input type="text" id="name" name="name" size="50" class="form-control"
                            placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email"
                            required>
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="message" id="message" rows="6" class="form-control" placeholder="Write Something"></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">
                    </div>
                </div>
            </form><!-- end of contact form -->
        </div><!-- end of container -->

    </section>
