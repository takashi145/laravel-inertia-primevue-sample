<script setup>
import { onMounted, ref } from '@vue/runtime-core';
import AppLayout from '../../Layouts/AppLayout.vue';

const props = defineProps([
  'user'
])

</script>

<template>
  <AppLayout>
    <div v-if="user.id === $page.props.auth.user.id" class="text-xl mb-3">
      マイページ
    </div>
    <div v-else class="text-xl mb-3">
      {{ user.name }}のユーザページ
    </div>
    <div class="m-4">
      ユーザー名: {{ user.name }}
    </div>
  </AppLayout>
</template>