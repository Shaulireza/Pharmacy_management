<script setup>
import SideBar from '../../components/layout/SideBar.vue';
import NavBar from '../../components/layout/NavBar.vue';
import MainFooter from '../../components/layout/MainFooter.vue';
</script>

<template>
 <div class="container-xxl position-relative bg-white d-flex p-0">


<!-- Sidebar Start -->
    <SideBar/>
<!-- Sidebar End -->


<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <NavBar/>
    <!-- Navbar End -->


    <!-- Blank Start -->
        <router-view/>
    <!-- Blank End -->


    <!-- Footer Start -->
   <MainFooter/>
    <!-- Footer End -->
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

</template>