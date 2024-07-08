<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

  <title>Ramadhan - Personal Portfolio</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="{{ asset('assets/fe/asset/images/logo.ico') }}" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('assets/fe/asset/css/style.css') }}">



  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="{{ asset('upload/' . $setting->profile_picture) }}" alt="Bintang Ramadhan" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Bintang Ramadhan">{{ $profile->name; }}</h1>



          <p class="title">
            <?php
              $profesi = $profile->profesi;
              echo $profesi;
              ?>


          </p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="{{$profile->email_link}}" class="contact-link">
              <?php
              $email = $profile->email;
              echo $email;
              ?>
              </a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="{{$profile->wa_link}}" class="contact-link">
              <?php
                $phone = $profile->phone;
                echo $phone;
              ?>
              </a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="2006-09-26">
                <?php
                  $birth = $profile->tanggal_lahir;
                  echo $birth;
                  ?>
              </time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>
                <?php
                  $address = $profile->address;
                  echo $address;
                  ?>
              </address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="{{$profile->facebook_link}}" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="{{$profile->youtube_link}}" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="{{ $profile->instagram_link }}" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="{{ $profile->linkedin_link }}" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>


        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->
<!-- NAVBAR -->
<nav class="navbar">
  <ul class="navbar-list">
    <li class="navbar-item">
      <button class="navbar-link active" data-nav-link="about">About</button>
    </li>
    <li class="navbar-item">
      <button class="navbar-link" data-nav-link="resume">Resume</button>
    </li>
    <li class="navbar-item">
      <button class="navbar-link" data-nav-link="portfolio">Portfolio</button>
    </li>
    <li class="navbar-item">
      <button class="navbar-link" data-nav-link="contact">Contact</button>
    </li>
  </ul>
</nav>




      <!--
        - #ABOUT
      -->

      <article class="about active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        @foreach ($about as $about)


        <section class="about-text">
          <p>
            {{ $about->decription }}
          </p>

          <p>
            {{$about->decription2}}
          </p>
        </section>

        @endforeach


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            @foreach ($whatido as $whatido)
              
           
            <li class="service-item">

              <div class="service-icon-box">
                <img src="{{ asset('upload/' . $whatido->icon) }}"
                 alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">{{ $whatido->description }}</h4>

                <p class="service-item-text">
               {{$whatido->caption}}
                </p>
              </div>

            </li>

            @endforeach

            {{-- <li class="service-item">

              <div class="service-icon-box">
                <img src="{{ asset('assets/fe/asset/images/icon-logodesign.svg') }}" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Logo Design</h4>

                <p class="service-item-text">
                  Creating a unique identity that is easily recognized by the public
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="{{' assets/fe/asset/images/icon-sports.svg '}}" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Sports Design</h4>

                <p class="service-item-text">
                  Can make your match schedule much cooler and more interesting
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="{{ 'assets/fe/asset/images/icon-printer.svg' }}" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Poster/brosur Design</h4>

                <p class="service-item-text">
                  I create high quality posters of any category at a professional level.
                </p>
              </div>

            </li>

          </ul> --}}

        </section>




        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </section>

        </div>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        {{-- <section class="resume-section" id="education">
          <div class="resume-section-content">
              <h2 class="mb-5">Education</h2>
              @foreach ($education as $education)
                  <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                      <div class="flex-grow-1">
                          <h3 class="mb-0">{{ $education->campus }}</h3>
                          <div class="subheading mb-3">{{ $education->bachelor }}</div>
                          <div>{{ $education->major }}</div>
                          <p>{{ $education->description }}</p>
                      </div>
                      <div class="flex-shrink-0"><span class="text-primary">{{ $education->date_start }} -
                              {{ $education->date_finish }}</span></div>
                  </div>
              @endforeach
          </div>
      </section> --}}


        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>


            <h3 class="h3">Education</h3>


          </div>

          <ol class="timeline-list">
            @foreach ($education as $education)

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">{{ $education->campus; }}</h4>

              <span>{{ $education->date_start; }}</span>

              <p class="timeline-text">
                {{ $education->address; }}
              </p>

            </li>

            {{-- <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Tes</h4>

              <span>2018 — 2021</span>

              <p class="timeline-text">
                Jl. Sumur Batu Raya No.6, RT.11/RW.1, Sumur Batu, Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10640
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">SDN Cempaka Baru 11</h4>

              <span>2012 — 2018</span>

              <p class="timeline-text">
                Jl. Remaja Raya No.52, RT.5/RW.8, Cemp. Baru, Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10640
              </p>

            </li> --}}
            @endforeach
          </ol>

        </section>


        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">
            @foreach ($experience as $experience)

            <li class="timeline-item">

              <h4 class="h4">
                {{ $experience->company}}

            </h4>

            <h5 class="h5">JOBDESK: {{$experience->job}}</h5>



              <span>{{ $experience->date_start; }} - {{ $experience->date_finish }}</span>

              <p class="timeline-text">
                {{$experience->description;}}
              </p>

            </li>

            {{-- <li class="timeline-item">

              <h4 class="h4 timeline-item-title">PT.GLORYMITRASUKSES</h4>

              <span>01-04/2023</span>

              <p class="timeline-text">
                During my 3 month internship period in 2023, I handled several important jobs including
                maintaining the company website, designing several feeds for the company's media needs,
                taking photos of products to be sold, editing advertising videos for promotional purposes
                and creating company logo animations.
              </p>

            </li> --}}

            @endforeach
          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">
            @foreach ($skill as $skill )


            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">{{ $skill->name; }}</h5>
                <data value="60">{{ $skill->value }}%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: {{ $skill->value }}%;"></div>
              </div>

            </li>

            @endforeach
{{--
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">UI/UX Design</h5>
                <data value="75">75%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 75%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Vector Image</h5>
                <data value="70">70%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 70%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Layout Managing Feed</h5>
                <data value="85">85%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 85%;"></div>
              </div>

            </li> --}}

          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            @foreach ($ctgproject as $category)
                <li class="filter-item">
                     <button data-filter-btn>{{ $category->category }}</button>
                  </li>
             @endforeach

            {{-- <li class="filter-item">
              <button data-filter-btn>Feed Design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Poster Design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>logo</button>
            </li> --}}

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              @foreach ($ctgproject as $category)

              <li class="select-item">
                <button data-select-item>{{$category->category}}</button>
              </li>

              @endforeach


            </ul>

          </div>

          <ul class="project-list">

            @foreach ($portfolio as $item)
            <li class="project-item active" data-filter-item
            data-category="{{$item->category->category }}">
                <a href="{{ asset('upload/' . $item->images->images) }}" data-fancybox="portfolio" data-caption="{{ $item->title }}">
                    <figure class="project-img">
                        <div class="project-item-icon-box">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>
                        <img src="{{ asset('upload/' . $item->images->images) }}" alt="{{ $item->title }}" loading="lazy">
                    </figure>
                    <h3 class="project-title">{{ $item->title }}</h3>
                    <p class="project-category">{{ $item->category->category ?? 'No Category' }}</p>
                </a>
            </li>

            @endforeach



            {{-- <li class="project-item  active" data-filter-item data-category="feed design">
              <a href="{{ 'assets/fe/asset/images/project-1.jpg' }}" data-fancybox="portfolio" data-caption="Nike Feed">
                 <figure class="project-img">
                    <div class="project-item-icon-box">
                       <ion-icon name="eye-outline"></ion-icon>
                    </div>
                    <img src="{{ 'assets/fe/asset/images/project-1.jpg' }}" alt="finance" loading="lazy">
                 </figure>
                 <h3 class="project-title">Nike</h3>
                 <p class="project-category">Feed Design</p>
              </a>
           </li> --}}


            {{-- <li class="project-item  active" data-filter-item data-category="logo">
              <a href="{{ 'assets/fe/asset/images/project-logo1.png' }}" data-fancybox="portfolio" data-caption="Logo Bareng Gila">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="{{ 'assets/fe/asset/images/project-logo1.png' }}" alt="orizon" loading="lazy">
                </figure>
                <h3 class="project-title">Basreng Gila</h3>
                <p class="project-category">Poster</p>
              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="logo">
              <a href="{{'assets/fe/asset/images/project-logo2.png'}}" data-fancybox="portfolio" data-caption="Logo GHOSTCRACK">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{'assets/fe/asset/images/project-logo2.png'}}" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Ghostcrack</h3>

                <p class="project-category">Poster</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="feed design">
              <a href="{{'assets/fe/asset/images/project-pkl1.jpg'}}" data-fancybox="portfolio" data-caption="Mb Centaur H81 #1">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{'assets/fe/asset/images/project-pkl1.jpg'}}" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">Mb Centaur H81 #1</h3>

                <p class="project-category">Feed design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="feed design">
              <a href="{{'assets/fe/asset/images/project-pkl2.jpg'}}" data-fancybox="portfolio" data-caption="Mb Centaur H81 #2">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{'assets/fe/asset/images/project-pkl2.jpg'}}" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">Mb Centaur H81 #2</h3>

                <p class="project-category">Feed Design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="feed design">
              <a href="{{'assets/fe/asset/images/project-pkl3.jpg'}}" data-fancybox="portfolio" data-caption="Mb Centaur H81 #3">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{'assets/fe/asset/images/project-pkl3.jpg'}}" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Mb Centaur H81 #3</h3>

                <p class="project-category">Feed Design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web banner">
              <a href="{{'assets/fe/asset/images/project-banner1.jpg'}}" data-fancybox="portfolio" data-caption="FC Forza #1-2-3">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{'assets/fe/asset/images/project-banner1.jpg'}}" alt="summary" loading="lazy">
                </figure>

                <h3 class="project-title">FC Forza #1-2-3</h3>

                <p class="project-category">Web Banner</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web banner">
              <a href="{{'assets/fe/asset/images/project-banner2.jpg'}}" data-fancybox="portfolio" data-caption="FC Forza #4-5-6">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{'assets/fe/asset/images/project-banner2.jpg'}}" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">FC Forza #4-5-6</h3>

                <p class="project-category">Web Banner</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="feed design">
              <a href="{{'assets/fe/asset/images/project-hose.jpg'}}" data-fancybox="portfolio" data-caption="Poster Komersil">


                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{'assets/fe/asset/images/project-hose.jpg'}}" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Komersil Motherboard</h3>

                <p class="project-category">Feed Design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="poster design">
              <a href="{{'assets/fe/asset/images/VINICIUS-POSTER.jpg'}}" data-fancybox="portfolio" data-caption="Stroy IG design">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="{{'assets/fe/asset/images/VINICIUS-POSTER.jpg'}}" alt="orizon" loading="lazy">
                </figure>
                <h3 class="project-title">Vinicius Poster</h3>
                <p class="project-category">Poster</p>
              </a>
            </li>


            <li class="project-item  active" data-filter-item data-category="poster design">
              <a href="{{'assets/fe/asset/images/project-poster2.jpg'}}" data-fancybox="portfolio" data-caption="Poster World cup 2022">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="{{'assets/fe/asset/images/project-poster2.jpg'}}" alt="orizon" loading="lazy">
                </figure>
                <h3 class="project-title">QATAR World cup 2022</h3>
                <p class="project-category">Poster</p>
              </a>
            </li>



            <li class="project-item  active" data-filter-item data-category="poster design">
              <a href="{{'assets/fe/asset/images/project-poster3.jpg'}}" data-fancybox="portfolio" data-caption="Poster Komersil">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="{{'assets/fe/asset/images/project-poster3.jpg'}}" alt="orizon" loading="lazy">
                </figure>
                <h3 class="project-title">Komersil Emelard Blend </h3>
                <p class="project-category">Poster</p>
              </a>
            </li> --}}




          </ul>

        </section>

      </article>







       <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>

    </div>

  </main>




  <!--
    - custom js link
  -->
  <script src="{{ asset('assets/fe/asset/js/script.js') }}"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="{{ asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js') }}"></script>
  <script nomodule src="{{ asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js') }}"></script>
  <script src="{{ asset('https://code.jquery.com/jquery-3.6.4.min.js') }}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js') }}"></script>

</body>

</html>
