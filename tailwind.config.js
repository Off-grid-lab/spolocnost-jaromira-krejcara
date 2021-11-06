module.exports = {
  mode: 'jit',
  purge: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        blue: '#0089ff',
        linen: '#f0eee7',
      },
      lineHeight: {
        14: '3.5rem',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
