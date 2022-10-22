<script setup>
import AppLayout from '../../Layouts/AppLayout.vue';
import { onMounted, ref } from 'vue';
import Card from 'primevue/card';
import Button from 'primevue/button'

const props = defineProps([
  'posts',
])

onMounted(() => {
  console.log(props.posts)
})

</script>

<template>
  <AppLayout>
    <div class="m-4">
      <ul>
        <li v-for="post in props.posts" :key="post.id">
          {{ post.title }}<br>
        </li>
      </ul>
    </div>
  </AppLayout>
</template>