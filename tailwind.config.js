/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.html', 'creative.html', 'ecommerce.html','privatep.html','themec.html'],
  theme: {
    container:{
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary: '#3F4E4F',
        secondary: '#A27B5C',
        dark: '#2C3639',
        four: '#DCD7C9',
        colorrr: 'rgba(0, 0, 0, .9)'
      },
      screens:{
        '2xl': '1320px',
      },
      fontFamily: {
        ddgp: ['Pacifico']
      }
    },
  },
  plugins: [],
}
