let tailwindcss = require("talewindcss")

module.exports = {
  plugins: [
      tailwindcss('./tailwind.config.js'),
      require('postcss-import'),
      require('autoprefixer')
  ]
}
