<template>
    <GuestLayout title="Log In">
      <form class="mt-8 space-y-4" @submit.prevent="handleSubmit">
        <input type="hidden" name="remember" value="true"/>
        <div class="space-y-4">
          <div>
            <label for="email-address" class="sr-only">Email address</label>
            <input id="email-address" name="email" type="email" autocomplete="email" required
                   class="appearance-none rounded-full relative block w-full px-4 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#b19b8f] focus:border-[#b19b8f] sm:text-sm"
                   placeholder="Email"/>
          </div>
          <div>
            <label for="password" class="sr-only">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required
                   class="appearance-none rounded-full relative block w-full px-4 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#b19b8f] focus:border-[#b19b8f] sm:text-sm"
                   placeholder="Password"/>
          </div>
        </div>
  
        <div>
          <button type="submit"
                  class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-full text-white bg-[#b19b8f] hover:bg-[#a08977] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#b19b8f]">
            LOG IN
          </button>
        </div>
        <div>
          <button type="button"
                  class="w-full flex justify-center py-3 px-4 border border-[#b19b8f] text-sm font-medium rounded-full text-[#b19b8f] bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#b19b8f]">
            Sign Up
          </button>
        </div>
        <div class="text-center">
          <router-link :to="{name: 'requestPassword'}" class="font-medium text-sm text-[#b19b8f] hover:text-[#a08977]">
            Forgot Password?
          </router-link>
        </div>
      </form>
    </GuestLayout>
  </template>
  
  <script setup>
  import {LockClosedIcon} from '@heroicons/vue/solid'
  import GuestLayout from "../components/GuestLayout.vue";
  </script>