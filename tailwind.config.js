const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode:'jit',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },

            colors:{
                primary: {
                    100:'#ff3377',
                    75:'#ff80aa',
                    50:'#ffccdd',
                    25:'#ffe6ee'
                },

                secondary: {
                    100:'#ff7733',
                    75:'#ffaa80',
                    50:'#ffccb3',
                    25:'#ffeee6'
                },

                gray: {
                    100:'#595959',
                    75:'#666666',
                    50:'#bfbfbf',
                    25:'#e6e6e6'
                },
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
