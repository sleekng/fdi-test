/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
              primarycolor :'#020e38',
              graduate :'#c2c7ce',
              footer :'#333c52',
              secondarycolor :'#43b2fd',
              tertiary :'#22436e'
          },
          fontFamily: {
            'sans': ['Jost', 'sans-serif'],
        },
          },
    },


    plugins: [require('@tailwindcss/forms')],
};
