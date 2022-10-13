<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import Menubar from 'primevue/menubar';

</script>

<template>
  <div class="h-screen">
    <Menubar class="bg-surface-300 shadow">
      <template #start>
        <div class="text-xl">Logo</div>
      </template>
      <template #item>
      </template>
      <template #end>
        <div class="mx-3">
          <Link href="/login" class="text-primary mr-3">ログイン</Link>
          <Link href="/register" class="text-primary">新規登録</Link>
        </div>
      </template>
    </Menubar>

    <div class="p-4">
      <slot />
    </div>
  </div>
</template>
