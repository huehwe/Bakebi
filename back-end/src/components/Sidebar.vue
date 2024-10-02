<template>
  <div class="bg-white w-64 h-full shadow-lg">
    <div class="p-4">
      <h2 class="text-2xl font-semibold">Hello, admin</h2>
    </div>
    <nav class="mt-4">
      <a v-for="item in menuItems" :key="item.name" :href="item.href" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">
        <i :class="item.icon" class="mr-2"></i>
        {{ item.name }}
      </a>
    </nav>
  </div>
</template>

<script>
export default {
  name: 'Sidebar',
  data() {
    return {
      menuItems: [
        { name: 'Dashboard', icon: 'fas fa-tachometer-alt', href: '/' },
        { name: 'Quản lý Sản phẩm', icon: 'fas fa-box', href: '/products' },
        { name: 'Quản lý Banner', icon: 'fas fa-image', href: '/banners' },
        { name: 'Quản lý Voucher', icon: 'fas fa-ticket-alt', href: '/vouchers' },
        { name: 'Quản lý nhập hàng', icon: 'fas fa-truck-loading', href: '/inventory' },
        { name: 'Quản lý Chi nhánh', icon: 'fas fa-store', href: '/branches' },
        { name: 'Quản lý User', icon: 'fas fa-users', href: '/users' },
        { name: 'Báo cáo thống kê', icon: 'fas fa-chart-bar', href: '/reports' },
        { name: 'Category', icon: 'fas fa-tags', href: '/categories' },
        { name: 'Sub-category', icon: 'fas fa-tag', href: '/subcategories' },
      ]
    }
  }
}

</script>