<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import Logo from '../Components/Logo.vue';
</script>

<template>
  <div class="h-screen">
    <header class="p-3 bg-surface-300 shadow flex justify-content-between">
      <Logo />
      <div class="mx-3 mt-1">
        <Link href="/login" class="text-primary mr-3">ログイン</Link>
        <Link href="/register" class="text-primary">新規登録</Link>
      </div>
    </header>

    <div class="p-4">
      <slot />
    </div>
  </div>
</template>
