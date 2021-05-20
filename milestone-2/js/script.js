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
    },
    created() {

        const dataURL = window.location.href + 'data/database.php';

        axios.get(dataURL)
        .then( res => {
            this.discs = res.data;
        })
        .catch(err => {
            alert('Si è verificato un errore: ' + err);
        });
    },
});