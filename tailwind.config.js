/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        body: ["'Poppins', sans-serif"],
        title: ["'Kayak Sans', sans-serif"]
      },

      colors:{
        prim: '#f87171',
        // secu: []
      }
    },
  },
  plugins: [],
}

