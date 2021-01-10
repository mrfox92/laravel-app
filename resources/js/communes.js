import Axios from "axios";

const app = new Vue({
    el: '#app',
    data: {
        selected_region: '',
        selected_commune: '',
        communes: [],
    },
    //  se ejecutará cada vez que la instancia de vue se levante
    mounted () {
        document.getElementById('commune').disabled = true;
        this.selected_region = this.getDataOld('region');

        if ( this.selected_region !== '' ) {
            this.loadCommunes();
        }

        this.selected_commune = this.getDataOld('commune');
    },
    methods: {
        loadCommunes() {
            this.selected_commune = '';
            document.getElementById('commune').disabled = true;

            if ( this.selected_region !== '' ) {
                Axios.get('https://kucha.cl/servicios/communes', { params: { region_id: this.selected_region } }).then( ( response ) => {
                    this.communes = response.data;
                    document.getElementById('commune').disabled = false;
                });
            }
        },
        getDataOld( idElement ) {
            return document.getElementById( idElement ).getAttribute('data-old');
        }
    }
});
