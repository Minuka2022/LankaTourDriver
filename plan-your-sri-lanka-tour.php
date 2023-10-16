<?php include_once 'components/header.php'; ?>
<link rel="stylesheet" href="assets/css/itinerary-single.css" rel="preconnect">
<link rel="stylesheet" href="assets/css/ltd-form.css" rel="preconnect" >
<title>Personalize Your Sri Lanka Dream Vacation | Lanka Tour Driver</title>
<meta name="description"
    content="Ready to explore Sri Lanka on your terms? Personalize your tour to include your favorite activities, accommodations, and destinations. Start planning now!">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="nav">
        <?php include_once 'components/header-nav.php'; ?>
    </div>

    <section class="inner-page-header">
        <div class="inner-page-header-background"
            style="background-image: url('assets/img/page-headers/lankatourdriver.com-sri-lanka-little-adams-peak-1400x500.jpg')">
        </div>
        <style>
            @media (max-width: 768px) {
                .inner-page-header .inner-page-header-background {
                    background-position-x: 46%;
                }
            }
        </style>

        <div class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="inne-page-title">Customizable Sri Lanka Tour Packages 2023
                        </h1>
                        <p class="inner-page-sub-title">Don't settle for a cookie-cutter tour of Sri Lanka</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="" style="padding-bottom:10px;padding-top:20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <p>For over 15 years, Lanka Tour Driver has worked with travelers from all
                        over the world, carefully
                        crafting special itineraries for their visits to Sri Lanka.

                        Because of the low cost of our Sri Lanka vacation packages, there is no reason for you to go it
                        alone.
                    </p>
                    <p>

                        We're dedicated to learning what makes a wonderful vacation for you on this beautiful island,
                        from the types of activities you enjoy to the types of accommodations you seek to the distances
                        you're willing to go in search of them.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="" style="padding-bottom:10px;padding-top:20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="ltd-form">
                        <form autocomplete="off" action="contactform/tailormade.php" method="POST">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-section">
                                        <p class="ltd-form-title">I need a guide who speaks :</p>
                                        <div class="select-group select-group__center-text">

                                            <label>English<br><input type="checkbox" name="language[]"
                                                    value="English"></label><br>
                                            <label>German<br><input type="checkbox" name="language[]"
                                                    value="German"></label><br>
                                            <label>French<br><input type="checkbox" name="language[]"
                                                    value="French"></label><br>
                                            <label>Italian<br><input type="checkbox" name="language[]"
                                                    value="Italian"></label><br>
                                            <label>Russian<br><input type="checkbox" name="language[]"
                                                    value="Russian"></label><br>
                                            <label>Hindi<br><input type="checkbox" name="language[]"
                                                    value="Hindi"></label><br>
                                        </div>
                                        <br>
                                        <label>Specify (if not listed)<br><input type="text"
                                                name="other-language"></label>
                                    </div>

                                    <br><br>
                                    <div class="form-section">
                                        <p class="ltd-form-title">Type of holiday I am looking for :</p>
                                        <div class="select-group select-group__center-text">

                                            <label>Nature, Wildlife & Safari<br><input type="checkbox"
                                                    name="vacation-type[]" value="Nature, Wildlife & Safari"></label>
                                            <label>Cultural & Heritage<br><input type="checkbox" name="vacation-type[]"
                                                    value="Cultural"></label>
                                            <label>Beach Relaxing<br><input type="checkbox" name="vacation-type[]"
                                                    value="Beach Relaxing"></label>
                                            <label>Trekking & Climbing<br><input type="checkbox" name="vacation-type[]"
                                                    value="Trekking & Climbing"></label>
                                            <label>Activity and Game<br><input type="checkbox" name="vacation-type[]"
                                                    value="Activity and Game"></label>
                                            <label>Boat trips & Island visits<br><input type="checkbox"
                                                    name="vacation-type[]" value="Boat trips & Island visits"></label>
                                            <label>Train Rides<br><input type="checkbox" name="vacation-type[]"
                                                    value="Train rides"></label>
                                            <label>Factory Visits<br><input type="checkbox" name="vacation-type[]"
                                                    value="Factory visits"></label>
                                            <label>Water Sports<br><input type="checkbox" name="vacation-type[]"
                                                    value="Water sport"></label>
                                            <label>Snorkeling & Diving<br><input type="checkbox" name="vacation-type[]"
                                                    value="Snorkeling & Diving"></label>
                                            <label>Whales and Dolphins<br><input type="checkbox" name="vacation-type[]"
                                                    value="Whales and dolphin Trips"></label>
                                        </div>
                                    </div>
                                    <br><br>


                                    <div class="form-section">
                                        <p class="ltd-form-title">My preferred accommodation type :</p>
                                        <div class="select-group select-group__center-text">

                                            <label>Budget<br><input type="radio" name="accommodation"
                                                    value="Budget"></label>
                                            <label>Standard<br><input type="radio" name="accommodation"
                                                    value="Standard"></label>
                                            <label>Premium<br><input type="radio" name="accommodation"
                                                    value="Premium"></label>
                                            <label>Luxury<br><input type="radio" name="accommodation"
                                                    value="Luxury"></label>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class="form-section">
                                        <p class="ltd-form-title">Additional services I require :</p>
                                        <div class="select-group select-group__center-text">

                                            <label>Train Tickets<br><input type="checkbox" name=" additional[]"
                                                    value="Train Tickets"></label>
                                            <label>Attraction Tickets<br><input type="checkbox" name="additional[]"
                                                    value="Attraction Tickets"></label>
                                            <label>Airport Transfer<br><input type="checkbox" name=" additional[]"
                                                    value="Airport Transfer"></label>

                                        </div>
                                    </div>

                                    <br><br>


                                    <div class="form-section">
                                        <p class="ltd-form-title">My additional requirements :</p>
                                        <textarea name="user-message" rows="10" cols="80"
                                            style="max-width:100%"></textarea>
                                    </div><br><br>



                                    <div class="form-section">
                                        <small>Adults :</small>
                                        <input type="number" min="1" max="100" name="adults" class="form-control"
                                            required />
                                        <small>Children :</small>

                                        <input type="number" min="0" max="100" name="children" class="form-control"
                                            required /><br>
                                        <small>Start Date :</small>
                                        <input type="text" name="start" class="form-control datepicker"
                                            placeholder="dd/mm/yyyy" />
                                        <small>End Date :</small>
                                        <input type="text" name="end" class="form-control datepicker"
                                            placeholder="dd/mm/yyyy" />
                                        <small>Flight Number :</small>
                                        <input type="text" name="flight" class="form-control" />
                                        <br>
                                        <small>Name :</small>
                                        <input type="text" name="name" class="form-control" required />
                                        <small>Email :</small>
                                        <input type="email" name="email" class="form-control" required />
                                    </div>

                                </div>
                            </div>
                            <br>
                            <button class="btn btn-block btn-success theme-btn"
                                style="border-radius: 0; height: 48px; margin-top: 10px" type="submit" name="submit">
                                Get Your Sri Lanka Tour Plan
                            </button>
                            <div id="recaptcha" class="g-recaptcha"
                                data-sitekey="6Le3wKIUAAAAAJy7JExTcWhzUvQnH1GhGbXasjv4" data-callback="onSubmit"
                                data-size="invisible"></div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <?php include_once 'components/footer.php' ?>
        <?php include_once 'components/footer-plan-your-tour-scripts.php' ?>
</body>

</html>