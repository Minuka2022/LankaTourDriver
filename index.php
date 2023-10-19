<?php
include_once 'components/header.php';
?>

<meta name="description"
  content="Experience the wonders of Sri Lanka with The Best Tour Operators in Sri Lanka! Our knowledgeable drivers and tours will ensure you have the trip of a lifetime.">
<meta name="thumbnail" content="assets/img/lankatourdriver.com-thumbnail-1200x627.webp">
<title>Best Tour Operators In Sri Lanka | Sri Lanka Private Guide | Lanka Tour Driver</title>

</head>


<body id="top" data-target=".navbar-custom">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMZWHLJ" height="0" width="0"
      style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div id="nav">
    <?php
    include_once 'components/header-nav.php';
    ?>
  </div>

  <!-- Section: intro -->
  <section id="intro" class="home-section intro">
    <div class="container-fluid">
      <div class="slogan wow" data-wow-delay="0.4s">
        <h1>Explore Sri Lanka's wonders with the Best Tour Operators In Sri Lanka</h1>
        <p>The ideal Sri Lankan tour operator to plan your next Sri Lanka holiday.</p>
      </div>
      <div>
        <a href="cost-of-travel-in-sri-lanka" class="btn btn-bg btn-bg-clr-1">Sri Lanka Travel Cost</a>
      </div>
    </div>
  </section>

  <section class="home-section">
    <div class="trip-advisor">



      <div class="container">
        <div class="row">
          <div class="col-xs-3 col-md-3">
            <a
              href="https://www.tripadvisor.com/Attraction_Review-g7377537-d9851060-Reviews-Lanka_Tour_Driver-Hingurakgoda_North_Central_Province.html"><img
              loading="lazy" src="assets/img/lanka-tour-driver-tripadvisor-travelers-choice-2023.webp"
                alt="Lanka Tour Driver Tripadvisor Traveler's Choice 2023" class="img-responsive"
                style="margin-inline: auto;"></a>

          </div>

          <div class="col-xs-3 col-md-3">
            <a
              href="https://www.tripadvisor.com/Attraction_Review-g7377537-d9851060-Reviews-Lanka_Tour_Driver-Hingurakgoda_North_Central_Province.html"><img
              loading="lazy" src="assets/img/lanka-tour-driver-tripadvisor-travelers-choice-2022.webp"
                alt="Lanka Tour Driver Tripadvisor Traveler's Choice 2022" class="img-responsive"
                style="margin-inline: auto;"></a>

          </div>

          <div class="col-xs-3 col-md-3">
            <a
              href="https://www.tripadvisor.com/Attraction_Review-g7377537-d9851060-Reviews-Lanka_Tour_Driver-Hingurakgoda_North_Central_Province.html"><img
              loading="lazy" src="assets/img/lanka-tour-driver-tripadvisor-travelers-choice-2020.webp"
                alt="Lanka Tour Driver Tripadvisor Traveler's Choice 2020" class="img-responsive"
                style="margin-inline: auto;"></a>

          </div>

          <div class="col-xs-3 col-md-3">
            <a
              href="https://www.tripadvisor.com/Attraction_Review-g7377537-d9851060-Reviews-Lanka_Tour_Driver-Hingurakgoda_North_Central_Province.html"><img
              loading="lazy" src="assets/img/lanka-tour-driver-tripadvisor-excellence-2019.webp"
                alt="Lanka Tour Driver Tripadvisor Excellence 2019" class="img-responsive"
                style="margin-inline: auto;"></a>

          </div>
        </div>
      </div>
    </div>
  </section>




<section class="home-section" style="background-color: #ebf1fa;   height: auto; 
        padding: 40px; margin:auto;" >
    <div class="container">
      <div class="row">
        
        <div class="col-md-5">
        <h2 class=" clr-pm" style="font-size:45px; margin-top:80px; ">Plan your trip from here</h2>
        </div>
        <br>
        <br>
        <br>
        <div class="col-md-6">
        <div style="padding: 25px; border: 2px solid white; border-radius: 10px; background-color: white; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
                    <div class="form-group">
                        <label for="travel-method">How do you want to travel?</label>
                        
                       
                       
                        <select class="form-control" id="travel-method" name="travel-method">
                            <option value="select">select</option>
                            <option value="Alone">Alone</option>
                            <option value="As a pair">As a pair</option>
                            <option value="With the family">With the family</option>
                            <option value="With friends">With friends</option>

                        </select>
                     </div>
                     <br>
                     
                    <div class="form-group">
                        <label for="accommodation-type">What type of accommodation do you want?</label>
                        <select class="form-control" id="accommodation-type" name="accommodation-type">
                            <option value="select">select</option>
                                <option value="Budget (2 stars)">Budget (2 stars)</option>
                                <option value="Standard (3 stars - most booked)">Standard (3 stars - most booked)</option>
                                <option value="Comfort (4 stars)">Comfort (4 stars)</option>
                                <option value="Luxury (5+ stars)">Luxury (5+ stars)</option>

                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="planning-progress">How far along are you with your travel planning?</label>
                        <select class="form-control" id="planning-progress" name="planning-progress">
                           <option value="select">select</option>
                            <option value="A NEO travel specialist should advise me">A NEO travel specialist should advise me</option>
                            <option value="I already know roughly what I want">I already know roughly what I want</option>
                            <option value="I will book directly if your offer is right">I will book directly if your offer is right</option>

                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <a href="plan-your-sri-lanka-tour.php" id="plan-trip-button" class="btn btn-success fw-bold">einreichen</a>
                    </div>
                </div>
        </div>
      </div>
    </div>
  </section>
                <script>
                          document.getElementById('plan-trip-button').addEventListener('click', function () {
                              // Get the selected values
                              var travelMethod = document.getElementById('travel-method').value;
                              var accommodationType = document.getElementById('accommodation-type').value;
                              var planningProgress = document.getElementById('planning-progress').value;
                      
                              // Store the selected values in local storage
                              localStorage.setItem('travelMethod_submit', travelMethod); // Unique ID for this page
                              localStorage.setItem('accommodationType_submit', accommodationType); // Unique ID for this page
                              localStorage.setItem('planningProgress_submit', planningProgress); // Unique ID for this page
                          });
                      </script>

<br>


  <section class="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="clr-pm">Best Sri Lanka Tours & Trips 2023</h2>
          <p>Lanka Tour Driver is an expert of inbound tourism industry in Sri Lanka and having been in business for
            more
            than a decade, .
            We provide the best Sri Lanka round trips vacation packages in 2023, including Honeymoon Tours, Nature,
            Wildlife and Safari Tours in Sri Lanka, Cultural & Heritage Tours, and more. In addition to tour packages,
            Lanka Tour Driver also offers comprehensive consultation to choose hotel or inn accommodations within your
            budget.</p>
          <a href="sri-lanka-tour-packages" class="btn btn-bg btn-bg-clr-1" style="margin-bottom:2em">Best Sri
            Lanka Tours</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 pt-3">
          <div class=" card product-card card__multi-days">
            <a href="sri-lanka-tour-packages/sri-lanka-classic-tour-4-days-3-nights"><img class="card-img-top"
            loading="lazy"  src="assets/img/tour-packages/tour-package-cards/lankatourdriver.com-mountain-view-sri-lanka-358x220.webp"
                alt="04 Days 03 Nights Tour" style="height: 220px" /></a>
            <div class="card-body">
              <h3 class="card-title border-bottom pb-3">
                Sri Lanka Classic Tour
              </h3>
              <p class="card-days">4 days / 3 nights</p>
              <p class="card-text card-text-round">
                <small></i>Kandy<i class="fas fa-circle"></i>Nuwara Eliya<i class="fas fa-circle"></i>Bentota<i
                    class="fas fa-circle"></i>Airport via Colombo
                </small>
              </p>

              <a href="sri-lanka-tour-packages/sri-lanka-classic-tour-4-days-3-nights" class="card-button">View
                Itinerary</a>
            </div>

          </div>
        </div>
        <div class="col-md-6 col-lg-4 pt-3">
          <div class=" card product-card card__multi-days">
            <a href="sri-lanka-tour-packages/wonderland-acceleration-5-days-4-nights-in-sri-lanka"><img
                class="card-img-top"
                loading="lazy"  src="assets/img/tour-packages/tour-package-cards/lankatourdriver.com-safari-in-sri-lanka-358x220.webp"
                alt="05 Days 04 Nights Tour" style="height: 220px" /></a>
            <div class="card-body">
              <h3 class="card-title border-bottom pb-3">
                Wonderland Acceleration
              </h3>
              <p class="card-days">5 days / 4 nights</p>
              <p class="card-text card-text-round">
                <small>Sigiriya <i class="fas fa-circle"></i> Kandy <i class="fas fa-circle"></i> Nuwara Eliya <i
                    class="fas fa-circle"></i> Bentota <i class="fas fa-circle"></i>
                  Airport via
                  Colombo</small>
              </p>

              <a href="sri-lanka-tour-packages/wonderland-acceleration-5-days-4-nights-in-sri-lanka"
                class="card-button">View
                Itinerary</a>
            </div>

          </div>
        </div>
        <div class="col-md-6 col-lg-4 pt-3">
          <div class=" card product-card card__multi-days">
            <a href="sri-lanka-tour-packages/mesmerizing-sri-lanka-5-days-4-nights"><img class="card-img-top"
            loading="lazy" src="assets/img/tour-packages/tour-package-cards/lankatourdriver.com-elephants-minneriya-national-park-358x220.webp"
                alt="05 Days 04 Nights Tour" style="height: 220px" /></a>
            <div class="card-body">
              <h3 class="card-title border-bottom pb-3">
                Mesmerizing Sri Lanka
              </h3>
              <p class="card-days">5 days / 4 nights</p>
              <p class="card-text card-text-round">
                <small>Kandy<i class="fas fa-circle"></i>Nuwara Eliya<i class="fas fa-circle"></i>Yala<i
                    class="fas fa-circle"></i>South Coast</small>
              </p>

              <a href="sri-lanka-tour-packages/mesmerizing-sri-lanka-5-days-4-nights" class="card-button">View
                Itinerary</a>
            </div>

          </div>
        </div>
        <div class="col-md-6 col-lg-4 pt-3">
          <div class=" card product-card card__multi-days">
            <a href="sri-lanka-tour-packages/scenic-sri-lanka-11-days-10-nights"><img class="card-img-top"
            loading="lazy"  src="assets/img/tour-packages/tour-package-cards/lankatourdriver.com-pidurangala-view-point-sri-lanka-358x220.webp"
                alt="11 Days 10 Nights Tour" style="height: 220px" /></a>
            <div class="card-body">
              <h3 class="card-title border-bottom pb-3">
                Scenic Sri Lanka
              </h3>
              <p class="card-days">11 days / 10 nights</p>
              <p class="card-text card-text-round">
                <small>Anuradhapura <i class="fas fa-circle"></i> Sigiriya <i class="fas fa-circle"></i> Polonnaruwa <i
                    class="fas fa-circle"></i> Kandy <i class="fas fa-circle"></i> Adam's
                  Peak <i class="fas fa-circle"></i> Nuwara Eliya <i class="fas fa-circle"></i> Yala <i
                    class="fas fa-circle"></i> South Coast <i class="fas fa-circle"></i>
                  Negombo</small>
              </p>

              <a href="sri-lanka-tour-packages/scenic-sri-lanka-11-days-10-nights" class="card-button">View
                Itinerary</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 pt-3">
          <div class=" card product-card card__multi-days">
            <a href="sri-lanka-tour-packages/relax-and-unwind-in-sri-lanka-20-days-19-nights"><img class="card-img-top"
            loading="lazy" src="assets/img/tour-packages/tour-package-cards/lankatourdriver.com-sigiriya-waling-path-sri-lanka-358x220.webp"
                alt="20 Days 19 Nights Tour" style="height: 220px" /></a>
            <div class="card-body">
              <h3 class="card-title border-bottom pb-3">
                Relax and Unwind in Sri Lanka
              </h3>
              <p class="card-days">20 days / 19 nights</p>
              <p class="card-text card-text-round">
                <small>Negombo <i class="fas fa-circle"></i> Anuradhapura <i class="fas fa-circle"></i> Wilpattu <i
                    class="fas fa-circle"></i> Sigiriya <i class="fas fa-circle"></i> Kandy <i
                    class="fas fa-circle"></i>
                  Nuwara Eliya <i class="fas fa-circle"></i> Ella <i class="fas fa-circle"></i> Yala <i
                    class="fas fa-circle"></i> South Coast
                </small>
              </p>

              <a href="sri-lanka-tour-packages/relax-and-unwind-in-sri-lanka-20-days-19-nights" class="card-button">View
                Itinerary</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 pt-3">
          <div class=" card product-card card__multi-days">
            <a href="sri-lanka-tour-packages/your-travel-wishlist-in-sri-lanka-21-days-20-nights"><img
                class="card-img-top"
                loading="lazy" src="assets/img/tour-packages/tour-package-cards/lankatourdriver.com-wood-carving-in-sri-lanka-358x220.webp"
                alt="21 Days 20 Nights Tour" style="height: 220px" /></a>
            <div class="card-body">
              <h3 class="card-title border-bottom pb-3">
                Your travel wishlist in Sri Lanka
              </h3>
              <p class="card-days">21 days / 20 nights</p>
              <p class="card-text card-text-round">
                <small>Anuradhapura <i class="fas fa-circle"></i> Wilpattu <i class="fas fa-circle"></i> Mannar <i
                    class="fas fa-circle"></i> Jaffna <i class="fas fa-circle"></i> Nilaveli <i
                    class="fas fa-circle"></i>
                  Pigeon Island <i class="fas fa-circle"></i> Sigiriya <i class="fas fa-circle"></i> Polonnaruwa <i
                    class="fas fa-circle"></i> Kandy <i class="fas fa-circle"></i> Adam's Peak <i
                    class="fas fa-circle"></i>
                  Nuwara Eliya <i class="fas fa-circle"></i> Ella <i class="fas fa-circle"></i> Yala <i
                    class="fas fa-circle"></i>
                  Sinharaja <i class="fas fa-circle"></i> South Coast <i class="fas fa-circle"></i> Negombo
                </small>
              </p>

              <a href="sri-lanka-tour-packages/your-travel-wishlist-in-sri-lanka-21-days-20-nights"
                class="card-button">View
                Itinerary</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="home-section about">
    <div class="container">
      <div class="row">
        <h2 class="text-center clr-pm">Greetings from Sri Lanka!</h2>
        <div class="col-md-5">
          <img class="img-responsive" loading="lazy" src="assets/img/team/lankatourdriver.com-harsha-bandara.webp" alt="Harsha Bandara">
        </div>
        <div class="col-md-7">
          <p>Hello travelers! My name is Harsha Bandara, and I'm a well-experienced licensed tour guide from Sri
            Lanka. With the help of some of my closest friends and members of my own family, I run a modest travel
            agency in Sri Lanka. There are around 20 persons that are holding hands with us across the best tour
            operator
            team in Sri Lanka that we have.
          <p>While doing so, I also serve as a personal driver for guided tours in Sri Lanka and day visits all around
            the country. We explore all of the island's lesser-known, more significant, more intriguing, and more
            visually arresting eye-catchy locations across Sri Lanka.</p>
          <p>I am the proprietor of our Sri Lanka specialist tour operator company, "Lanka Tour Driver." My wife “Kitty”
            will assist you
            with all of your travel needs as a tour executive. We are proud to say that Lanka Tour Driver has the
            best registered tourist drivers for guided trips in Sri Lanka. Our goal is to take you safely and
            comfortably to the most stunning locations in Sri Lanka in 2023.</p>
          <p>For your Best Sri Lanka Tours & Holidays in 2023, we have a selection of cheap and affordable holiday
            packages.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="home-section">
    <div class="reviews">


      <div class="container">

        <div class="row">
          <div class="col-sm-5">
            <div class="reviews-intro">
              <h2 class="reviews-heading">Best reviews for the best service</h2>
              <a href="https://www.tripadvisor.com/Attraction_Review-g7377537-d9851060-Reviews-Lanka_Tour_Driver-Hingurakgoda_North_Central_Province.html"
                target="_blank" class="btn btn-bg btn-bg-clr-1">Lanka Tour Driver Reviews</a>
            </div>

          </div>
          <div class="col-sm-7">
            <div id="TA_selfserveprop728" class="TA_selfserveprop">
              <ul id="bYOrKvKxYc" class="TA_links PNsoy8flg">
                <li id="XTlTztkj" class="PjSylBwvEn"><a target="_blank"
                    href="https://www.tripadvisor.com/Attraction_Review-g7377537-d9851060-Reviews-Lanka_Tour_Driver-Hingurakgoda_North_Central_Province.html"><img
                      src="https://www.tripadvisor.com/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-11900-2.svg"
                      style="max-width:100px" alt="TripAdvisor" /></a></li>
              </ul>
            </div>
            <script async
              src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=728&amp;locationId=9851060&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2"
              data-loadtrk onload="this.loadtrk=true"></script>
          </div>

        </div>


      </div>
    </div>
  </section>

  <section class="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="clr-pm">We are more than a tour operator in Sri Lanka.</h2>
          <p>We not only provide tour services, but we also provide food and lodging accommodations (fees are listed
            separately), network services from the best telecommunication providers in Sri Lanka, water upon arrival,
            health care services from the best medical institutions in Sri Lanka, and travel insurance for Sri Lanka.
          </p>
        </div>
      </div>
      <div class="row">

        <div class="col-md-3">
          <div class="features">


            <img loading="lazy" src="assets/img/icons/lankatourdriver.com-free-consultation.png" alt="Free Travel Consultation">
            <p>100% free tour consultation in Sri Lanka</p>

          </div>
        </div>
        <div class="col-md-3">
          <div class="features">
            <img loading="lazy" src="assets/img/icons/lankatourdriver.com-cab-taxi.png" alt="Car and Taxi Services, Sri Lanka">
            <p>Car and taxi services with experienced driver-guide service (Offered as part of the tour package)</p>

          </div>
        </div>
        <div class="col-md-3">
          <div class="features">
            <img  loading="lazy" src="assets/img/icons/lankatourdriver.com-privare-driver.png"
              alt="Professional private driver guide services in Sri Lanka">
            <p>Professional private driver guide services in Sri Lanka</p>

          </div>
        </div>
        <div class="col-md-3">
          <div class="features border-0">
            <img loading="lazy" src="assets/img/icons/lankatourdriver.com-customized-tours.png"
              alt="Personalized tour plans and itineraries in Sri Lanka">
            <p>Flexible and personalized tour plans and itineraries in Sri Lanka (Free of charge)</p>

          </div>
        </div>

      </div>

    </div>
  </section>

  <section id="other-services" class="home-section">
    <div class="other-services-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Lanka Tour Driver provides a wide range of travel and tour services in Sri Lanka.</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li>Family holidays and Tours in Sri Lanka
              <li>Group Tours in Sri Lanka
              <li>Sri Lanka Tours for Solo / Single Travellers
              <li>Sri Lanka Tours & Trips for Couples
              <li>Sri Lanka Honeymoon Tours</li>
              <li>Day tours in Sri Lanka</li>
              <li>Multi days tours in Sri Lanka</li>
              <li>Cultural and religious tours in Sri Lanka</li>
              <li>Sri Lanka Airport Transfers</li>
              <li>Adventure Tours in Sri Lanka</li>
              <li>White Water Rafting in Sri Lanka</li>
              <li>Trekking & Hiking in Sri Lanka</li>
              <li>Water Sports in Sri Lanka : Scuba Diving, Snorkelling, Canoeing, Deep Sea Fishing, Sailing in Bentota,
                Catamaran, Water Skiing, Jet Ski, Windsurfing</li>
              <li>Hot Air Balloon Ride in Sri Lanka</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="home-section">
    <div class="drivers">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <a href="sri-lanka-private-driver"><img loading="lazy" src="assets/img/lankatourdriver.com-drivers-homepage.webp"
                alt="Sri Lanka Private Driver" class="img-responsive"></a>
          </div>
          <div class="col-md-6">
            <h2 class="clr-pm" style="margin-top: 1em;">Sri Lanka Private Drivers and Tour Guides.</h2>
            <p>We specialize in offering quality ground transportation, such as chauffeured tours and transfers with
              scenic stops led by private drivers or Professional Guides who are also licensed drivers.
              In addition to being free to choose where and when you travel, you'll have a local guide who will instruct
              you about the history of each location and make recommendations on where to dine and shop.
            </p>
            <div>
              <a href="sri-lanka-private-driver" class="btn btn-bg btn-bg-clr-1">Sri Lanka Private
                Drivers</a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </section>

  <section class="home-section">
    <div class="eco-tours">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Take inspiration from the natural beauty of Sri Lanka.</h2>
            <p>Come experience some genuine 'down-to-earth' off-the-beaten-path eco tour experiences in Sri Lanka
              that
              promise to reconnect you with nature like never before. Explore the magnificent natural world outside
              with
              an authentic Sri Lanka eco and adventure tour. Take off to the heart of some incredible wildlife,
              trek,
              hike, mountain climb, best safari tours in Sri Lanka, bird watching tours, snorkelling tours,
              catamaran
              rides, diving, campaigns, island trips, botanical gardens visits, and more...</p>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>

  <section class="home-section" id="yt-video">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="yt-video-area">
            <h2>Sri Lanka was one of the best travel destinations in 2021</h2>
            <p>You can be seeking for a tropical paradise, or you might want to experience the cold weather. In Sri
              Lanka, anything is possible. That is why visitors from all over the world fall in love with our
              enchanted
              island.
              The experience is so good that most visitors follow up their first Sri Lanka tour with additional
              incredible experiences in this gorgeous, yet challenging landscape in the heart of one of the world's
              most
              pure oceans.</p>
            <div class="yt-video-content embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="100%" height="440"
        src="https://www.youtube.com/embed/sChXehSYd4k" allowfullscreen="" loading="lazy"></iframe>

            </div>
            <p class="margin-top-3em">Sri Lanka is a tourism destination that even the natives enjoy. We help you get
              a
              firsthand look at a Sri Lanka tour.</p>
            <ul>
              <li> <i class="far fa-dot-circle"></i> Many gorgeous beaches with stunning sunsets can be seen here.
              </li>
              <li> <i class="far fa-dot-circle"></i> Better Travel from sunny beaches to foggy mountains to lush
                rainforests in just a couple of hours.</li>
              <li> <i class="far fa-dot-circle"></i> Dream destination for brave adventurers, couples, history
                aficionados, nature lovers, and so forth.</li>
              <li> <i class="far fa-dot-circle"></i> Various sorts of delectable and traditional Sri Lankan food
                flavoured with unusual spices</li>
              <li> <i class="far fa-dot-circle"></i> Better known as the smiling nation, the folks are welcoming
                everywhere you go.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center clr-pm">What's happening in Sri Lanka?
            <br><small>


              <a class="clr-pm" rel="noreferrer noopener" target="_blank"
                href="https://instagram.com/lanka_tour_driver/">@lanka_tour_driver</a></small>
          </h2>
          <div loading="lazy" data-mc-src="a7c8c80a-324b-4040-862c-0488e775c576#instagram"></div>

          <script src="https://cdn2.woxo.tech/a.js#64170212275a91993b77d6f8" async data-usrc>
          </script>
        </div>
      </div>
    </div>
  </section>




  <footer>
    <?php include_once 'components/footer.php' ?>
</body>

</html>