<template>
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
                <div class="container">
                <a class="navbar-brand" href="#">Mon Blog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <Navbar/>
                </div>
            </nav>
</template>
<script>
import Navbar from "./Navbar.vue"
    export default {
        name:"Header",
         components:{
           Navbar
        },
        
    }
</script>