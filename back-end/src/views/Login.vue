<template>
  <GuestLayout title="Đăng nhập">
    <form @submit.prevent="login">
      <div class="space-y-4">
        <input
          type="email"
          placeholder="Email"
          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#b8a79c]"
          required
          v-model="user.email"
        />
        <input
          type="password"
          placeholder="Mật khẩu"
          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#b8a79c]"
          required
          v-model="user.password"
        />
      </div>
      <button
        type="submit" :disable="loading"
        class="w-full bg-[#b8a79c] text-white py-2 rounded-md hover:bg-[#a69589] transition duration-300 mt-6"
        :class="{
          'cursor-not-allow': loading
        }
      >
        Đăng nhập
      </button>
      <div class="mt-4 text-center">
        <a href="#" class="text-sm text-[#b8a79c] hover:underline">Đăng kí</a>
        <span class="mx-2 text-gray-500">|</span>
        <router-link to="request-password" class="text-sm text-[#b8a79c] hover:underline">Quên mật khẩu</router-link>
      </div>
    </form>
  </GuestLayout>
</template>

<script setup>
import {ref} from 'vue'
import GuestLayout from '../components/GuestLayout.vue'

const handleSubmit = () => {
  // Handle form submission
  console.log('Login form submitted')
}

let loading =ref(false);
let errorMsg = ref("");

const user = {
  email:'',
  password:'',
  remember:false
}

function login(){
  loading.value=true;
  store.dispatch('login',user)
    .then(() => {
      loading.value=false;
      router.push({name: 'app.dashboard'});
    })
    .catch(({response}) => {
      loading.value=false;
      errorMsg.value=response.data.message;
    })
}

</script>