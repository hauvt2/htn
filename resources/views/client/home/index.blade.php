
@extends('client.layouts.master')
@section('content')
<div class="site-blocks-cover overlay" style="background-image: url(public/frontend/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">

      <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

        <div class="row justify-content-center mb-4">
          <div class="col-md-8 text-center">
            <h1>We Love To Build <span class="typed-words"></span></h1>
            <p class="lead mb-5">Free Web Template by <a href="#" target="_blank">Colorlib</a></p>
            <div><a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="btn btn-primary btn-md">{{__('user.watch-video')}}</a></div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>  

<section class="site-section" id="product-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-md-8 text-center">
        <h2 class="text-black h1 site-section-heading text-center">{{__('user.our products')}}</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, itaque neque, delectus odio iure explicabo.</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      
      @foreach($new_product as $new)
      <div class="col-md-6 col-lg-4">
        <a href="{{Route('product-detail')}}" class="media-1" data-fancybox="gallery">
          <img style="height: 420px;  width: 100%; 
    " src="public/frontend/images/{{$new->images}}" alt="Image" class="img-fluid">
          <div class="media-1-content">
            <h2>Simple Woman</h2>
            <span class="category">Branding</span>
          </div>
        </a>
      </div>
      @endforeach
      {{-- <div class="col-md-6 col-lg-4">
        <a href="{{Route('product-detail')}}" class="media-1" data-fancybox="gallery">
          <img src="{{('public/frontend/images/img_3.jpg')}}" alt="Image" class="img-fluid">
          <div class="media-1-content">
            <h2>Fruits</h2>
            <span class="category">Website</span>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4">
        <a href="{{('public/frontend/images/img_4.jpg')}}" class="media-1" data-fancybox="gallery">
          <img src="{{('public/frontend/images/img_4.jpg')}}" alt="Image" class="img-fluid">
          <div class="media-1-content">
            <h2>Design Material</h2>
            <span class="category">Web Application</span>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="{{('public/frontend/images/img_5.jpg')}}" class="media-1" data-fancybox="gallery">
          <img src="{{('public/frontend/images/img_5.jpg')}}" alt="Image" class="img-fluid">
          <div class="media-1-content">
            <h2>Handy Food</h2>
            <span class="category">Branding</span>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="{{('public/frontend/images/img_6.jpg')}}" class="media-1" data-fancybox="gallery">
          <img src="{{('public/frontend/images/img_6.jpg')}}" alt="Image" class="img-fluid">
          <div class="media-1-content">
            <h2>Cat With Cup</h2>
            <span class="category">Website</span>
          </div>
        </a>
      </div>

 --}}
    </div>
    {{$new_product->links()}}
  </div>
</section>

<section class="site-section testimonial-wrap">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h2 class="text-black h1 site-section-heading text-center">Testimonials</h2>
      </div>
    </div>
  </div>
  <div class="slide-one-item home-slider owl-carousel">
    <div>
      <div class="testimonial">

        <blockquote class="mb-5">
          <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
        </blockquote>

        <figure class="mb-4 d-flex align-items-center justify-content-center">
          <div><img src="{{('public/frontend/images/person_3.')}}jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
          <p>John Smith</p>
        </figure>
      </div>
    </div>
    <div>
      <div class="testimonial">

        <blockquote class="mb-5">
          <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
        </blockquote>
        <figure class="mb-4 d-flex align-items-center justify-content-center">
          <div><img src="{{('public/frontend/images/person_2.')}}jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
          <p>Christine Aguilar</p>
        </figure>

      </div>
    </div>

    <div>
      <div class="testimonial">

        <blockquote class="mb-5">
          <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
        </blockquote>
        <figure class="mb-4 d-flex align-items-center justify-content-center">
          <div><img src="{{('public/frontend/images/person_4.')}}jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
          <p>Robert Spears</p>
        </figure>


      </div>
    </div>

    <div>
      <div class="testimonial">

        <blockquote class="mb-5">
          <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
        </blockquote>
        <figure class="mb-4 d-flex align-items-center justify-content-center">
          <div><img src="{{('public/frontend/images/person_5.')}}jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
          <p>Bruce Rogers</p>
        </figure>

      </div>
    </div>

  </div>
</section>

<section class="site-section border-bottom" id="services-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 text-center" data-aos="fade-up">
        <h2 class="text-black h1 site-section-heading text-center">Our Services</h2>
      </div>
    </div>
    <div class="row align-items-stretch">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary icon-laptop2"></span></div>
          <div>
            <h3>Web Design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary icon-shopping_cart"></span></div>
          <div>
            <h3>eCommerce</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary icon-question_answer"></span></div>
          <div>
            <h3>Web Applications</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary icon-format_paint"></span></div>
          <div>
            <h3>Branding</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary icon-extension"></span></div>
          <div>
            <h3>Copy Writing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary icon-phonelink"></span></div>
          <div>
            <h3>Mobile Applications</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="site-section" id="about-section">
  <div class="container">
    <div class="row mb-5">

      <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
        <img src="{{('public/frontend/images/about_1.j')}}pg" alt="Image" class="img-fluid rounded">
      </div>
      <div class="col-md-6 order-md-1" data-aos="fade">

        <div class="row">

          <div class="col-12">
            <div class="text-left pb-1">
              <h2 class="text-black h1 site-section-heading">{{__('user.about-us')}}</h2>
            </div>
          </div>
          <div class="col-12 mb-4">
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet incidunt magnam corrupti, odit eos harum quaerat nostrum voluptatibus aspernatur eligendi accusantium cum, impedit blanditiis voluptate commodi doloribus, nemo dignissimos recusandae.</p>
          </div>
          <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
            <div class="unit-4">
              <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-phonelink"></span></div>
              <div>
                <h3>Web &amp; Mobile Specialties</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                <p class="mb-0"><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
            <div class="unit-4">
              <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-extension"></span></div>
              <div>
                <h3>Intuitive Thinkers</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                <p class="mb-0"><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="site-section border-bottom" id="team-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <h2 class="text-black h1 site-section-heading">{{__('user.our team')}}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
        <div class="person text-center">
          <img src="{{('public/frontend/images/person_2.')}}jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
          <h3>John Rooster</h3>
          <p class="position text-muted">Co-Founder, President</p>
          <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
          <ul class="ul-social-circle">
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="#"><span class="icon-linkedin"></span></a></li>
            <li><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
        <div class="person text-center">
          <img src="{{('public/frontend/images/person_3.')}}jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
          <h3>Tom Sharp</h3>
          <p class="position text-muted">Co-Founder, COO</p>
          <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
          <ul class="ul-social-circle">
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="#"><span class="icon-linkedin"></span></a></li>
            <li><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
        <div class="person text-center">
          <img src="{{('public/frontend/images/person_4.')}}jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
          <h3>Winston Hodson</h3>
          <p class="position text-muted">Marketing</p>
          <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
          <ul class="ul-social-circle">
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="#"><span class="icon-linkedin"></span></a></li>
            <li><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>




<section class="site-section bg-light" id="contact-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2 class="text-black h1 site-section-heading">{{__('user.contact')}}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 mb-5">



        <form action="#" class="p-5 bg-white">

          <h2 class="h4 text-black mb-5">Contact Form</h2> 

          <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
              <label class="text-black" for="fname">First Name</label>
              <input type="text" id="fname" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="text-black" for="lname">Last Name</label>
              <input type="text" id="lname" class="form-control">
            </div>
          </div>

          <div class="row form-group">

            <div class="col-md-12">
              <label class="text-black" for="email">Email</label> 
              <input type="email" id="email" class="form-control">
            </div>
          </div>

          <div class="row form-group">

            <div class="col-md-12">
              <label class="text-black" for="subject">Subject</label> 
              <input type="subject" id="subject" class="form-control">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <label class="text-black" for="message">Message</label> 
              <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
            </div>
          </div>


        </form>
      </div>
      <div class="col-md-5">

        <div class="p-4 mb-3 bg-white">
          <p class="mb-0 font-weight-bold">Address</p>
          <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

          <p class="mb-0 font-weight-bold">Phone</p>
          <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

          <p class="mb-0 font-weight-bold">Email Address</p>
          <p class="mb-0"><a href="#">youremail@domain.com</a></p>


        </div>
        <div class=""><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7212996036656!2d105.79081251501236!3d21.003806086011895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acaf9b434deb%3A0x9f146b741b804a00!2zMjg5YiBLaHXhuqV0IER1eSBUaeG6v24sIFRydW5nIEhvw6AsIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1586770258374!5m2!1svi!2s" width="100%" height="363" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>
    </div>
  </div>
</div>
</section>

<a href="#" class="bg-primary py-5 d-block">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md10"><h2 class="text-white">Let's Get Started</h2></div>
    </div>
  </div>  
</a>
@endsection
