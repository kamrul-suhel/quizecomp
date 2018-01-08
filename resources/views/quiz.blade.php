<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>UNILAD Adventure Competition</title>
    <meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="description" content="fullPage full-screen apple iphone 5c similar website. Reproducing one sigle scrolling site like Apple iPhone." />
    <meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,apple,iphone5c,iphone5s,iphone,iphone-5c,like,reproduce,similar,how to" />
    <meta name="Resource-type" content="Document" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="css/jquery.fullpage.min.css" />
    <link rel="stylesheet" type="text/css" href="css/quiz.css?ver=1.0" />
</head>
<body>
<div id="fullpage">
    <div class="section" id="section0">
        <img src="imgs/logo-adventure.png" height="140" class="logo" />

        <h2>Take the quiz to find your perfect destination!</h2>
        <a data-menuanchor="climate" href="#climate" class="btn">Start</a>
    </div>

    <div class="section" id="section1">
        <div class="wrap">
            <div class="box">
                <h6>Question 1/5</h6>
                <h2>Choose a climate.</h2>
            </div>

            <div class="imgsContainer">
                <div id="cold" class="climate-select option" v-on:click="setClimate" v-bind:class="{ active : climate == 'cold' }">
                    <h1>Cold</h1>
                </div>

                <div id="hot" class="climate-select option" v-on:click="setClimate" v-bind:class="{ active : climate == 'hot' }">
                    <h1>Hot</h1>
                </div>
            </div>

            <transition name="fade">
                <a v-if="climate" data-menuanchor="trip" href="#trip" class="btn">Next</a>
            </transition>
        </div>

        <h2 class="output" v-html="winner"></h2>
    </div>

    <div class="section" id="section2">
        <div class="wrap">
            <div class="box">
                <h6 class="invert">Question 2/5</h6>
                <h2 class="invert">What kind of trip do you want?</h2>
            </div>

            <div class="imgsContainer">
                <div id="adrenaline" class="trip-select option" v-on:click="setTrip" v-bind:class="{ active : trip == 'adrenaline' }">
                    <h2>Adrenaline Adventure</h2>
                </div>

                <div id="urban" class="trip-select option" v-on:click="setTrip" v-bind:class="{ active : trip == 'urban' }">
                    <h2>Urban Adventure</a></h2>
                </div>

                <div id="relax" class="trip-select option" v-on:click="setTrip" v-bind:class="{ active : trip == 'relax' }">
                    <h2>Relaxation</h2>
                </div>
            </div>

            <transition name="fade">
                <a v-if="trip" data-menuanchor="accomodation" href="#accomodation" class="btn invert">Next</a>
            </transition>
        </div>

        <h2 class="output invert" v-html="winner"></h2>
    </div>

    <div class="section" id="section3">
        <div class="wrap">
            <div class="box">
                <h6>Question 3/5</h6>
                <h2>Pick somewhere to stay.</h2>
            </div>

            <div class="imgsContainer">
                <div id="alpine" class="accomodation-select option" v-on:click="setAccomodation" v-bind:class="{ active : accomodation == 'alpine' }">
                    <h2>Alpine Chalet</h2>
                </div>

                <div id="local" class="accomodation-select option" v-on:click="setAccomodation" v-bind:class="{ active : accomodation == 'local' }">
                    <h2>Local Homestay</h2>
                </div>

                <div id="beach" class="accomodation-select option" v-on:click="setAccomodation" v-bind:class="{ active : accomodation == 'beach' }">
                    <h2>Beach Hotel</h2>
                </div>

                <div id="city" class="accomodation-select option" v-on:click="setAccomodation" v-bind:class="{ active : accomodation == 'city' }">
                    <h2>City Hotel</h2>
                </div>
            </div>

            <transition name="fade">
                <a v-if="accomodation" data-menuanchor="cuisine" href="#cuisine" class="btn">Next</a>
            </transition>
        </div>

        <h2 class="output" v-html="winner"></h2>
    </div>

    <div class="section" id="section4">
        <div class="wrap">
            <div class="box">
                <h6>Question 4/5</h6>
                <h2>What's for dinner?</h2>
            </div>

            <div class="imgsContainer">
                <div id="seafood" class="cuisine-select option" v-on:click="setCuisine" v-bind:class="{ active : cuisine == 'seafood' }">
                    <h2>Catch of the day</h2>
                </div>

                <div id="fondu" class="cuisine-select option" v-on:click="setCuisine" v-bind:class="{ active : cuisine == 'fondu' }">
                    <h2>Cheese Fondu</h2>
                </div>

                <div id="course" class="cuisine-select option" v-on:click="setCuisine" v-bind:class="{ active : cuisine == 'course' }">
                    <h2>3 Course Meal</h2>
                </div>

                <div id="dish" class="cuisine-select option" v-on:click="setCuisine" v-bind:class="{ active : cuisine == 'dish' }">
                    <h2>Local Cuisine</h2>
                </div>
            </div>

            <transition name="fade">
                <a v-if="cuisine" data-menuanchor="itinerary" href="#itinerary" class="btn">Next</a>
            </transition>
        </div>

        <h2 class="output" v-html="winner"></h2>
    </div>

    <div class="section" id="section5">
        <div class="wrap">
            <div class="box">
                <h6 class="invert">Question 5/5</h6>
                <h2 class="invert">Pick the perfect day.</h2>
            </div>

            <div class="imgsContainer">
                <div id="streets" class="itinerary-select option" data-col="" data-col="" data-col="" data-col="" v-on:click="setItinerary" v-bind:class="{ active : itinerary == 'streets' }">
                    <h2>Exploring the urban streets</h2>
                </div>

                <div id="thrills" class="itinerary-select option" v-on:click="setItinerary" v-bind:class="{ active : itinerary == 'thrills' }">
                    <h2>It's all about the thrills.</h2>
                </div>

                <div id="culture" class="itinerary-select option" v-on:click="setItinerary" v-bind:class="{ active : itinerary == 'culture' }">
                    <h2>Culture Vulture, living like a local.</h2>
                </div>

                <div id="cocktail" class="itinerary-select option" v-on:click="setItinerary" v-bind:class="{ active : itinerary == 'cocktail' }">
                    <h2>Laying on the beach, cocktail in hand.</h2>
                </div>
            </div>

            <transition name="fade">
                <a v-if="itinerary" class="btn invert" v-on:click="showPick">Next</a>
            </transition>
        </div>

        <h2 class="output invert" v-html="winner"></h2>
    </div>

    <div class="section" id="section6">
        <div class="slide fp-slide" id="slide1" v-bind:class="{ active : winner == 'cape' }">
            <span id="square1" class="square"></span>
            <span id="square2" class="square"></span>
            <span id="square3" class="square"></span>
            <h3>Your perfect destination is</h3>
            <h1>Cape Verde</h1>
            <a href="#enter" class="btn">Win a free holiday</a>
        </div>
        <div class="slide fp-slide" id="slide2" v-bind:class="{ active : winner == 'col' }">
            <span id="square1" class="square"></span>
            <span id="square2" class="square"></span>
            <span id="square3" class="square"></span>
            <h3>Your perfect destination is</h3>
            <h1>Columbia</h1>
            <a href="#enter" class="btn">Win a free holiday</a>
        </div>
        <div class="slide fp-slide" id="slide3" v-bind:class="{ active : winner == 'cop' }">
             <span id="square1" class="square"></span>
            <span id="square2" class="square"></span>
            <span id="square3" class="square"></span>
            <h3>Your perfect destination is</h3>
            <h1>Copenhagen</h1>
            <a href="#enter" class="btn">Win a free holiday</a>
        </div>
        <div class="slide fp-slide" id="slide4" v-bind:class="{ active : winner == 'val' }">
            <span id="square1" class="square"></span>
            <span id="square2" class="square"></span>
            <span id="square3" class="square"></span>
            <h3>Your perfect destination is</h3>
            <h1>Val d'isere</h1>
            <a href="#enter" class="btn">Win a free holiday</a>
        </div>
    </div>

    <div class="section" id="section7">
        <img src="imgs/logo-adventure.png" height="140" class="logo" />
        <form method="post" action="/">
            {{ csrf_field() }}

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name">
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email">
            </div>

            <div class="form-group">
                <input type="checkbox" name="terms" id="terms">
                <label class="small" for="terms">I Agree to <a href="#termsSection">Terms and Conditions</a></label>
            </div>

            <input type="hidden" v-model="winner" name="destination" />

            <input type="submit" value="Enter" class="btn" />
        </form>
    </div>

    <div class="section" id="section8">
        <div class="wrap">
            <h2>Terms and Conditions</h2>
            <div class="terms-box">
                <p>UK residents of 18+ years only may participate in the Adventure ‘Win a holiday quiz’ competition (“the Promotion”). The promotion will run on 9th January 2018 between 12.00 and 15.30 (“the Promotion Period”). No purchase necessary for entry.</p>
                <p>To Participate: Complete the Adventure quiz on the iPad provided and complete by entering your name and email address. The participants are allowed 1 turn per individual. </p>
                <p>Full Terms &amp; prize details can be found below.</p>
                <p>Full Terms and Conditions</p>
                <p>This Promotion is only open to legal residents of the United Kingdom who are aged 18 years or over, excluding anyone professionally associated with this Promotion.</p>
                <p>Promotion Period: 12.00 GMT to 15.30 GMT on 9th January 2018.</p>
                <p>To Enter:</p>
                <p>Complete the travel quiz.</p>
                <p>Enter your full name and email address once completed.</p>
                <p>One entry per person.</p>
                <p>The prizes:</p>
                <p>There will be 1 prize</p>
                <p>Flights and accommodation to prize draw destination</p>
                <p>The winner of the Prize will be notified via the email address provided by midday Monday 15th January and will need to response to the email sent by midday Monday 22nd January. If the winner does not respond within the stipulated timeframe, UNILAD reserves the right to disqualify that winner and pick another winner.</p>
                <p>The prize will be distributed within 28 days of the winner accepting the prize. </p>
                <p>Prizes are non-transferable and no cash or other alternative to the prizes are available in whole or in part. In the event of unforeseen circumstances, the Promoter reserves the right to substitute an alternative reward of equal or greater value.</p>
                <p>By entering, winners agree to participate in any publicity arranged by the Promoter or by its agencies.</p>
                <p>By entering this Promotion, all participants will be deemed to have accepted these terms and conditions.</p>
                <p>The Promoter will exercise its best endeavours to ensure that the Promotion runs as envisaged in a fair and proper manner and that prizes are duly received by the respective Winners. However, the Promoter does not assume any responsibility should for any circumstance this is not duly achieved. The Promoter reserves the right to cancel or change the Promotion should any exceptional or unforeseen circumstances arise.</p>
                <p>The Promoter also has the right to disqualify any participant who the Promoter suspects and/or confirms that s/he tampered or abused the entry process or the Promotion itself. Participants who are suspected or are found to have acted fraudulently and/or dishonestly will not be entitled to the prize.</p>
                <p>All entries must be made directly by the person entering the promotion.</p>
                <p>These terms and conditions are governed by English Law and shall be subject to the exclusive jurisdiction of the courts or England and Wales.</p>
            </div>

            <a href="#enter" class="btn">Back</a>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/app.js?ver=1.0"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/jquery.fullpage.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            'verticalCentered': false,
            'css3': true,
            'sectionsColor': ['#6ec3bf', '#fff', '#fff', '#fff', '#6ec3bf', '#fff', '#fff', '#6ec3bf', '#6ec3bf'],
            'navigation': true,
            'navigationPosition': 'right',
            'navigationTooltips': ['Take the quiz', 'Climate', 'Trip type', 'Accomodation', 'Cuisine', 'Itinerary', 'Your pick', 'Enter', 'Terms'],
            'anchors': ['home', 'climate', 'trip', 'accomodation', 'cuisine', 'itinerary', 'your-pick', 'enter', 'termsSection'],

            'afterLoad': function(anchorLink, index){
            },

            'onLeave': function(index, nextIndex, direction){
            
            }
        });
    });
</script>

</body>
</html>