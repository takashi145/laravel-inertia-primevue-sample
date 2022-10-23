<script setup>
import AppLayout from '../../Layouts/AppLayout.vue';
import { ref } from 'vue';
import Textarea from 'primevue/textarea';
import Button from 'primevue/button';
import { useForm, Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
  errors: Object
})

const form = useForm({
  title: '',
  description: ''
});

const submit = () => {
  form.post('/posts')
}
</script>

<template>
  <AppLayout>
    <div class="m-4">
      <div>
        <Link :href="route('posts.index')" class="text-blue-400 hover:text-blue-500">一覧へ戻る</Link>
      </div>
      <form @submit.prevent="submit">
        <div class="card lg:col-6 mx-auto">
            <h5></h5>
            <div class="field">
                <label for="title">Title</label>
                <input id="title" type="username" v-model="form.title" class="text-base text-color surface-overlay p-2 border-1 border-solid surface-border border-round appearance-none outline-none focus:border-primary w-full" aria-describedby="username-help">
                <div v-if="errors.title" class="text-red-500">
                  {{ errors.title }}
                </div>
            </div>
            <div class="field">
                <label for="">Description</label>
                <Textarea v-model="form.description" :auto-resize="true" rows="8" class="w-full"></Textarea>
                <div v-if="errors.description" class="text-red-500">
                  {{ errors.description }}
                </div>
            </div>
            <div class="field">
                <Button type="submit">Submit</Button>
            </div>
        </div>   
      </form>
    </div>
  </AppLayout>
</template>