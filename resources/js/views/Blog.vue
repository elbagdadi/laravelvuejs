<template>
  <div class="wrapper">
    <Header/>
      <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <!-- Blog Post -->
        <h4></h4>
        <div class="card mb-4" v-for="(post, $index) in posts" :key="$index">
            <img :src="'/storage/images/'+post.image" class="card-img-top" alt="750x300">
          <div class="card-body">
            <h2 class="card-title">{{post.title}}</h2>
            <p class="card-text">{{post.text}}</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
            <router-link :to="{ name: 'post', params: {post: post.id } }">Read More</router-link>

          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>

        


       
       
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
      <Footer/>
  </div>
  
</template>
<script>
import Header from "../components/layout/Header.vue"
import Footer from "../components/layout/Footer.vue"
import axios from "axios"

export default {
  name:"Blog",
   components:{
            Header,
            Footer
        },
    data () {
      return {
        posts: null
      }
    },
     mounted () {
      axios
        .get('api/posts')
        .then(response => (this.posts = response.data))
    }
}
</script>