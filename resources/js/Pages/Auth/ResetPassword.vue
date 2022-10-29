<script setup>
import InputText from 'primevue/inputtext';
import { useForm, Link } from '@inertiajs/inertia-vue3';
import GuestLayout from '../../Layouts/GuestLayout.vue';
import { onMounted } from '@vue/runtime-core';

const props = defineProps({
  'email': String,
  'token': String
})

const form = useForm({
  token: props.token,
  email: props.email,
  password: '',
  password_confirmation: ''
});

const submit = () => {
  form.post('/reset-password');
}

</script>

<template>
  <GuestLayout>
    <div class="m-8">
      <div class="card shadow p-7 col-12 md:col-10 lg:col-5 mx-auto">
          <h2 class="text-center mb-5">パスワード変更</h2>
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
              <div class="mb-5">
                  <div class="p-inputgroup">
                      <span class="p-inputgroup-addon">
                          <i class="pi pi-key"></i>
                      </span>
                      <InputText v-model="form.password" type="password" placeholder="Password" />
                  </div>
                  <div v-if="form.errors.password" class="text-red-500">
                    {{ form.errors.password }}
                  </div>
              </div>
              <div class="mb-5">
                  <div class="p-inputgroup">
                      <span class="p-inputgroup-addon">
                          <i class="pi pi-key"></i>
                      </span>
                      <InputText v-model="form.password_confirmation" type="password" placeholder="Confirm Password" />
                  </div>
                  <div v-if="form.errors.password_confirmation" class="text-red-500">
                    {{ form.errors.password_confirmation }}
                  </div>
              </div>
              <div class="text-center">
                  <Button type="submit" icon="pi pi-check" label="パスワードを変更" />
              </div>
          </form>
      </div>
    </div>
  </GuestLayout>
  
</template>
