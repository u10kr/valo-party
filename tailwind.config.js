/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {
        colors: {
            primary: {
                DEFAULT: '#7E2A9F',
                    50: '#F8E4F6',
                    100: '#F2CCF0',
                    200: '#E29CE5',
                    300: '#CB6CD8',
                    400: '#AE3BCB',
                    500: '#7E2A9F',
                    600: '#602383',
                    700: '#451B66',
                    800: '#2D144A',
                    900: '#190C2E'
            },
            secondary: {
                DEFAULT: '#4B9F2A',
                50: '#B0E59C',
                100: '#A4E18C',
                200: '#8AD86B',
                300: '#70CF4B',
                400: '#5ABF33',
                500: '#4B9F2A',
                600: '#36731E',
                700: '#214613',
                800: '#0C1A07',
                900: '#000000',
                950: '#000000'
              },
        },
    },
  },
  plugins: [
    require('preline/plugin'),
    require('@tailwindcss/forms'),
  ],
}
