<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ScriptBloom - Bespoke Artistic Services</title>
  <link rel="icon" href="favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --bs-primary: rgb(35, 125, 105);
      --bs-primary-light: rgb(230, 245, 240);
      --bs-primary-dark: rgb(20, 75, 60);
      --bs-secondary: rgb(190, 165, 140);
      --bs-accent: rgb(205, 145, 125);
      --bs-text-dark: rgb(30, 30, 30);
      --bs-text-light: rgb(255, 255, 255);
      --bs-background-muted: rgb(250, 250, 250);
      --bs-border-radius: 20px;
      --bs-box-shadow-medium: 0 4px 12px rgba(0,0,0,0.15);
      --bs-section-padding-y: 6rem; /* 96px */
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: var(--bs-text-dark);
      line-height: 1.7;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      color: var(--bs-text-dark);
    }

    .btn-primary {
      background-color: var(--bs-primary);
      border-color: var(--bs-primary);
      border-radius: var(--bs-border-radius);
      padding: 0.75rem 1.75rem;
      transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
    }
    .btn-primary:hover {
      background-color: var(--bs-primary-dark);
      border-color: var(--bs-primary-dark);
      transform: translateY(-2px);
    }

    .btn-outline-light {
      border-color: var(--bs-text-light);
      color: var(--bs-text-light);
      border-radius: var(--bs-border-radius);
      padding: 0.75rem 1.75rem;
      transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
    }
    .btn-outline-light:hover {
      background-color: var(--bs-text-light);
      color: var(--bs-primary);
      transform: translateY(-2px);
    }

    .btn-white-text-primary {
        background-color: var(--bs-text-light);
        color: var(--bs-primary);
        border: 1px solid var(--bs-text-light);
        border-radius: var(--bs-border-radius);
        transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
    }
    .btn-white-text-primary:hover {
        background-color: var(--bs-primary-light);
        color: var(--bs-primary-dark);
        border-color: var(--bs-primary-light);
        transform: translateY(-2px);
    }

    .section-py {
      padding-top: var(--bs-section-padding-y);
      padding-bottom: var(--bs-section-padding-y);
    }

    .card {
        border-radius: var(--bs-border-radius);
        box-shadow: var(--bs-box-shadow-medium);
        border: none;
        overflow: hidden;
    }

    .card-hover-bg-shift {
        transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .card-hover-bg-shift:hover {
        background-color: var(--bs-background-muted);
        transform: translateY(-5px);
    }

    .img-hover-effect-lighten {
        transition: filter 0.3s ease;
    }
    .img-hover-effect-lighten:hover {
        filter: brightness(1.1);
    }

    .form-control {
      border-radius: var(--bs-border-radius);
      box-shadow: var(--bs-box-shadow-medium);
      border: 1px solid rgba(0,0,0,0.1);
      padding: 0.75rem 1.25rem;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .form-control:focus {
      border-color: var(--bs-primary);
      box-shadow: 0 0 0 0.25rem rgba(var(--bs-primary-rgb), .25);
    }

    .form-select {
       border-radius: var(--bs-border-radius);
       box-shadow: var(--bs-box-shadow-medium);
       border: 1px solid rgba(0,0,0,0.1);
       padding: 0.75rem 1.25rem;
       transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .form-select:focus {
      border-color: var(--bs-primary);
      box-shadow: 0 0 0 0.25rem rgba(var(--bs-primary-rgb), .25);
    }

    .icon-container-outline {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 4rem;
      height: 4rem;
      border: 2px solid var(--bs-primary);
      border-radius: 50%;
      color: var(--bs-primary);
      font-size: 1.5rem;
      margin-right: 1rem;
      flex-shrink: 0;
    }

    .cookie-consent-banner {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: rgba(30, 30, 30, 0.9);
      color: var(--bs-text-light);
      padding: 1rem;
      text-align: center;
      z-index: 1050;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 1rem;
      box-shadow: 0 -2px 10px rgba(0,0,0,0.2);
    }
    .cookie-consent-banner p {
      margin-bottom: 0;
      flex-grow: 1;
      max-width: 700px;
    }
    .cookie-consent-banner .btn {
      background-color: var(--bs-primary);
      border-color: var(--bs-primary);
      color: var(--bs-text-light);
      border-radius: var(--bs-border-radius);
      padding: 0.5rem 1.5rem;
      transition: background-color 0.3s ease, opacity 0.3s ease;
    }
    .cookie-consent-banner .btn:hover {
      background-color: var(--bs-primary-dark);
      opacity: 0.9;
    }
    #cookieConsentBtn {
      cursor: pointer;
    }

    @media (max-width: 767.98px) {
        .cookie-consent-banner {
            flex-direction: column;
            text-align: center;
        }
        .cookie-consent-banner p {
            width: 100%;
        }
    }

    .hero-primary-bg {
        background-color: var(--bs-primary);
    }
    .hero-text-light {
        color: var(--bs-text-light);
    }

    .about-section-bg {
        background-color: var(--bs-background-muted);
    }

    .testimonials-section-bg {
        background-color: var(--bs-primary-light);
    }

    .bento-grid-item {
        margin-bottom: 1.5rem; /* Spacing between bento items */
    }

    /* Bento Grid for Services - custom sizing */
    @media (min-width: 768px) {
        .bento-large-75 {
            grid-column: span 3; /* For a 4-column grid, this would be 75% */
        }
        .bento-small-25 {
            grid-column: span 1; /* For a 4-column grid, this would be 25% */
        }
        #services .bento-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Example 4-column base */
            gap: 1.5rem; /* Gap between grid items */
        }
    }
    @media (max-width: 767.98px) {
       #services .bento-grid-item {
            width: 100%;
       }
    }

    .portfolio-gallery img {
        border-radius: var(--bs-border-radius);
        box-shadow: var(--bs-box-shadow-medium);
        object-fit: cover;
        width: 100%;
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .portfolio-gallery img:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 24px rgba(0,0,0,0.2);
    }

    .footer-dark-bg {
        background-color: var(--bs-text-dark);
        color: var(--bs-text-light);
    }

    .form-circle-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 2rem;
        height: 2rem;
        border: 1px solid var(--bs-primary);
        border-radius: 50%;
        color: var(--bs-primary);
        font-size: 1rem;
        margin-right: 0.5rem;
        flex-shrink: 0;
    }
    .text-primary-color {
      color: var(--bs-primary) !important;
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm py-3">
      <div class="container-fluid container-xxl">
        <a class="navbar-brand text-primary-color fw-bold fs-4" href="#">ScriptBloom</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto text-center">
            <li class="nav-item">
              <a class="nav-link mx-2" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#studio">The Studio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#testimonials">Client Stories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#contact">Inquire</a>
            </li>
            <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
              <a class="btn btn-primary rounded-pill px-4" href="#contact">Book Consultation</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="hero" class="hero-primary-bg text-light section-py overflow-hidden">
      <div class="container-fluid container-xxl">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
            <img src="images/hero-calligraphy-studio-640x640.jpeg" class="img-fluid rounded-4 shadow-lg w-100" alt="ScriptBloom calligraphy desk with custom ink and nibs" width="640" height="640">
          </div>
          <div class="col-lg-6 order-lg-1 text-center text-lg-start">
            <h1 class="display-3 mb-4 fw-bold">Bespoke Artistry by ScriptBloom</h1>
            <p class="lead mb-5 fs-4">Elevating life's most significant moments through custom calligraphy, precision engraving, and luxurious personalized stationery.</p>
            <a href="#services" class="btn btn-white-text-primary rounded-pill px-5 py-3 fs-5">Explore Our Craft</a>
          </div>
        </div>
      </div>
    </section>
  </header>
<main>
    <section id="studio" class="about-section-bg section-py">
      <div class="container container-xxl">
        <div class="row gx-5 align-items-center">
          <div class="col-md-6 mb-4 mb-md-0">
            <img src="images/studio-tools-detail-768x512.jpeg" class="img-fluid rounded-4 shadow-lg w-100" alt="Close up of calligraphy pen and custom wax seals by ScriptBloom" width="768" height="512">
          </div>
          <div class="col-md-6 text-center text-md-start">
            <h2 class="display-5 mb-4">The Art of Elegance</h2>
            <p class="fs-5">At ScriptBloom, we believe that every stroke holds a story. Based in New York, our artistic studio specializes in transforming ordinary materials into cherished heirlooms. Whether securing the perfect aesthetic for corporate gifting or designing breathtaking event signage, we approach every commission with meticulous attention to detail and unwavering passion.</p>
            <p class="fs-5">Our craft is a tribute to timeless beauty, blending traditional techniques with contemporary design to create pieces that are profoundly personal and exquisitely made.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="section-py">
        <div class="container container-xxl">
            <h2 class="text-center display-5 mb-5 pb-3">Our Signature Services</h2>
            <div class="bento-grid">
                <div class="bento-grid-item col-12 col-md-12 col-lg-9 mb-4">
                    <div class="card h-100 p-4 card-hover-bg-shift">
                        <img src="images/service-event-signage-768x512.jpeg" class="img-fluid rounded-3 mb-4 img-hover-effect-lighten" alt="Luxury wedding seating chart by ScriptBloom" width="768" height="512">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">Custom Event Signage & Calligraphy</h3>
                            <p class="card-text">Command attention with breathtaking hand-lettered mirrors, acrylic seating charts, and elegant place cards tailored exclusively for your event. From intimate gatherings to grand celebrations, our bespoke signage imbues your occasion with unparalleled sophistication.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 bento-grid-item mb-4">
                    <div class="card h-100 p-4 card-hover-bg-shift">
                        <img src="images/service-bottle-engraving-256x256.jpeg" class="img-fluid rounded-3 mb-4 img-hover-effect-lighten" alt="Perfume bottle engraving by ScriptBloom" width="256" height="256">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">Precision Engraving</h3>
                            <p class="card-text">Permanent, elegant inscriptions on glass and metal surfaces, perfect for fragrance bottles, exquisite spirits, and distinct corporate gifting that leaves a lasting impression.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 bento-grid-item mb-4">
                    <div class="card h-100 p-4 card-hover-bg-shift">
                        <img src="images/service-stationery-suite-256x256.jpeg" class="img-fluid rounded-3 mb-4 img-hover-effect-lighten" alt="Luxury wedding invitation suite with wax seal" width="256" height="256">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">Personalised Stationery</h3>
                            <p class="card-text">Bespoke invitation suites complete with custom crests, fine paper curation, and signature wax seals. Each piece is a tactile expression of your personal style.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="section-py about-section-bg">
      <div class="container container-xxl">
        <h2 class="text-center display-5 mb-5 pb-3">Curated Commissions</h2>
        <div class="row g-4 portfolio-gallery">
          <div class="col-md-6 col-lg-4">
            <img src="images/portfolio-corporate-gifts-512x512.jpeg" class="img-fluid" alt="Engraved corporate gifts by ScriptBloom" width="512" height="512">
          </div>
          <div class="col-md-6 col-lg-4">
            <img src="images/portfolio-wedding-vows-640x640.jpeg" class="img-fluid" alt="Hand-lettered wedding vows" width="640" height="640">
          </div>
          <div class="col-md-6 col-lg-4">
            <img src="images/portfolio-live-event-activation-512x512.jpeg" class="img-fluid" alt="Live calligraphy activation at a luxury brand event" width="512" height="512">
          </div>
          <div class="col-md-6 col-lg-4 d-none d-lg-block">
            <img src="images/portfolio-custom-guest-book-512x512.jpeg" class="img-fluid" alt="Custom hand-bound guest book" width="512" height="512">
          </div>
          <div class="col-md-6 col-lg-4 d-none d-lg-block">
            <img src="images/portfolio-place-cards-detail-512x512.jpeg" class="img-fluid" alt="Elegant calligraphy place cards on an event table" width="512" height="512">
          </div>
          <div class="col-md-6 col-lg-4 d-none d-lg-block">
            <img src="images/portfolio-wax-seal-detail-512x512.jpeg" class="img-fluid" alt="Close up of a custom wax seal for stationery" width="512" height="512">
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="testimonials-section-bg section-py">
      <div class="container container-xxl">
        <h2 class="text-center display-5 mb-5 pb-3">Kind Words</h2>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="d-flex justify-content-center">
                <div class="card p-4 text-center mx-3 col-12 col-md-8 col-lg-6" style="max-width: 700px;">
                  <div class="card-body">
                    <p class="fs-5 fst-italic mb-4">"The signage ScriptBloom created for our gala was nothing short of spectacular. It set the luxurious tone for the entire evening and our guests were absolutely enchanted by the bespoke details."</p>
                    <footer class="blockquote-footer mt-3 mb-0 fs-6">Eleanor V., Event Director at <cite title="Source Title">Metropolitan Luxury Events</cite></footer>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex justify-content-center">
                <div class="card p-4 text-center mx-3 col-12 col-md-8 col-lg-6" style="max-width: 700px;">
                  <div class="card-body">
                    <p class="fs-5 fst-italic mb-4">"I commissioned custom engraved fragrance bottles for my bridal party. The precision and elegance exceeded every expectation. Each bottle felt like a true treasure, a perfect memento for an unforgettable day."</p>
                    <footer class="blockquote-footer mt-3 mb-0 fs-6">Sarah M., <cite title="Source Title">Bride</cite></footer>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex justify-content-center">
                <div class="card p-4 text-center mx-3 col-12 col-md-8 col-lg-6" style="max-width: 700px;">
                  <div class="card-body">
                    <p class="fs-5 fst-italic mb-4">"Working with ScriptBloom for our brand's holiday gifting elevated our client experience to new heights. Their meticulous craftsmanship and artistic vision truly solidified our luxury message. True artisans."</p>
                    <footer class="blockquote-footer mt-3 mb-0 fs-6">James H., VP of PR at <cite title="Source Title">Aura Cosmetics</cite></footer>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                  <div class="card p-4 text-center mx-3 col-12 col-md-8 col-lg-6" style="max-width: 700px;">
                    <div class="card-body">
                      <p class="fs-5 fst-italic mb-4">"Our wedding invitations set the perfect tone, thanks to ScriptBloom. The custom crest and wax seals were utterly exquisite – everyone commented on their unique beauty."</p>
                      <footer class="blockquote-footer mt-3 mb-0 fs-6">Lydia K., <cite title="Source Title">Client</cite></footer>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-flex justify-content-center">
                  <div class="card p-4 text-center mx-3 col-12 col-md-8 col-lg-6" style="max-width: 700px;">
                    <div class="card-body">
                      <p class="fs-5 fst-italic mb-4">"The team at ScriptBloom is incredibly professional and talented. They brought my vision for engraved corporate awards to life with remarkable precision and delivered ahead of schedule."</p>
                      <footer class="blockquote-footer mt-3 mb-0 fs-6">Marcus J., Marketing Director at <cite title="Source Title">Vertex Solutions Inc.</cite></footer>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <div class="carousel-indicators pt-4">
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="section-py">
      <div class="container container-xxl">
        <h2 class="text-center display-5 mb-5 pb-3">Commission Your Vision</h2>
        <p class="lead text-center mb-5 col-lg-8 mx-auto">We welcome inquiries for weddings, brand activations, and bespoke commissions. Reach out to ScriptBloom to begin the design process and bring your artistic dreams to life.</p>

        <div class="row gx-lg-5">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form class="p-4 card">
              <h3 class="mb-4 text-center">Send Us a Message</h3>
              <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Your Name" aria-label="Your Name">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email Address" aria-label="Email Address">
              </div>
              <div class="mb-3">
                <select class="form-select" name="inquiry_type" aria-label="Inquiry Type">
                  <option selected disabled>Select Inquiry Type</option>
                  <option value="Event Signage">Event Signage</option>
                  <option value="Corporate Gifting">Corporate Gifting</option>
                  <option value="Engraving">Engraving</option>
                  <option value="Stationery">Stationery</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="mb-4">
                <textarea class="form-control" name="message" rows="5" placeholder="Tell us about your project timeline and vision..." aria-label="Your Project Details"></textarea>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary rounded-pill py-3">Send Inquiry</button>
              </div>
            </form>
          </div>
          <div class="col-lg-6">
            <h3 class="mb-4 text-center text-lg-start">Contact Information</h3>
            <div class="d-flex align-items-start mb-4">
              <div class="icon-container-outline">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"></path><circle cx="12" cy="9" r="3"></circle></svg>
              </div>
              <div>
                <p class="mb-0 fw-bold">Studio Address:</p>
                <p class="mb-0">52-17 74th Street, New York, NY 11373, USA</p>
              </div>
            </div>
            <div class="d-flex align-items-start mb-4">
              <div class="icon-container-outline">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.95m-1 7.93v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-3.67-2.94 19.5 19.5 0 0 1-2.94-3.67A19.79 19.79 0 0 1 2 11.82a2 2 0 0 1 2-2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.1 2 2 0 0 1-.45 2.11L8.09 15.7A10.66 10.66 0 0 0 14.34 21l1.73-1.73a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.1.7A2 2 0 0 1 22 16.92z"></path></svg>
              </div>
              <div>
                <p class="mb-0 fw-bold">Phone:</p>
                <p class="mb-0"><a href="tel:+14144597632" class="text-decoration-none text-dark">+1 (414) 459-7632</a></p>
              </div>
            </div>
            <div class="d-flex align-items-start mb-4">
              <div class="icon-container-outline">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              </div>
              <div>
                <p class="mb-0 fw-bold">Email:</p>
                <p class="mb-0"><a href="mailto:info@scriptbloom.com" class="text-decoration-none text-dark">info@scriptbloom.com</a></p>
              </div>
            </div>
            <div class="mt-5">
              <h3 class="mb-3 text-center text-lg-start">Find Us</h3>
              <div class="ratio ratio-16x9 rounded-4 shadow-lg">
                <iframe
                  src="https://www.google.com/maps?q=New+York,USA&z=10&output=embed"
                  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" aria-label="Google Map of New York, USA">
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
<footer class="footer-dark-bg text-light py-5">
    <div class="container container-xxl">
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          <p class="mb-0">&copy; 2024 ScriptBloom. All rights reserved. Artistic Services & Fine Calligraphy.</p>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <a href="./privacy.html" class="text-light text-decoration-none mx-2">Privacy Policy</a>
          <span class="text-light">|</span>
          <a href="./tos.html" class="text-light text-decoration-none mx-2">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>

  <div id="u6R8S3cookieConsent" class="cookie-consent-banner d-none">
    <p>This website uses cookies to ensure you get the best experience on our website. By continuing to use this site, you agree to our <a href="./privacy.html" class="text-decoration-none text-light fw-bold">Privacy Policy</a>.</p>
    <button id="cookieConsentBtn" class="btn btn-primary">Accept</button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize Bootstrap carousel
      var myCarousel = document.querySelector('#testimonialCarousel');
      if (myCarousel) {
        new bootstrap.Carousel(myCarousel, {
          interval: 5000,
          wrap: true
        });
      }

      // Cookie Consent Logic
      const cookieName = 'u6R8S3_cookie_consent';
      const consentBanner = document.getElementById('u6R8S3cookieConsent');
      const consentButton = document.getElementById('cookieConsentBtn');

      // Check if consent has been given
      if (!localStorage.getItem(cookieName)) {
        consentBanner.classList.remove('d-none');
      }

      // Handle consent button click
      if (consentButton) {
        consentButton.addEventListener('click', function() {
          localStorage.setItem(cookieName, 'true');
          consentBanner.classList.add('d-none');
        });
      }

      // Simple image hover effect (brightness)
      const hoverImages = document.querySelectorAll('.img-hover-effect-lighten');
      hoverImages.forEach(img => {
          img.addEventListener('mouseenter', () => img.style.filter = 'brightness(1.1)');
          img.addEventListener('mouseleave', () => img.style.filter = 'brightness(1)');
      });

      // Card hover effect (background shift & slight lift)
      const hoverCards = document.querySelectorAll('.card-hover-bg-shift');
      hoverCards.forEach(card => {
          card.addEventListener('mouseenter', () => {
              card.style.backgroundColor = 'var(--bs-background-muted)';
              card.style.transform = 'translateY(-5px)';
          });
          card.addEventListener('mouseleave', () => {
              card.style.backgroundColor = ''; /* Reset to default */
              card.style.transform = 'translateY(0)';
          });
      });
    });
  </script>
</body>
</html>