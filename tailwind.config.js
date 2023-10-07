/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/*.php"],
  theme: {
    extend: {
      height:{
        '1':'1px',
      },
      colors:{
        'web-gray':'#333',
      }
    },
  },
  plugins: [],
}

