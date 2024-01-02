/** @type {import('tailwindcss').Config} */
const fluid_type = require('tailwindcss-fluid-type');
const default_theme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './*.php',
        './**/*.php',
        'other-classes.txt',
    ],
    theme: {
        extend: {
            screens: {
                'md': '782px',
            },
            fontFamily: {
                'heading': [ 'Tahoma', ...default_theme.fontFamily.sans ],
            },
            margin: ({ theme }) => ({
                'section': `clamp(${theme('width.12')}, 2.294vw + 1.041rem, ${theme('width.32')})`,
                'layer': `clamp(${theme('width.32')}, 2.294vw + 1.041rem, ${theme('width.56')})`,
            }),
            padding: ({ theme }) => ({
                'section': `clamp(${theme('width.12')}, 2.294vw + 1.041rem, ${theme('width.32')})`,
                'layer': `clamp(${theme('width.32')}, 2.294vw + 1.041rem, ${theme('width.56')})`,
            }),
            colors: {
                primary: {
                    DEFAULT: '#3B71CA',
                    600: '#3061AF',
                    700: '#285192',
                }
            },
        },
    },
    corePlugins: {
        fontSize: false
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        require('tailwindcss-debug-screens'),
        fluid_type({
            settings: {
                fontSizeMin: 1.25,
                fontSizeMax: 1.375,
                ratioMin: 1.125,
                ratioMax: 1.2,
                screenMin: 20,
                screenMax: 96,
                unit: 'rem',
                prefix: '',
                extendValues: false,
            },
        }),
    ],
}

