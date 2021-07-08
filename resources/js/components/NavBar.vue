<template>
  <nav class="bg-white px-6 py-2 flex items-center justify-between">
    <div>
      <a
        href="/"
        class="bg-blue-100 hover:bg-blue-50 shadow-sm block px-3 py-2 rounded-lg"
      >
        <span class="font-bold uppercase text-blue-600 block">Kuponify</span>
        <span class="block uppercase font-light text-sm text-gray-500"
          >Coupon Generator</span
        >
      </a>
    </div>
    <div>
      <a href="{{ route('kuponify.showLoginForm') }}">Login</a>
    </div>
  </nav>
</template>

<script>
export default {
  name: "NavBar",
};
</script>
