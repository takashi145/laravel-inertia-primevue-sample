<script setup>
import AppLayout from '../../Layouts/AppLayout.vue';
import { ref } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import Button from 'primevue/button';

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
      <div class="">
        Description
        <p class="border-2 p-2 border-round">{{ post.description }}</p>
      </div>
      <div v-if="$page.props.auth.user.id === post.user_id" class="text-right mt-4">
        <Link :href="route('posts.edit', {id: post.id})" class="p-2">
          <Button class="p-button-text text-blue-400 hover:text-blue-500">
            <i class="pi pi-pencil text-xl"></i>
          </Button>
        </Link>

        <Button class="p-button-text text-red-400 hover:text-red-500 p-2 mx-3">
          <i class="pi pi-trash text-xl pb-1"></i>
        </Button>
      </div>
    </div>
  </AppLayout>
</template>