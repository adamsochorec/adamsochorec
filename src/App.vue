<script setup lang="ts">
import Footer from '@/components/Footer.vue'
import NavBar from '@/components/NavBar.vue'
</script>

<template>
  <NavBar />
  <RouterView />
  <hr class="semi" role="separator" />
  <Footer />
</template>
