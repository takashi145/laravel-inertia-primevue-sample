<script setup>
import Card from 'primevue/card';
import InputText from 'primevue/inputtext';
import Button from 'primevue/button';
import { useForm, Link } from '@inertiajs/inertia-vue3';

const form = useForm({
  name: '',
  email: '',
  password: '',
  password_confirmation: ''
});

const register = () => {
  form.post('/register');
}

</script>

<template>
  <div class="m-8">
    <div class="card shadow p-7 col-12 md:col-10 lg:col-5 mx-auto">
        <h2 class="text-center mb-5">新規登録</h2>
        <form @submit.prevent="register">
            <div class="mb-5">
                <div class="p-inputgroup">
                    <span class="p-inputgroup-addon">
                        <i class="pi pi-user"></i>
                    </span>
                    <InputText v-model="form.name" type="text" placeholder="Name" />
                </div>
            </div>
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
            <div class="mb-5">
                <div class="p-inputgroup">
                    <span class="p-inputgroup-addon">
                        <i class="pi pi-key"></i>
                    </span>
                    <InputText v-model="form.password_confirmation" type="password" placeholder="Confirm Password" />
                </div>
            </div>
            <div class="text-center">
                <Button type="submit" icon="pi pi-check" label="新規登録" />
            </div>
        </form>
        <div class="text-center mt-3">
          <Link href="/login" class="text-primary">すでにアカウントをお持ちですか?ログイン</Link>
        </div>
    </div>
  </div>
</template>
