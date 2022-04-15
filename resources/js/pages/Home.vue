<template>
  <div class="home">
    <About />
    <Main />
  </div>
</template>

<script>
import About from './About.vue'
import Main from './Main.vue'

export default {
  name: 'Home',
  components: {
    About,
    Main,
  }
}
</script>