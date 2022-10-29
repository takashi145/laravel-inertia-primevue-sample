<script setup>
import AppLayout from '../../Layouts/AppLayout.vue';
import { ref } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';
import Dialog from 'primevue/dialog';

const visible = ref(false);

const props = defineProps([
  'post',
]);

const deletePost = () => {
  Inertia.delete(`/posts/${props.post.id}`);
};

</script>

<template>
  <AppLayout>
    <div class="m-8">
      <div class="lg:col-6 mx-auto">
        <div class="my-3">
            <Link href="/posts" class="text-blue-400 hover:text-blue-500">一覧へ戻る</Link>
          </div>
          <div>
            Title
            <h3 class="border-2 p-2 border-round">{{ post.title }}</h3>
          </div>
          <div class="">
            Description
            <p v-if="post.description" class="border-2 p-2 border-round">{{ post.description }}</p>
            <p v-else class="border-2 p-2 border-round text-600">詳細情報がありません。</p>
          </div>
          <div v-if="$page.props.auth.user.id === post.user_id" class="text-right mt-4">
            <Link :href="`/posts/${post.id}/edit`" class="p-2">
              <Button class="p-button-text text-blue-400 hover:text-blue-500">
                <i class="pi pi-pencil text-xl"></i>
              </Button>
            </Link>

            <Button @click="visible = true" class="p-button-text text-red-400 hover:text-red-500 p-2 mx-3">
              <i class="pi pi-trash text-xl pb-1"></i>
            </Button>
            
            <Dialog header="削除確認" v-model:visible="visible" :style="{width: '500px'}" :modal="true">
              <p class="px-3 text-red-400 text-lg">本当に削除しますか</p>
              <template #footer>
                  <Button label="Close" icon="pi pi-times" @click="visible = false" class="p-button-text text-gray-700 hover:text-gray-800"></Button>
                  <Button label="Delete" icon="pi pi-check" @click="deletePost" class="bg-red-400 border-red-400 hover:bg-red-500" autofocus></Button>
              </template>
            </Dialog>
          </div>
      </div>
      
    </div>
  </AppLayout>
</template>