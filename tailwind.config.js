module.exports = {
  theme: {
    extend: {
        height: theme => ({
            "screen2/3": "80vh",
            "screen/3": "calc(100vh / 3)",
            "screen/4": "calc(100vh / 4)",
            "screen/5": "calc(100vh / 5)",
          }),
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ]
}
