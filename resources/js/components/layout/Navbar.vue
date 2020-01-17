<template>
     <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                         <router-link to='/'>Home</router-link>
                    </li>
                    <li class="nav-item">
                         <router-link to='/blog'>Blog</router-link>
                    </li>
        </ul>
    </div>
</template>
<script>
    export default {
        name:"Navbar"
    }
</script>