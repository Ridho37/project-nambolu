// tailwind.config.js
module.exports = {
  content: [
    // Pastikan path ini benar dan mencakup semua file .php Anda
    "./views/**/*.php", 
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}