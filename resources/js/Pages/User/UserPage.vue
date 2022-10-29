<script setup>
import { onMounted, ref } from '@vue/runtime-core';
import AppLayout from '../../Layouts/AppLayout.vue';
import Fieldset from 'primevue/fieldset';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps([
  'user'
])

</script>

<template>
  <AppLayout>
    <div v-if="user.id === $page.props.auth.user.id" class="text-xl mb-3">
      マイページ
    </div>
    <div v-else class="text-xl mb-3">
      {{ user.name }}のユーザページ
    </div>
    <div class="m-4">
      ユーザー名: {{ user.name }}
    </div>
    <div class="lg:col-8 mx-auto">
      <div class="border-indigo-500 border-bottom-3 text-xl mb-3 text-indigo-500">
        投稿一覧
      </div>
      <Fieldset :legend="post.title" v-for="post in props.user.posts" :key="post.id" class="mb-3">
        <p>
          {{ post.description }}
        </p>
        <div class="text-right">
            <Link :href="`/posts/${post.id}`" class="text-blue-400 hover:text-blue-500">
              詳細
            </Link>
        </div>
      </Fieldset>  
    </div>
    
  </AppLayout>
</template>