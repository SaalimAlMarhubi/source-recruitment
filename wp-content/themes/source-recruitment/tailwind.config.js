/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {},
      backgroundImage: {
        'custom-gradient': 'linear-gradient(180deg, #604BD8, #342C67)',
      },
    },
  },
  plugins: [],
};

export default config;
