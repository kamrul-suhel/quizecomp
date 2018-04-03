
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('quiz-counter', require('./components/QuizCounter.vue'));

const app = new Vue({
    el: '#fullpage',


    data:{
        scores: {
            'nice':{'climate':0,'trip':0,'accomodation':0,'cuisine':0,'itinerary':0,'total':0},
            'bar':{'climate':0,'trip':0,'accomodation':0,'cuisine':0,'itinerary':0,'total':0},
            'ber':{'climate':0,'trip':0,'accomodation':0,'cuisine':0,'itinerary':0,'total':0},
            'cop':{'climate':0,'trip':0,'accomodation':0,'cuisine':0,'itinerary':0,'total':0},
        },
        slide: 0,
        climate: false,
        trip: false,
        accomodation: false,
        cuisine: false,
        itinerary: false,
        errors:[],
        name:null,
        name_error: false,
        email:null,
        email_error: false,
        terms:null,
        terms_error: false
    },

    computed:{
        winner: function(){
            var total = [];
            // Here I need to work out the winner
            total = [
                {'id':0, 'name':'nice', 'total':this.scores['nice']['climate'] + this.scores['nice']['trip'] + this.scores['nice']['accomodation'] + this.scores['nice']['cuisine'] + this.scores['nice']['itinerary']},
                {'id':1, 'name':'bar', 'total':this.scores['bar']['climate'] + this.scores['bar']['trip'] + this.scores['bar']['accomodation'] + this.scores['bar']['cuisine'] + this.scores['bar']['itinerary']},
                {'id':2, 'name':'ber', 'total':this.scores['ber']['climate'] + this.scores['ber']['trip'] + this.scores['ber']['accomodation'] + this.scores['ber']['cuisine'] + this.scores['ber']['itinerary']},
                {'id':3, 'name':'cop', 'total':this.scores['cop']['climate'] + this.scores['cop']['trip'] + this.scores['cop']['accomodation'] + this.scores['cop']['cuisine'] + this.scores['cop']['itinerary']}
            ];

            total = _.sortBy(total, 'total').reverse();

            this.slide = total[0].id;

            return total[0].name;
        }
    },

    methods:{
        checkForm:function(e) {
            if(this.name && this.email && this.terms) return true;
            this.name_error = this.email_error = this.terms_error = null;
            if(!this.name) this.name_error = true;
            if(!this.email) this.email_error = true;
            if(!this.terms) this.terms_error = true;
            e.preventDefault();
        },

        setClimate: function(event){
            this.climate = event.currentTarget.id;

            if(this.climate == 'hot'){
                this.scores['nice']['climate'] = 10;
                this.scores['bar']['climate'] = 8;
                this.scores['ber']['climate'] = 1;
                this.scores['cop']['climate'] = 0;
            }else if(this.climate == 'cold'){
                this.scores['nice']['climate'] = 0;
                this.scores['bar']['climate'] = 0;
                this.scores['ber']['climate'] = 8;
                this.scores['cop']['climate'] = 10;
            }
        },

        setTrip: function(event){
            this.trip = event.currentTarget.id;

            if(this.trip == 'adrenaline'){
                this.scores['nice']['trip'] = 0;
                this.scores['bar']['trip'] = 2;
                this.scores['ber']['trip'] = 1;
                this.scores['cop']['trip'] = 3;
            }else if(this.trip == 'urban'){
                this.scores['nice']['trip'] = 0;
                this.scores['bar']['trip'] = 2;
                this.scores['ber']['trip'] = 3;
                this.scores['cop']['trip'] = 2;
            }else if(this.trip == 'relax'){
                this.scores['nice']['trip'] = 3;
                this.scores['bar']['trip'] = 2;
                this.scores['ber']['trip'] = 1;
                this.scores['cop']['trip'] = 1;
            }
        },

        setAccomodation: function(event){
            this.accomodation = event.currentTarget.id;

            if(this.accomodation == 'alpine'){
                this.scores['nice']['accomodation'] = 0;
                this.scores['bar']['accomodation'] = 0;
                this.scores['ber']['accomodation'] = 0;
                this.scores['cop']['accomodation'] = 1;
            }else if(this.accomodation == 'local'){
                this.scores['nice']['accomodation'] = 1;
                this.scores['bar']['accomodation'] = 1;
                this.scores['ber']['accomodation'] = 2;
                this.scores['cop']['accomodation'] = 2;
            }else if(this.accomodation == 'beach'){
                this.scores['nice']['accomodation'] = 3;
                this.scores['bar']['accomodation'] = 2;
                this.scores['ber']['accomodation'] = 0;
                this.scores['cop']['accomodation'] = 0;
            }else if(this.accomodation == 'city'){
                this.scores['nice']['accomodation'] = 0;
                this.scores['bar']['accomodation'] = 2;
                this.scores['ber']['accomodation'] = 3;
                this.scores['cop']['accomodation'] = 1;
            }
        },

        setCuisine: function(event){
            this.cuisine = event.currentTarget.id;

            if(this.cuisine == 'seafood'){
                this.scores['nice']['cuisine'] = 3;
                this.scores['bar']['cuisine'] = 2;
                this.scores['ber']['cuisine'] = 0;
                this.scores['cop']['cuisine'] = 1;
            }else if(this.cuisine == 'fondu'){
                this.scores['nice']['cuisine'] = 0;
                this.scores['bar']['cuisine'] = 0;
                this.scores['ber']['cuisine'] = 0;
                this.scores['cop']['cuisine'] = 3;
            }else if(this.cuisine == 'course'){
                this.scores['nice']['cuisine'] = 3;
                this.scores['bar']['cuisine'] = 2;
                this.scores['ber']['cuisine'] = 1;
                this.scores['cop']['cuisine'] = 2;
            }else if(this.cuisine == 'dish'){
                this.scores['nice']['cuisine'] = 0;
                this.scores['bar']['cuisine'] = 3;
                this.scores['ber']['cuisine'] = 1;
                this.scores['cop']['cuisine'] = 2;
            }
        },

        setItinerary: function(event){
            this.itinerary = event.currentTarget.id;

            if(this.itinerary == 'streets'){
                this.scores['nice']['itinerary'] = 0;
                this.scores['bar']['itinerary'] = 1;
                this.scores['ber']['itinerary'] = 3;
                this.scores['cop']['itinerary'] = 1;
            }else if(this.itinerary == 'thrills'){
                this.scores['nice']['itinerary'] = 0;
                this.scores['bar']['itinerary'] = 0;
                this.scores['ber']['itinerary'] = 1;
                this.scores['cop']['itinerary'] = 0;
            }else if(this.itinerary == 'culture'){
                this.scores['nice']['itinerary'] = 0;
                this.scores['bar']['itinerary'] = 3;
                this.scores['ber']['itinerary'] = 2;
                this.scores['cop']['itinerary'] = 1;
            }else if(this.itinerary == 'cocktail'){
                this.scores['nice']['itinerary'] = 2;
                this.scores['bar']['itinerary'] = 1;
                this.scores['ber']['itinerary'] = 1;
                this.scores['cop']['itinerary'] = 1;
            }
        },

        showPick: function(){
            console.log(this.slide);
            $.fn.fullpage.silentMoveTo('your-pick', this.slide);
        }
    },

    mounted() {
        console.log('Component mounted.')
    }
});
