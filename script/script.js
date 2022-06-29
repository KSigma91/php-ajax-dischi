const app = new Vue({
    el : '#app',
    data : {
        myArr : [],
    },
    created() {
        axios
        .get('http://localhost/php-ajax-dischi/api.php')
        .then(element => 
            this.myArr = element.data.response
        );
    }
})