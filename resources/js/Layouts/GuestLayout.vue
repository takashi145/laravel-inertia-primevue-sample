<script setup>
import { Inertia } from '@inertiajs/inertia';
import { Link } from '@inertiajs/inertia-vue3';
import { onMounted, ref } from 'vue';
import Logo from '../Components/Logo.vue';

const url = ref()

onMounted(() => {
  url.value = Inertia.page.url
})
</script>

<template>
  <div class="h-screen">
    <header class="p-3 bg-surface-300 shadow flex justify-content-between">
      <Logo />
      <div class="mx-3 mt-1">
        <Link href="/login" v-bind:class="{'border-bottom-2 border-gray-400':url==='/login'}" class="mr-3 text-700">ログイン</Link>
        <Link href="/register" v-bind:class="{'border-bottom-2 border-gray-400':url==='/register'}" class="text-700">新規登録</Link>
      </div>
    </header>

    <div class="p-4">
      <slot />
    </div>
  </div>
</template>
