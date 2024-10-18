<template>
    <nav class="bg-white shadow-lg">
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16">
          <div class="flex">
            <div class="flex-shrink-0 flex items-center">
              <h1 class="text-xl font-bold">Dashboard</h1>
            </div>
          </div>
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <input type="text" placeholder="Search" class="border rounded-lg px-3 py-2 mr-4">
            </div>
            <div class="ml-3 relative">
              <div>
                <button @click="toggleProfileMenu" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User profile">
                </button>
              </div>
              <div v-if="showProfileMenu" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                <div class="py-1 rounded-md bg-white shadow-xs">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </template>
  
  <script>
  import {computed} from 'vue';


  function logout() {
  store.dispatch('logout')
    .then(() => {
      router.push({name: 'login'})
    })
}

const currentUser = computed(()=>store.state.user.data);

  export default {
    name: 'Navbar',
    data() {
      return {
        showProfileMenu: false
      }
    },
    methods: {
      toggleProfileMenu() {
        this.showProfileMenu = !this.showProfileMenu
      }
    }
  }
  </script>