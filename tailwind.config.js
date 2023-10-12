/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/*/*.blade.php",
        "./resources/blade/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        backgroundImage: {
            'auth': "url('/img/authImage.png')",
        },
        "colors": {
            "black": {
                '0': '#2E2828',
                "10": '#4F4F4F'
            },
            "brand": {
                "0": '#092C86',
                "10": '#D4DEF9',
                "50": '#092C860D'
            },
            "white": {
                "0": '#FFFFFF',
                "10": '#FFFFFF1A',
                "20": "#FAFAFA"
            },
            "gray": {
                "0": '#E6E6E6',
                "10": '#C4C4C4',
                "20": '#828282',
                "30": '#F5F5F5',
                "40": '#E6E6E6',
                "50": '#F2F2F2',
                "60": '#80868C',
                "70": '#EDEFF4',
                "80": '#F3F5F7',
            },
            "yellow": {
                "0": '#FEFAF1',
            }
        },
        'fontSize': {
            'xs': '0.75rem',
            'sm': '0.875rem',
            'base': '1rem',
            'lg': '1.125rem',
            'xl': '1.25rem',
            '2xl': '1.5rem',
            '3xl': '1.75rem',
            '4xl': '2rem',
            '5xl': '2.25rem',
            '6xl': '2.5rem',
            '7xl': '2.75rem',
            '8xl': '3rem',
            '9xl': '3.25rem',
            '10xl': '10rem',
        },


    },
  },
  plugins: [
      require('@tailwindcss/forms')
  ],
}

