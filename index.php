<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Autofix - AutoSpares & Repair Service</title>
  <meta name="title" content="Autofix - AutoSpares & Repair Service" />
  <meta name="description" content="This is a vehicle repair html template made by Group 4 Members" />

  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600;700&family=Mulish&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,600,0,0" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="preload" as="image" href="./assets/images/hero-banner.png" />
  <link rel="preload" as="image" href="./assets/images/hero-bg.jpg" />
</head>

<body>
  <header class="header">
    <div class="container">
      <a href="#" class="logo">
        <img src="./assets/images/logo.png" width="128" height="63" alt="autofix home" />
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">
          <li>
            <a href="#home" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#services" class="navbar-link">Services</a>
          </li>

          <li>
            <a href="#about" class="navbar-link">About</a>
          </li>

          <li>
            <a href="#projects" class="navbar-link">Projects</a>
          </li>

          <li>
            <a href="#contact-us" class="navbar-link">Contact Us</a>
          </li>

          <li>
            <a href="#contact-info" class="navbar-link">Contact Info</a>
          </li>
        </ul>
      </nav>

      <a href="getQuote.html" class="btn btn-primary">
        <span class="span">Get a Quote</span>

        <span class="material-symbols-rounded">arrow_forward</span>
      </a>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <span class="nav-toggle-icon icon-1"></span>
        <span class="nav-toggle-icon icon-2"></span>
        <span class="nav-toggle-icon icon-3"></span>
      </button>
    </div>
  </header>

  <main>
    <article>
      <section id="home" class="hero has-bg-image" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.jpg')">
        <div class="container">
          <div class="hero-content">
            <p class="section-subtitle :dark">
              We have talented engineers & mechanics
            </p>

            <h1 class="h1 section-title">AutoSpares & Repair Service</h1>

            <p class="section-text">
              We take a good care of your vehicles!!
              <br />Always Welcome
            </p>

            <a href="#services" class="btn">
              <span class="span">Our Services</span>

              <span class="material-symbols-rounded">arrow_forward</span>
            </a>
          </div>

          <figure class="hero-banner" style="--width: 1228; --height: 789">
            <img src="./assets/images/hero-banner.png" width="1228" height="789" alt="red motor vehicle"
              class="move-anim" />
          </figure>
        </div>
      </section>
      <section id="services" class="section service has-bg-image" aria-labelledby="service-label"
        style="background-image: url('./assets/images/service-bg.jpg')">
        <div class="container">
          <p class="section-subtitle :light" id="service-label">
            Our services
          </p>

          <h2 class="h2 section-title">
            We Provide Great Services For your Vehicle
          </h2>

          <ul class="service-list">
            <li>
              <div class="service-card">
                <figure class="card-icon">
                  <img src="./assets/images/services-1.png" width="110" height="110" loading="lazy"
                    alt="Engine Repair" />
                </figure>

                <h3 class="h3 card-title">Engine Repair</h3>

                <p class="card-text">
                  we offer comprehensive services designed to restore your
                  engine's performance and extend its lifespan
                </p>

                <a href="#" class="btn-link">Read more</a>
              </div>
            </li>

            <li>
              <div class="service-card">
                <figure class="card-icon">
                  <img src="./assets/images/services-2.png" width="110" height="110" loading="lazy"
                    alt="Brake Repair" />
                </figure>

                <h3 class="h3 card-title">Brake Repair</h3>

                <p class="card-text">
                  Our Brake Repair services ensure your safety and peace of
                  mind on the road
                </p>

                <a href="#" class="btn-link">Read more</a>
              </div>
            </li>

            <li>
              <div class="service-card">
                <figure class="card-icon">
                  <img src="./assets/images/services-3.png" width="110" height="110" loading="lazy" alt="Tire Repair" />
                </figure>

                <h3 class="h3 card-title">Tire Repair</h3>

                <p class="card-text">
                  Our Tire Repair services are designed to keep you moving
                  safely and efficiently
                </p>

                <a href="#" class="btn-link">Read more</a>
              </div>
            </li>

            <li>
              <div class="service-card">
                <figure class="card-icon">
                  <img src="./assets/images/services-4.png" width="110" height="110" loading="lazy"
                    alt="Battery Repair" />
                </figure>

                <h3 class="h3 card-title">Battery Repair</h3>

                <p class="card-text">
                  Our battery repair services include diagnostic checks,
                  replacement of faulty cells, and optimization of battery
                  performance.
                  <span id="more-text" class="hidden">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Magni enim ad, dolores fugit sunt eius sit est illum
                    aliquid, id blanditiis commodi unde dolorem atque tempora
                    accusantium maxime? Nesciunt, omnis?</span>
                </p>

                <button class="btn-link" id="read-more-btn">Read More</button>
                <script src="script.js"></script>
              </div>
            </li>

            <li class="service-banner">
              <img src="./assets/images/services-5.png" width="646" height="380" loading="lazy" alt="Red Car"
                class="move-anim" />
            </li>

            <li>
              <div class="service-card">
                <figure class="card-icon">
                  <img src="./assets/images/services-6.png" width="110" height="110" loading="lazy"
                    alt="Steering Repair" />
                </figure>

                <h3 class="h3 card-title">Steering Repair</h3>

                <p class="card-text">
                  Our Steering Repair services are dedicated to restoring your
                  vehicle's handling precision and safety
                </p>

                <a href="#" class="btn-link">Read more</a>
              </div>
            </li>
          </ul>

          <a href="#services" class="btn">
            <span class="span">View All Services</span>

            <span class="material-symbols-rounded">arrow_forward</span>
          </a>
        </div>
      </section>
      <section id="about" class="section about has-before" aria-labelledby="about-label">
        <div class="container">
          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="540" height="540" loading="lazy"
              alt="vehicle repire equipments" class="w-100" />
          </figure>

          <div class="about-content">
            <p class="section-subtitle :dark">About Us</p>

            <h2 class="h2 section-title">Meet the quality</h2>

            <p class="section-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti odio tenetur omnis, nihil pariatur ab. Modi cupiditate sunt iure fugit, minima aliquid repudiandae non reiciendis, odio libero harum enim animi?
            </p>

            <ul class="about-list">
              <li class="about-item">
                <p>
                  <strong class="display-1 strong">8K+</strong> Happy Clients
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">22+</strong> Instruments
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">50+</strong> Years in
                  market
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">99%</strong> Projects
                  completed
                </p>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section id="projects" class="section work" aria-labelledby="work-label">
        <div class="container">
          <p class="section-subtitle :light" id="work-label">Our Work</p>

          <h2 class="h2 section-title">Latest projects we have done</h2>

          <ul class="has-scrollbar">
            <li class="scrollbar-item">
              <div class="work-card">
                <figure class="card-banner img-holder" style="--width: 350; --height: 406">
                  <img src="./assets/images/work-1.jpg" width="350" height="406" loading="lazy" alt="Engine Repair"
                    class="img-cover" />
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Auto Repair</p>

                  <h3 class="h3 card-title">Engine Repair</h3>

                  <a href="#services" class="card-btn">
                    <span class="material-symbols-rounded">arrow_forward</span>
                  </a>
                </div>
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="work-card">
                <figure class="card-banner img-holder" style="--width: 350; --height: 406">
                  <img src="./assets/images/work-2.jpg" width="350" height="406" loading="lazy" alt="Car Tyre change"
                    class="img-cover" />
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Auto Repair</p>

                  <h3 class="h3 card-title">Car Tyre change</h3>

                  <a href="#services" class="card-btn">
                    <span class="material-symbols-rounded">arrow_forward</span>
                  </a>
                </div>
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="work-card">
                <figure class="card-banner img-holder" style="--width: 350; --height: 406">
                  <img src="./assets/images/work-3.jpg" width="350" height="406" loading="lazy" alt="Battery Adjust"
                    class="img-cover" />
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Auto Repair</p>

                  <h3 class="h3 card-title">Battery Adjust</h3>

                  <a href="#services" class="card-btn">
                    <span class="material-symbols-rounded">arrow_forward</span>
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </article>
  </main>
  <section id="contact-us" class="contact">
    <div class="container">
      <p class="section-subtitle :light" id="work-label">Your feedback</p>

      <h2 class="h2 section-title">Contact Us</h2>
      <form action="process.php" id="contact-form" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required />
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
        <input type="submit" class="btn" name="send" value="Submit" />
      </form>
    </div>
  </section>
  <footer id="contact-info" class="footer">
    <div class="footer-top section">
      <div class="container">
        <div class="footer-brand">
          <a href="#" class="logo">
            <img src="./assets/images/logo.png" width="128" height="63" alt="autofix home" />
          </a>

          <p class="footer-text">
            It will often happen, from the necessity of things, that both
            pleasures are to be rejected and troubles are not to be rejected.
          </p>

          <ul class="social-list">
            <li>
              <a href="https://web.facebook.com" class="social-link">
                <img src="./assets/images/facebook.svg" alt="facebook" />
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/accounts/login/?hl=en" class="social-link">
                <img src="./assets/images/instagram.svg" alt="instagram" />
              </a>
            </li>

            <li>
              <a href="https://x.com/" class="social-link">
                <img src="./assets/images/twitter.svg" alt="twitter" />
              </a>
            </li>
          </ul>
        </div>

        <ul class="footer-list">
          <li>
            <p class="h3">Opening Hours</p>
          </li>

          <li>
            <p class="p">Monday – Friday</p>

            <span class="span">6.00 – 20.00</span>
          </li>

          <li>
            <p class="p">Saturday – Sunday</p>

            <span class="span">12.00 – 17.00</span>
          </li>
        </ul>

        <ul class="footer-list">
          <li>
            <p class="h3">Contact Info</p>
          </li>

          <li>
            <a href="tel:+250788450312" class="footer-link">
              <span class="material-symbols-rounded">call</span>

              <span class="span">+250 788450312</span>
            </a>
          </li>
          <li>
            <a href="https://www.google.com/gmail/about/" class="footer-link">
              <span class="material-symbols-rounded">mail</span>

              <span class="span">info@autofix.com</span>
            </a>
          </li>

          <li>
            <address class="footer-link address">
              <span class="material-symbols-rounded">location_on</span>

              <span class="span">Kigali-Rwanda</span>
            </address>
          </li>
        </ul>
      </div>

      <img src="./assets/images/footer-shape-3.png" width="637" height="173" loading="lazy" alt="Shape"
        class="shape shape-3 move-anim" />
    </div>

    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2024 AutoSpares Manufacturer.
        </p>

        <img src="./assets/images/footer-shape-2.png" width="778" height="335" loading="lazy" alt="Shape"
          class="shape shape-2" />

        <img src="./assets/images/footer-shape-1.png" width="805" height="652" loading="lazy" alt="Red Car"
          class="shape shape-1 move-anim" />
      </div>
    </div>
  </footer>

  <script src="./assets/js/script.js"></script>
</body>

</html>