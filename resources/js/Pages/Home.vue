<script setup>
import AppLayout from '../Layouts/AppLayout.vue';
import { ref } from 'vue';

const visible = ref(false)
</script>

<template>
  <AppLayout>
    <div class="m-4">
      <h2>ログイン済み</h2>
    </div>
  </AppLayout>
</template>