import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        colors: {
            'midnight': '#709FA9',
            white: '#FFFFFF',
            'oren': '#FBA14B',
            'gelap': {
                100: '#D4D4D4',
                200: '#727272',
                300: '#2E2E2E',
                400: '#303030',
            },
        },
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            textColor: ['hover'],
            backgroundColor: ['hover'],
        },
    },

    plugins: [forms],
};