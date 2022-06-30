const app = new Vue({
    el : '#app',
    data : {
        myArr : [],
        genres : [],
        changeGenre: 'all'
    },
    created() {
        this.filterGenre();

        axios('http://localhost/php-ajax-dischi/milestone_2/api/genres.php')
        .then(element => 
            this.myArr = element.data.response
        );
    },
    methods: {
        filterGenre() {
            axios
            .get('http://localhost/php-ajax-dischi/milestone_2/api/discs.php', {
                params: {
                    changeGenre: this.genre
                }
            })
            .then(element => 
                this.myArr = element.data.response
            );
        }
    }
});