/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: [
    "./resources/views/blog.blade.php",
    "./resources/views/contact.blade.php",
    "./resources/views/home.blade.php",
    "./resources/css/app.css",
    "./resources/js/app.js",
    "./resources/js/bootstrap.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Poppins", ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [],
}

