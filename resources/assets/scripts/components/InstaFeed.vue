<template>
    <div class="instafeed row no-gutters">
        <div v-for="item in feedData" :key="item.id" class="col-6 col-md-4 col-xl-3 bg-dark" >
            <div class="image-container">
            <img :src="item.large" >
            </div>
        </div>
        <div class="col-6 col-md-8 col-xl-3 text-center" >
            <a class="insta-link" href="https://www.instagram.com/theportfinewine/" target="_blank">
            <div class="insta-link-container align-items-center justify-content-center" >
                <p class="text-white icon"><i class="fa fa-instagram" aria-hidden="true"></i></p>
                <p class="text-white text">Follow The Port Fine Wine & Spirits on Instagram</p>
            </div>
            </a>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        feedData: {}
    },
    data() {
        return {
            photos: {}
        }
    },
    mounted() {
        this.photos = this.feedData;
    }
}
</script>
<style lang="scss">
.instafeed {
    .image-container {
        overflow: hidden;
        height: 0;
        padding-bottom: 100%;
        text-align: center;

        img {
            width: 100%;
            min-height: 100%;
            min-width: 100%;
            position: relative;
        }

        
    }

    .insta-link {
        display: block;      
        height: 100%;     

        .insta-link-container {
            display: flex;
            height: 100%;
            flex-direction: column;
            padding: 1rem 1rem 0;
            background-color: #b65838;

            @media (min-width:560px){
                padding: 2rem;
            }

            .icon {
                font-size: 3em;
                margin: 0;

                @media (min-width:560px){
                    font-size: 4.5em;
                }

                @media (min-width:769px){
                    font-size: 6em;
                }
            }

            .text {
                font-size: 1em;
                margin: 0;

                @media (min-width:560px){
                    font-size: 1.3em;
                    padding: .5rem 0;
                }

                @media (min-width:768px){
                    font-size: 2em;
                    padding: .5rem 0;
                }
            }
        }
    }
}
</style>
