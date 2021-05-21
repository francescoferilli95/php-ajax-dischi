/**
 * 
 *  GET DISCS APP
 * 
 */

const app = new Vue({
    el: '#app',
    data: {
        logo: './img/logo.png',
        discs: [],
        artists: [],
        searchString: '',
        selected: 'all',
    },
    created() {

        const dataURL = window.location.href + 'data/select-database.php';

        axios.get(dataURL)
        .then( res => {
            this.discs = res.data.filtered;
            this.artists = res.data.artist;
            this.artists.unshift("All");
        })
        .catch(err => {
            alert('Si è verificato un errore: ' + err);
        });
    },
    methods: {
        searchAuthor() {
            const dataURL = window.location.href + 'data/filter-database.php';

            axios.get(dataURL, {
                params: {
                    author: this.searchString,
                }
            })
            .then(res => {
                this.discs = res.data;
            })
            .catch(err => {
                console.log(err);
            });
        },
        getAlbumArtist() {

            const dataURL = window.location.href + 'data/select-database.php?query=' + this.selected;

            axios
                .get(dataURL)
                .then((res) => {
                    this.discs = res.data.filtered;
                    console.log(res.data);
                })
                .catch((err) => {
                    alert('Si è verificato un errore: ' + err);
                });
        },
    }
});