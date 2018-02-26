
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
            'cape':{'climate':0,'trip':0,'accomodation':0,'cuisine':0,'itinerary':0,'total':0},
            'col':{'climate':0,'trip':0,'accomodation':0,'cuisine':0,'itinerary':0,'total':0},
            'cop':{'climate':0,'trip':0,'accomodation':0,'cuisine':0,'itinerary':0,'total':0},
            'val':{'climate':0,'trip':0,'accomodation':0,'cuisine':0,'itinerary':0,'total':0},
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
                {'id':0, 'name':'cape', 'total':this.scores['cape']['climate'] + this.scores['cape']['trip'] + this.scores['cape']['accomodation'] + this.scores['cape']['cuisine'] + this.scores['cape']['itinerary']},
                {'id':1, 'name':'col', 'total':this.scores['col']['climate'] + this.scores['col']['trip'] + this.scores['col']['accomodation'] + this.scores['col']['cuisine'] + this.scores['col']['itinerary']},
                {'id':2, 'name':'cop', 'total':this.scores['cop']['climate'] + this.scores['cop']['trip'] + this.scores['cop']['accomodation'] + this.scores['cop']['cuisine'] + this.scores['cop']['itinerary']},
                {'id':3, 'name':'val', 'total':this.scores['val']['climate'] + this.scores['val']['trip'] + this.scores['val']['accomodation'] + this.scores['val']['cuisine'] + this.scores['val']['itinerary']}
            ];

            total = _.sortBy(total, 'total').reverse();

            console.log(total);

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
                this.scores['cape']['climate'] = 10;
                this.scores['col']['climate'] = 8;
                this.scores['cop']['climate'] = 1;
                this.scores['val']['climate'] = 0;
            }else if(this.climate == 'cold'){
                this.scores['cape']['climate'] = 0;
                this.scores['col']['climate'] = 0;
                this.scores['cop']['climate'] = 8;
                this.scores['val']['climate'] = 10;
            }
        },

        setTrip: function(event){
            this.trip = event.currentTarget.id;

            if(this.trip == 'adrenaline'){
                this.scores['cape']['trip'] = 0;
                this.scores['col']['trip'] = 2;
                this.scores['cop']['trip'] = 1;
                this.scores['val']['trip'] = 3;
            }else if(this.trip == 'urban'){
                this.scores['cape']['trip'] = 0;
                this.scores['col']['trip'] = 2;
                this.scores['cop']['trip'] = 3;
                this.scores['val']['trip'] = 1;
            }else if(this.trip == 'relax'){
                this.scores['cape']['trip'] = 3;
                this.scores['col']['trip'] = 2;
                this.scores['cop']['trip'] = 1;
                this.scores['val']['trip'] = 0;
            }
        },

        setAccomodation: function(event){
            this.accomodation = event.currentTarget.id;

            if(this.accomodation == 'alpine'){
                this.scores['cape']['accomodation'] = 0;
                this.scores['col']['accomodation'] = 0;
                this.scores['cop']['accomodation'] = 0;
                this.scores['val']['accomodation'] = 3;
            }else if(this.accomodation == 'local'){
                this.scores['cape']['accomodation'] = 1;
                this.scores['col']['accomodation'] = 1;
                this.scores['cop']['accomodation'] = 2;
                this.scores['val']['accomodation'] = 1;
            }else if(this.accomodation == 'beach'){
                this.scores['cape']['accomodation'] = 3;
                this.scores['col']['accomodation'] = 2;
                this.scores['cop']['accomodation'] = 0;
                this.scores['val']['accomodation'] = 0;
            }else if(this.accomodation == 'city'){
                this.scores['cape']['accomodation'] = 0;
                this.scores['col']['accomodation'] = 2;
                this.scores['cop']['accomodation'] = 3;
                this.scores['val']['accomodation'] = 0;
            }
        },

        setCuisine: function(event){
            this.cuisine = event.currentTarget.id;

            if(this.cuisine == 'seafood'){
                this.scores['cape']['cuisine'] = 3;
                this.scores['col']['cuisine'] = 2;
                this.scores['cop']['cuisine'] = 0;
                this.scores['val']['cuisine'] = 0;
            }else if(this.cuisine == 'fondu'){
                this.scores['cape']['cuisine'] = 0;
                this.scores['col']['cuisine'] = 0;
                this.scores['cop']['cuisine'] = 0;
                this.scores['val']['cuisine'] = 3;
            }else if(this.cuisine == 'course'){
                this.scores['cape']['cuisine'] = 3;
                this.scores['col']['cuisine'] = 0;
                this.scores['cop']['cuisine'] = 1;
                this.scores['val']['cuisine'] = 2;
            }else if(this.cuisine == 'dish'){
                this.scores['cape']['cuisine'] = 0;
                this.scores['col']['cuisine'] = 3;
                this.scores['cop']['cuisine'] = 1;
                this.scores['val']['cuisine'] = 1;
            }
        },

        setItinerary: function(event){
            this.itinerary = event.currentTarget.id;

            if(this.itinerary == 'streets'){
                this.scores['cape']['itinerary'] = 2;
                this.scores['col']['itinerary'] = 1;
                this.scores['cop']['itinerary'] = 0;
                this.scores['val']['itinerary'] = 0;
            }else if(this.itinerary == 'thrills'){
                this.scores['cape']['itinerary'] = 0;
                this.scores['col']['itinerary'] = 0;
                this.scores['cop']['itinerary'] = 0;
                this.scores['val']['itinerary'] = 2;
            }else if(this.itinerary == 'culture'){
                this.scores['cape']['itinerary'] = 2;
                this.scores['col']['itinerary'] = 0;
                this.scores['cop']['itinerary'] = 1;
                this.scores['val']['itinerary'] = 1;
            }else if(this.itinerary == 'cocktail'){
                this.scores['cape']['itinerary'] = 0;
                this.scores['col']['itinerary'] = 2;
                this.scores['cop']['itinerary'] = 1;
                this.scores['val']['itinerary'] = 1;
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
