module.exports = {
  content: ["./*.php", "./**/*.php", "./src/modules/*.js"],
  theme: {
    extend: {
      colors: {
        "itc-light-gray": "var(--itc-light-gray)",
        "itc-dark-red": "var(--itc-dark-red)",
        "itc-secondary-black": "var(--itc-secondary-black)",
        "itc-third-black": "var(--itc-third-black)"
      },
    },
  },
};
