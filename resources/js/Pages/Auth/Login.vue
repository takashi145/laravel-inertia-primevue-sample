<script setup>
import Card from 'primevue/card';
import InputText from 'primevue/inputtext';
import { useForm, Link } from '@inertiajs/inertia-vue3';
import GuestLayout from '../../Layouts/GuestLayout.vue';

const props = defineProps({
  errors: Object
})

const form = useForm({
  email: '',
  password: ''
});

const login = () => {
  form.post('/login');
}

</script>

<template>
  <GuestLayout>
    <div class="mt-8">
      <div class="card shadow p-7 col-12 md:col-10 lg:col-5 mx-auto">
          <h2 class="text-center mb-5">ログイン</h2>
          <form @submit.prevent="login()">
              <div class="mb-5">
                  <div class="p-inputgroup">
                      <span class="p-inputgroup-addon">
                          <i class="pi pi-envelope"></i>
                      </span>
                      <InputText v-model="form.email" type="email" placeholder="Email" />
                  </div>
                  <div v-if="errors.email" class="text-red-500">
                    {{ errors.email }}
                  </div>
              </div>
              <div class="mb-5">
                  <div class="p-inputgroup">
                      <span class="p-inputgroup-addon">
                          <i class="pi pi-key"></i>
                      </span>
                      <InputText v-model="form.password" type="password" placeholder="Password" />
                  </div>
                  <div v-if="errors.password" class="text-red-500">
                    {{ errors.password }}
                  </div>
              </div>
              <div class="text-center">
                  <Button type="submit" icon="pi pi-check" label="ログイン" />
              </div>
          </form>

          <div class="text-center mt-3">
            <Link href="/forgot-password" class="text-primary">パスワードをお忘れですか</Link>
          </div>
      </div>
    </div>
  </GuestLayout>
</template>
