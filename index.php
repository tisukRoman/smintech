<?php get_header(); ?>

<main class="home">

<section id="hero" class="hero">
  <div class="hero__container">
    <nav class="menu">
      <ul class="menu__list">
        <li class="menu__list-item">
          <a href="#">Homepage</a>
        </li>
        <li class="menu__list-item">
          <a href="#about">GFRP REBAR</a>
        </li>
        <li class="menu__list-item">
          <a href="#applications">Applications</a>
        </li>
        <li class="menu__list-item">
          <a href="#advantages">Advantages</a>
        </li>
        <li class="menu__list-item">
          <a href="#projects">Projects</a>
        </li>
        <li class="menu__list-item">
          <a href="#call-me-back">Contact Us</a>
        </li>
      </ul>
    </nav>

    <div class="hero__text">
      <h5 class="hero__subtitle">GFRB Rebar Factory</h5>
      <h1 class="hero__title">Smart Innovation in<br>
      <b>concrete reinfocement</b></h1>
      <p class="hero__paragraph paragraph">Lorem ipsum dolor sit amet consectetur. Id malesuada hac a egestas massa. At bibendum mauris sed ullamcorper quisque vel.</p>
    </div>

    <a href="#learn-more" class="hero__button button">
      Learn more
    </a>

    <div class="hero__image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero.png" alt="Armatures"/>
    </div>
  </div>
</section>

<section id="about" class="about">
  <div class="about__container">
    <article class="about__block">
      <div class="about__text">
        <h4 class="about__heading-4 heading-4"><span>SMINBar world class</span> product made in India</h4>
        <p class="about__paragraph paragraph">
        Lorem ipsum dolor sit amet consectetur. Neque elementum eros quis dolor ipsum. Nunc faucibus etiam purus egestas. Ultricies consectetur semper venenatis enim odio lectus sed. Nec ultrices nisl purus dignissim neque nec et.
        </p>
      </div>
      <div class="about__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-1.png" alt="Armatures"/>
      </div>
    </article>

    <article class="about__block about__block--2">
      <div class="about__text">
        <h4 class="about__heading-4 heading-4"><span>Trusted by experts</span> globally for world class solutions</h4>
        <p class="about__paragraph paragraph">
          Lorem ipsum dolor sit amet consectetur. Neque elementum eros quis dolor ipsum. Nunc faucibus etiam purus egestas. Ultricies consectetur semper venenatis enim odio lectus sed. Nec ultrices nisl purus dignissim neque nec et.
        </p>
      </div>
      <div class="about__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-2.png" alt="Armatures"/>
      </div>
    </article>
  </div>
</section>

<section id="future" class="future">
  <div class="future__container">
    <div class="future__text">
      <h2 class="future__heading-2 heading-2">Buy the <span>future</span></h2>
      <h6 class="future__heading-6 heading-6">Leave a request and we will call you back.</h6>
      <p class="future__paragraph paragraph">
        Neque elementum eros quis dolor ipsum. Nunc faucibus etiam purus egestas. Ultricies consectetur semper venenatis enim odio lectus sed. Nec ultrices nisl purus dignissim neque nec et.
      </p>
    </div>

    <div class="future__button">
      <a href="#call-me-back" class="button">Call me back</a>
    </div>
  </div>

  <div class="future__image">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/future-1.png" alt="Armatures"/>
  </div>
</section>

<section id="applications" class="applications">
  <div class="applications__container">
    <h3 class="applications__heading-3 heading-3"><span>App</span>lications</h3>
    
    <div class="applications__grid">

      <a href="#" class="card">
        <figure class="card__figure">
          <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/application-1.jpg" />
          <figcaption class="card__caption">Bridge Decks</figcaption>
        </figure>

        <div class="card__text">
          <h6 class="card__title">Bridge Decks</h6>
          <p class="card__paragraph paragraph">
            Lorem ipsum dolor sit amet consectetur. Cursus ullamcorper mi ipsum nunc. Turpis volutpat sollicitudin viverra sed vel amet. Diam vulputate felis arcu volutpat at. Id nisi eget.
          </p>
          <span class="card__link">Read more 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
            <path d="M20.434 0.20932C20.2986 0.343388 20.2225 0.525199 20.2225 0.714771C20.2225 0.904344 20.2986 1.08615 20.434 1.22022L23.5345 4.28939H0.722227C0.530682 4.28939 0.346979 4.36471 0.211535 4.49879C0.0760899 4.63286 0 4.81471 0 5.00432C0 5.19393 0.0760899 5.37577 0.211535 5.50984C0.346979 5.64392 0.530682 5.71924 0.722227 5.71924H23.5345L20.434 8.78841C20.3024 8.92324 20.2296 9.10384 20.2312 9.29129C20.2329 9.47874 20.3088 9.65805 20.4428 9.7906C20.5767 9.92316 20.7578 9.99834 20.9472 9.99997C21.1365 10.0016 21.319 9.92954 21.4552 9.79931L25.7885 5.50977C25.9239 5.3757 26 5.19389 26 5.00432C26 4.81474 25.9239 4.63293 25.7885 4.49886L21.4552 0.20932C21.3197 0.0752926 21.1361 0 20.9446 0C20.7531 0 20.5694 0.0752926 20.434 0.20932Z" fill="white"/>
            </svg>
          </span>
        </div>
      </a>

      <a href="#" class="card">
        <figure class="card__figure">
          <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/application-2.jpg" />
          <figcaption class="card__caption">Base slabs, walls columns</figcaption>
        </figure>

        <div class="card__text">
          <h6 class="card__title">Base slabs, walls columns</h6>
          <p class="card__paragraph paragraph">
            Lorem ipsum dolor sit amet consectetur. Cursus ullamcorper mi ipsum nunc. Turpis volutpat sollicitudin viverra sed vel amet. Diam vulputate felis arcu volutpat at. Id nisi eget.
          </p>
          <span class="card__link">Read more 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
            <path d="M20.434 0.20932C20.2986 0.343388 20.2225 0.525199 20.2225 0.714771C20.2225 0.904344 20.2986 1.08615 20.434 1.22022L23.5345 4.28939H0.722227C0.530682 4.28939 0.346979 4.36471 0.211535 4.49879C0.0760899 4.63286 0 4.81471 0 5.00432C0 5.19393 0.0760899 5.37577 0.211535 5.50984C0.346979 5.64392 0.530682 5.71924 0.722227 5.71924H23.5345L20.434 8.78841C20.3024 8.92324 20.2296 9.10384 20.2312 9.29129C20.2329 9.47874 20.3088 9.65805 20.4428 9.7906C20.5767 9.92316 20.7578 9.99834 20.9472 9.99997C21.1365 10.0016 21.319 9.92954 21.4552 9.79931L25.7885 5.50977C25.9239 5.3757 26 5.19389 26 5.00432C26 4.81474 25.9239 4.63293 25.7885 4.49886L21.4552 0.20932C21.3197 0.0752926 21.1361 0 20.9446 0C20.7531 0 20.5694 0.0752926 20.434 0.20932Z" fill="white"/>
            </svg>
          </span>
        </div>
      </a>

      <a href="#" class="card">
        <figure class="card__figure">
          <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/application-3.jpg" />
          <figcaption class="card__caption">Industrial slubs and RCC roads</figcaption>
        </figure>

        <div class="card__text">
          <h6 class="card__title">Industrial slubs and RCC roads</h6>
          <p class="card__paragraph paragraph">
            Lorem ipsum dolor sit amet consectetur. Cursus ullamcorper mi ipsum nunc. Turpis volutpat sollicitudin viverra sed vel amet. Diam vulputate felis arcu volutpat at. Id nisi eget.
          </p>
          <span class="card__link">Read more 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
            <path d="M20.434 0.20932C20.2986 0.343388 20.2225 0.525199 20.2225 0.714771C20.2225 0.904344 20.2986 1.08615 20.434 1.22022L23.5345 4.28939H0.722227C0.530682 4.28939 0.346979 4.36471 0.211535 4.49879C0.0760899 4.63286 0 4.81471 0 5.00432C0 5.19393 0.0760899 5.37577 0.211535 5.50984C0.346979 5.64392 0.530682 5.71924 0.722227 5.71924H23.5345L20.434 8.78841C20.3024 8.92324 20.2296 9.10384 20.2312 9.29129C20.2329 9.47874 20.3088 9.65805 20.4428 9.7906C20.5767 9.92316 20.7578 9.99834 20.9472 9.99997C21.1365 10.0016 21.319 9.92954 21.4552 9.79931L25.7885 5.50977C25.9239 5.3757 26 5.19389 26 5.00432C26 4.81474 25.9239 4.63293 25.7885 4.49886L21.4552 0.20932C21.3197 0.0752926 21.1361 0 20.9446 0C20.7531 0 20.5694 0.0752926 20.434 0.20932Z" fill="white"/>
            </svg>
          </span>
        </div>
      </a>

      <a href="#" class="card">
        <figure class="card__figure">
          <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/application-4.jpg" />
          <figcaption class="card__caption">swimming pools and septic tanks</figcaption>
        </figure>

        <div class="card__text">
          <h6 class="card__title">swimming pools and septic tanks</h6>
          <p class="card__paragraph paragraph">
            Lorem ipsum dolor sit amet consectetur. Cursus ullamcorper mi ipsum nunc. Turpis volutpat sollicitudin viverra sed vel amet. Diam vulputate felis arcu volutpat at. Id nisi eget.
          </p>
          <span class="card__link">Read more 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
            <path d="M20.434 0.20932C20.2986 0.343388 20.2225 0.525199 20.2225 0.714771C20.2225 0.904344 20.2986 1.08615 20.434 1.22022L23.5345 4.28939H0.722227C0.530682 4.28939 0.346979 4.36471 0.211535 4.49879C0.0760899 4.63286 0 4.81471 0 5.00432C0 5.19393 0.0760899 5.37577 0.211535 5.50984C0.346979 5.64392 0.530682 5.71924 0.722227 5.71924H23.5345L20.434 8.78841C20.3024 8.92324 20.2296 9.10384 20.2312 9.29129C20.2329 9.47874 20.3088 9.65805 20.4428 9.7906C20.5767 9.92316 20.7578 9.99834 20.9472 9.99997C21.1365 10.0016 21.319 9.92954 21.4552 9.79931L25.7885 5.50977C25.9239 5.3757 26 5.19389 26 5.00432C26 4.81474 25.9239 4.63293 25.7885 4.49886L21.4552 0.20932C21.3197 0.0752926 21.1361 0 20.9446 0C20.7531 0 20.5694 0.0752926 20.434 0.20932Z" fill="white"/>
            </svg>
          </span>
        </div>
      </a>

      <a href="#" class="card">
        <figure class="card__figure">
          <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/application-5.jpg" />
          <figcaption class="card__caption">Roads and infrastructure</figcaption>
        </figure>

        <div class="card__text">
          <h6 class="card__title">Roads and infrastructure</h6>
          <p class="card__paragraph paragraph">
            Lorem ipsum dolor sit amet consectetur. Cursus ullamcorper mi ipsum nunc. Turpis volutpat sollicitudin viverra sed vel amet. Diam vulputate felis arcu volutpat at. Id nisi eget.
          </p>
          <span class="card__link">Read more 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
            <path d="M20.434 0.20932C20.2986 0.343388 20.2225 0.525199 20.2225 0.714771C20.2225 0.904344 20.2986 1.08615 20.434 1.22022L23.5345 4.28939H0.722227C0.530682 4.28939 0.346979 4.36471 0.211535 4.49879C0.0760899 4.63286 0 4.81471 0 5.00432C0 5.19393 0.0760899 5.37577 0.211535 5.50984C0.346979 5.64392 0.530682 5.71924 0.722227 5.71924H23.5345L20.434 8.78841C20.3024 8.92324 20.2296 9.10384 20.2312 9.29129C20.2329 9.47874 20.3088 9.65805 20.4428 9.7906C20.5767 9.92316 20.7578 9.99834 20.9472 9.99997C21.1365 10.0016 21.319 9.92954 21.4552 9.79931L25.7885 5.50977C25.9239 5.3757 26 5.19389 26 5.00432C26 4.81474 25.9239 4.63293 25.7885 4.49886L21.4552 0.20932C21.3197 0.0752926 21.1361 0 20.9446 0C20.7531 0 20.5694 0.0752926 20.434 0.20932Z" fill="white"/>
            </svg>
          </span>
        </div>
      </a>

      <a href="#" class="card">
        <figure class="card__figure">
          <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/application-6.jpg" />
          <figcaption class="card__caption">Channels and port infrastructure</figcaption>
        </figure>

        <div class="card__text">
          <h6 class="card__title">Channels and port infrastructure</h6>
          <p class="card__paragraph paragraph">
            Lorem ipsum dolor sit amet consectetur. Cursus ullamcorper mi ipsum nunc. Turpis volutpat sollicitudin viverra sed vel amet. Diam vulputate felis arcu volutpat at. Id nisi eget.
          </p>
          <span class="card__link">Read more 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
            <path d="M20.434 0.20932C20.2986 0.343388 20.2225 0.525199 20.2225 0.714771C20.2225 0.904344 20.2986 1.08615 20.434 1.22022L23.5345 4.28939H0.722227C0.530682 4.28939 0.346979 4.36471 0.211535 4.49879C0.0760899 4.63286 0 4.81471 0 5.00432C0 5.19393 0.0760899 5.37577 0.211535 5.50984C0.346979 5.64392 0.530682 5.71924 0.722227 5.71924H23.5345L20.434 8.78841C20.3024 8.92324 20.2296 9.10384 20.2312 9.29129C20.2329 9.47874 20.3088 9.65805 20.4428 9.7906C20.5767 9.92316 20.7578 9.99834 20.9472 9.99997C21.1365 10.0016 21.319 9.92954 21.4552 9.79931L25.7885 5.50977C25.9239 5.3757 26 5.19389 26 5.00432C26 4.81474 25.9239 4.63293 25.7885 4.49886L21.4552 0.20932C21.3197 0.0752926 21.1361 0 20.9446 0C20.7531 0 20.5694 0.0752926 20.434 0.20932Z" fill="white"/>
            </svg>
          </span>
        </div>
      </a>
    </div>

    <div class="applications__button-box">
      <a href="#learn-more" class="applications__button button button--outlined">Learn More</a>
    </div>
  </div>
</section>

<section id="advantages" class="advantages">
  <div class="advantages__container">
    <h3 class="advantages__heading-3 heading-3"><span>Future of Concrete</span> Reinfocement <i>now made in India</i></h3>

    <div class="advantages__grid">

      <div class="advantages__col advantages__col--1">

        <article class="content-box">
          <div class="content-box__text">
            <h5 class="content-box__title">Cost Efficient</h5>
            <p class="content-box__paragraph paragraph">GFRP is a cost-efficient product that reduces the overall cost of the project</p>
          </div>
          <div class="content-box__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantage-3.svg" />
          </div>
        </article>

        <article class="content-box">
          <div class="content-box__text">
            <h5 class="content-box__title">Corrosion Resistance</h5>
            <p class="content-box__paragraph paragraph">GFRP, unlike Steel, does not oxidise on exposure to water and air. It is a non-corrosive product.</p>
          </div>
          <div class="content-box__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantage-1.svg" />
          </div>
        </article>

        <article class="content-box">
          <div class="content-box__text">
            <h5 class="content-box__title">Non-Conductivity to Heat/Electricity</h5>
            <p class="content-box__paragraph paragraph">GFRP rebars do not conduct Electricity nor Heat. This leads to higher safety of the project and the people around it.</p>
          </div>
          <div class="content-box__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantage-2.svg" />
          </div>
        </article>

      </div>

      <div class="advantages__col advantages__col--2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages.png" alt="advantages armatures" />
      </div>

      <div class="advantages__col advantages__col--3">

        <article class="content-box content-box--left">
          <div class="content-box__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantage-4.svg" />
          </div>
          <div class="content-box__text">
            <h5 class="content-box__title">Light Weight</h5>
            <p class="content-box__paragraph paragraph">GFRP rebars are 1/4th the weight of similar dia steel rebars. Lowering costs of transportation and labour handling.</p>
          </div>
        </article>

        <article class="content-box content-box--left">
          <div class="content-box__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantage-5.svg" />
          </div>
          <div class="content-box__text">
            <h5 class="content-box__title">Higher Tensile Strength</h5>
            <p class="content-box__paragraph paragraph">GFRP rebars have tensile strengths above 1000 MPa. In comparison, Steel rebars usually have it around 550 Mpa.</p>
          </div>
        </article>

        <article class="content-box content-box--left">
          <div class="content-box__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantage-6.svg" />
          </div>
          <div class="content-box__text">
            <h5 class="content-box__title">Eco Friendly</h5>
            <p class="content-box__paragraph paragraph">Production and usage of GFRP help reduce CO2 emissions by at least 43% over Steel rebars [1]</p>
          </div>
        </article>
      </div>

    </div>

  </div>
</section>

<section id="projects" class="projects">
  <div class="projects__container">
    <h3 class="projects__heading-3 heading-3"><span>POPULAR</span> PROJECTS <i>USING GFRP</i></h3>

    <div class="projects__grid">

      <a href="#" class="card">
        <figure class="card__figure">
          <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/project-1.jpg" />
          <figcaption class="card__caption">Name project</figcaption>
        </figure>

        <div class="card__text">
          <h6 class="card__title">Name project</h6>
          <p class="card__paragraph paragraph">
            Lorem ipsum dolor sit amet consectetur. Cursus ullamcorper mi ipsum nunc. Turpis volutpat sollicitudin viverra sed vel amet. Diam vulputate felis arcu volutpat at. Id nisi eget.
          </p>
          <span class="card__link">Read more 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
            <path d="M20.434 0.20932C20.2986 0.343388 20.2225 0.525199 20.2225 0.714771C20.2225 0.904344 20.2986 1.08615 20.434 1.22022L23.5345 4.28939H0.722227C0.530682 4.28939 0.346979 4.36471 0.211535 4.49879C0.0760899 4.63286 0 4.81471 0 5.00432C0 5.19393 0.0760899 5.37577 0.211535 5.50984C0.346979 5.64392 0.530682 5.71924 0.722227 5.71924H23.5345L20.434 8.78841C20.3024 8.92324 20.2296 9.10384 20.2312 9.29129C20.2329 9.47874 20.3088 9.65805 20.4428 9.7906C20.5767 9.92316 20.7578 9.99834 20.9472 9.99997C21.1365 10.0016 21.319 9.92954 21.4552 9.79931L25.7885 5.50977C25.9239 5.3757 26 5.19389 26 5.00432C26 4.81474 25.9239 4.63293 25.7885 4.49886L21.4552 0.20932C21.3197 0.0752926 21.1361 0 20.9446 0C20.7531 0 20.5694 0.0752926 20.434 0.20932Z" fill="white"/>
            </svg>
          </span>
        </div>
      </a>

      <a href="#" class="card">
        <figure class="card__figure">
          <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/project-2.jpg" />
          <figcaption class="card__caption">Name project</figcaption>
        </figure>

        <div class="card__text">
          <h6 class="card__title">Name project</h6>
          <p class="card__paragraph paragraph">
            Lorem ipsum dolor sit amet consectetur. Cursus ullamcorper mi ipsum nunc. Turpis volutpat sollicitudin viverra sed vel amet. Diam vulputate felis arcu volutpat at. Id nisi eget.
          </p>
          <span class="card__link">Read more 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
            <path d="M20.434 0.20932C20.2986 0.343388 20.2225 0.525199 20.2225 0.714771C20.2225 0.904344 20.2986 1.08615 20.434 1.22022L23.5345 4.28939H0.722227C0.530682 4.28939 0.346979 4.36471 0.211535 4.49879C0.0760899 4.63286 0 4.81471 0 5.00432C0 5.19393 0.0760899 5.37577 0.211535 5.50984C0.346979 5.64392 0.530682 5.71924 0.722227 5.71924H23.5345L20.434 8.78841C20.3024 8.92324 20.2296 9.10384 20.2312 9.29129C20.2329 9.47874 20.3088 9.65805 20.4428 9.7906C20.5767 9.92316 20.7578 9.99834 20.9472 9.99997C21.1365 10.0016 21.319 9.92954 21.4552 9.79931L25.7885 5.50977C25.9239 5.3757 26 5.19389 26 5.00432C26 4.81474 25.9239 4.63293 25.7885 4.49886L21.4552 0.20932C21.3197 0.0752926 21.1361 0 20.9446 0C20.7531 0 20.5694 0.0752926 20.434 0.20932Z" fill="white"/>
            </svg>
          </span>
        </div>
      </a>

      <a href="#" class="card">
        <figure class="card__figure">
          <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/project-3.jpg" />
          <figcaption class="card__caption">Name project</figcaption>
        </figure>

        <div class="card__text">
          <h6 class="card__title">Name project</h6>
          <p class="card__paragraph paragraph">
            Lorem ipsum dolor sit amet consectetur. Cursus ullamcorper mi ipsum nunc. Turpis volutpat sollicitudin viverra sed vel amet. Diam vulputate felis arcu volutpat at. Id nisi eget.
          </p>
          <span class="card__link">Read more 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
            <path d="M20.434 0.20932C20.2986 0.343388 20.2225 0.525199 20.2225 0.714771C20.2225 0.904344 20.2986 1.08615 20.434 1.22022L23.5345 4.28939H0.722227C0.530682 4.28939 0.346979 4.36471 0.211535 4.49879C0.0760899 4.63286 0 4.81471 0 5.00432C0 5.19393 0.0760899 5.37577 0.211535 5.50984C0.346979 5.64392 0.530682 5.71924 0.722227 5.71924H23.5345L20.434 8.78841C20.3024 8.92324 20.2296 9.10384 20.2312 9.29129C20.2329 9.47874 20.3088 9.65805 20.4428 9.7906C20.5767 9.92316 20.7578 9.99834 20.9472 9.99997C21.1365 10.0016 21.319 9.92954 21.4552 9.79931L25.7885 5.50977C25.9239 5.3757 26 5.19389 26 5.00432C26 4.81474 25.9239 4.63293 25.7885 4.49886L21.4552 0.20932C21.3197 0.0752926 21.1361 0 20.9446 0C20.7531 0 20.5694 0.0752926 20.434 0.20932Z" fill="white"/>
            </svg>
          </span>
        </div>
      </a>

      <a href="#" class="card">
        <figure class="card__figure">
          <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/project-4.jpg" />
          <figcaption class="card__caption">Name project</figcaption>
        </figure>

        <div class="card__text">
          <h6 class="card__title">Name project</h6>
          <p class="card__paragraph paragraph">
            Lorem ipsum dolor sit amet consectetur. Cursus ullamcorper mi ipsum nunc. Turpis volutpat sollicitudin viverra sed vel amet. Diam vulputate felis arcu volutpat at. Id nisi eget.
          </p>
          <span class="card__link">Read more 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
            <path d="M20.434 0.20932C20.2986 0.343388 20.2225 0.525199 20.2225 0.714771C20.2225 0.904344 20.2986 1.08615 20.434 1.22022L23.5345 4.28939H0.722227C0.530682 4.28939 0.346979 4.36471 0.211535 4.49879C0.0760899 4.63286 0 4.81471 0 5.00432C0 5.19393 0.0760899 5.37577 0.211535 5.50984C0.346979 5.64392 0.530682 5.71924 0.722227 5.71924H23.5345L20.434 8.78841C20.3024 8.92324 20.2296 9.10384 20.2312 9.29129C20.2329 9.47874 20.3088 9.65805 20.4428 9.7906C20.5767 9.92316 20.7578 9.99834 20.9472 9.99997C21.1365 10.0016 21.319 9.92954 21.4552 9.79931L25.7885 5.50977C25.9239 5.3757 26 5.19389 26 5.00432C26 4.81474 25.9239 4.63293 25.7885 4.49886L21.4552 0.20932C21.3197 0.0752926 21.1361 0 20.9446 0C20.7531 0 20.5694 0.0752926 20.434 0.20932Z" fill="white"/>
            </svg>
          </span>
        </div>
      </a>

      <a href="#" class="card">
        <figure class="card__figure">
          <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/project-5.jpg" />
          <figcaption class="card__caption">Name project</figcaption>
        </figure>

        <div class="card__text">
          <h6 class="card__title">Name project</h6>
          <p class="card__paragraph paragraph">
            Lorem ipsum dolor sit amet consectetur. Cursus ullamcorper mi ipsum nunc. Turpis volutpat sollicitudin viverra sed vel amet. Diam vulputate felis arcu volutpat at. Id nisi eget.
          </p>
          <span class="card__link">Read more 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
            <path d="M20.434 0.20932C20.2986 0.343388 20.2225 0.525199 20.2225 0.714771C20.2225 0.904344 20.2986 1.08615 20.434 1.22022L23.5345 4.28939H0.722227C0.530682 4.28939 0.346979 4.36471 0.211535 4.49879C0.0760899 4.63286 0 4.81471 0 5.00432C0 5.19393 0.0760899 5.37577 0.211535 5.50984C0.346979 5.64392 0.530682 5.71924 0.722227 5.71924H23.5345L20.434 8.78841C20.3024 8.92324 20.2296 9.10384 20.2312 9.29129C20.2329 9.47874 20.3088 9.65805 20.4428 9.7906C20.5767 9.92316 20.7578 9.99834 20.9472 9.99997C21.1365 10.0016 21.319 9.92954 21.4552 9.79931L25.7885 5.50977C25.9239 5.3757 26 5.19389 26 5.00432C26 4.81474 25.9239 4.63293 25.7885 4.49886L21.4552 0.20932C21.3197 0.0752926 21.1361 0 20.9446 0C20.7531 0 20.5694 0.0752926 20.434 0.20932Z" fill="white"/>
            </svg>
          </span>
        </div>
      </a>

      <a href="#" class="card">
        <figure class="card__figure">
          <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/project-6.jpg" />
          <figcaption class="card__caption">Name project</figcaption>
        </figure>

        <div class="card__text">
          <h6 class="card__title">Name project</h6>
          <p class="card__paragraph paragraph">
            Lorem ipsum dolor sit amet consectetur. Cursus ullamcorper mi ipsum nunc. Turpis volutpat sollicitudin viverra sed vel amet. Diam vulputate felis arcu volutpat at. Id nisi eget.
          </p>
          <span class="card__link">Read more 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
            <path d="M20.434 0.20932C20.2986 0.343388 20.2225 0.525199 20.2225 0.714771C20.2225 0.904344 20.2986 1.08615 20.434 1.22022L23.5345 4.28939H0.722227C0.530682 4.28939 0.346979 4.36471 0.211535 4.49879C0.0760899 4.63286 0 4.81471 0 5.00432C0 5.19393 0.0760899 5.37577 0.211535 5.50984C0.346979 5.64392 0.530682 5.71924 0.722227 5.71924H23.5345L20.434 8.78841C20.3024 8.92324 20.2296 9.10384 20.2312 9.29129C20.2329 9.47874 20.3088 9.65805 20.4428 9.7906C20.5767 9.92316 20.7578 9.99834 20.9472 9.99997C21.1365 10.0016 21.319 9.92954 21.4552 9.79931L25.7885 5.50977C25.9239 5.3757 26 5.19389 26 5.00432C26 4.81474 25.9239 4.63293 25.7885 4.49886L21.4552 0.20932C21.3197 0.0752926 21.1361 0 20.9446 0C20.7531 0 20.5694 0.0752926 20.434 0.20932Z" fill="white"/>
            </svg>
          </span>
        </div>
      </a>
      
    </div>
  </div>
</section>

<section id="future-2" class="future future--2">
  <div class="future__container">
    <div class="future__button">
      <a href="#call-me-back" class="button">Call me back</a>
    </div>

    <div class="future__text">
      <h4 class="future__heading-4 heading-4">Buy the <span>future</span></h4>
      <h6 class="future__heading-6 heading-6">Leave a request and we will call you back.</h6>
      <p class="future__paragraph paragraph">
        Neque elementum eros quis dolor ipsum. Nunc faucibus etiam purus egestas. Ultricies consectetur semper venenatis enim odio lectus sed. Nec ultrices nisl purus dignissim neque nec et.
      </p>
    </div>
  </div>

  <div class="future__image">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/future-2.png" alt="Armatures"/>
  </div>
</section>

</main>


<?php get_footer(); ?>
