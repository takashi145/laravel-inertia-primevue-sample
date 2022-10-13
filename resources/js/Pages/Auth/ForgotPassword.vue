<script setup>
import Card from 'primevue/card';
import InputText from 'primevue/inputtext';
import Button from 'primevue/button';
import { useForm } from '@inertiajs/inertia-vue3';
import GuestLayout from '../../Layouts/GuestLayout.vue';

defineProps({
  status: String
})

const form = useForm({
  email: '',
});

const submit = () => {
  form.post('/forgot-password');
}

</script>

<template>
  <GuestLayout>
    <div class="m-8">
      <div class="card shadow p-7 col-12 md:col-10 lg:col-5 mx-auto">
          <h2 class="text-center mb-5">パスワード再設定</h2>

          <div v-if="status" class="text-white bg-green-400 p-2 my-3 border-round">
              {{ status }}
          </div>

          <form @submit.prevent="submit()">
              <div class="mb-5">
                  <div class="p-inputgroup">
                      <span class="p-inputgroup-addon">
                          <i class="pi pi-envelope"></i>
                      </span>
                      <InputText v-model="form.email" type="email" placeholder="Email" />
                  </div>
                  <div v-if="form.errors.email" class="text-red-500">
                    {{ form.errors.email }}
                  </div>
              </div>
              <div class="text-center">
                  <Button type="submit" icon="pi pi-check" label="Email Password Reset Link" />
              </div>
          </form>
      </div>
    </div>
  </GuestLayout>
  
</template>
