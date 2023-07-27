/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
          primary: "#ea1d2c", // Substitua pelo valor da sua cor primária
          fundo: "#f7f7f7", // Substitua pelo valor da sua cor primária
        },
      },
    },
    plugins: [],
  };
