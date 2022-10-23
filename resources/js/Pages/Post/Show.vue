<script setup>
import AppLayout from '../../Layouts/AppLayout.vue';
import { ref } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps([
  'post',
]);

</script>

<template>
  <AppLayout>
    <div class="m-8">
      <div class="my-3">
        <Link :href="route('posts.index')" class="text-blue-400 hover:text-blue-500">一覧へ戻る</Link>
      </div>
      <div>
        Title
        <h3 class="border-2 p-2 border-round">{{ post.title }}</h3>
      </div>
      <div>
        Description
        <p class="border-2 p-2 border-round">{{ post.description }}</p>
      </div>
    </div>
  </AppLayout>
</template>