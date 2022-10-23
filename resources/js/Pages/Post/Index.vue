<script setup>
import AppLayout from '../../Layouts/AppLayout.vue';
import { onMounted, ref } from 'vue';
import Card from 'primevue/card';
import Button from 'primevue/button'
import { Link } from '@inertiajs/inertia-vue3';


const props = defineProps([
  'posts',
])

// onMounted(() => {
//   console.log(props.posts)
// })

</script>

<template>
  <AppLayout>
    <div class="m-4">
      <div class="text-right">
        <Link :href="route('posts.create')" class="text-blue-400 hover:text-blue-500">作成画面へ</Link>
      </div>
      <ul>
        <li v-for="post in props.posts" :key="post.id">
          <Link :href="route('posts.show', {id: post.id})">{{ post.title }}</Link>
        </li>
      </ul>
    </div>
  </AppLayout>
</template>