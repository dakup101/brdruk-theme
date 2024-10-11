const { container } = require("webpack");

module.exports = {
    content: [
        './views/*.php',
        './blocks/*.php',
        './components/*.php',
        './components/*.html',
        './header.php',
        './footer.php',
        './src/ts/functions/*.ts',
        './inc/*.php',
    ],
    theme: {
        colors: {
            'dark': '#212121',
            'white': '#ffffff',
            'transparent': 'transparent',
        },
        container: {
            padding: {
                DEFAULT: '1rem',
            },
            center: true,
        },
        extend: {
            fontFamily: {
                'sans': ['RedHatDisplay', 'sans-serif'], 
                'title' : ['Lexend', 'sans-serif'], 
            },
        }
    },
    plugins: []
}
