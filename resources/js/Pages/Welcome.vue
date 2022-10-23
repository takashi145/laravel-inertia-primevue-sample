<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
  <div class="m-8">
    <div class="">
      <div v-if="$page.props.auth.user">
        <Link href="/home" class="text-blue-400 hover:text-blue-500">Home</Link>
      </div>
      <div v-else>
        <Link href="/login" class="text-blue-400 hover:text-blue-500">login</Link> <br>
        <Link href="/register" class="text-blue-400 hover:text-blue-500">register</Link>
      </div>  
    </div>
    
  </div>
  
</template>