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
        secu: '#8661c1'
      },
      keyframes: {
        'fade-font':{
          '0%':{ transform: 'translateY(-25px)',
                 opacity: '0.1'},

          '100%':{transform: 'translateY(0)',
                  opacity: '1'},
        }
      },
      animation:{
        'fade-font': 'fade-font 2s ease-in-out forwards'
      }
    },
  },
  plugins: [],
}

