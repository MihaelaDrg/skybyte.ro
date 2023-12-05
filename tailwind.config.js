import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'sky_dark': '#040a2c',
                'sky_mid_light': '#313a6c',
                'sky_light': '#737db6',
                'sky_shadow_light': '#acafc0',
                'sky_shadow_bright': '#b7bee4',
            },
        },
    },

    plugins: [forms],
};
