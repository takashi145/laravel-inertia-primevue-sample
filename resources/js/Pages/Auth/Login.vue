<script setup>
import { ref } from '@vue/reactivity';
import Card from 'primevue/card';
import InputText from 'primevue/inputtext';
import Password from 'primevue/password';
import Button from 'primevue/button';
import { useForm } from '@inertiajs/inertia-vue3';
const form = useForm({
  email: '',
  password: ''
});

const login = () => {
  form.post('/login');
}

</script>

<template>
  <div class="m-8">
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
            </div>
            <div class="mb-5">
                <div class="p-inputgroup">
                    <span class="p-inputgroup-addon">
                        <i class="pi pi-key"></i>
                    </span>
                    <InputText v-model="form.password" type="password" placeholder="Password" />
                </div>
            </div>
            <div class="text-center">
                <Button type="submit" icon="pi pi-check" label="ログイン" />
            </div>
        </form>
        
    </div>
  </div>
</template>
