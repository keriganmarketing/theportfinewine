<template>
    <div class="row">
        <p v-if="code !== ''">{{ code }}</p>
        <div v-for="item in feedData" :key="item.id" class="col-6 col-md-4 col-lg-3 col-xl-2" >

        </div>
    </div>
</template>
<script>
export default {
    props: {

    },
    data() {
        return {
            feedData: {}
        }
    },
    mounted() {
        // http.get("https://api.instagram.com/oauth/authorize/" +
        //         "?client_id=" + clientID +
        //         "&redirect_uri=" + redirectURI +
        //         "&response_type=code")
        //     .then(response => {
        //         this.sliderData = response.data; 
        //     });
    },
    methods: {

    }
}
</script>