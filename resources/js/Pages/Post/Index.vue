<script setup>
import AppLayout from '../../Layouts/AppLayout.vue';
import Card from 'primevue/card';
import Button from 'primevue/button'
import { Link } from '@inertiajs/inertia-vue3';
import Fieldset from 'primevue/fieldset';
import { onMounted } from '@vue/runtime-core';

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
      <div>
        <Fieldset :legend="post.title" v-for="post in props.posts" :key="post.id" class="mb-3">
          <p>
            {{ post.description }}
          </p>
          <div class="text-right">
            <Link :href="route('posts.show', {id: post.id})" class="text-blue-400 hover:text-blue-500">
              詳細
            </Link>
          </div>
        </Fieldset>
      </div>
      <Link :href="route('posts.create')" class="text-blue-400 hover:text-blue-500">
          <Button icon="pi pi-pencil" class="fixed bottom-0 right-0 m-4 p-button-rounded p-button-primary p-5"></Button>
      </Link>
    </div>
  </AppLayout>
</template>