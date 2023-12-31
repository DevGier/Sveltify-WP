# Sveltify WordPress starter theme
This is basicly a headless solution as a theme. Feel free to modify it as much as you like. If you see anything you want to add to this theme feel free to create a pull request.

## Features

- 💡 Built with Svelte for component-based programming
- 🛰 Added Routify for advanced routing
- 🛠 Bootstrap 5 for elegant theming
- ⚡️ Vite for ultra fast compiling
- 🖌️ SASS for creating awesome stylesheets
- 🏗 TypeScript for ever better programming

## GraphQL API

### Use the GraphQL API to fetch content from WordPress and use it in the theme

[Check the plugin out here](https://github.com/wp-graphql/wp-graphql)

## Bootstrap 5

This theme has Bootstrap 5 already integrated into it.

## TailwindCSS

To replace Bootstrap 5 with Tailwind symply execute the following commands:

### Remove Bootstrap and replace it with TailwindCSS

```
yarn remove bootstrap
yarn add -D tailwindcss postcss autoprefixer
yarn tailwindcss init -p
```

### Create a new file tailwind.config.js

```
module.exports = {
  content: ["./src/**/*.{svelte,js,ts,css,sass,scss}"],
  theme: {
    extend: {},
  },
  plugins: [],
};
```

### Create a new file for TailwindCSS called index.css, include it in the main.ts and add the following:

```
@tailwind base;
@tailwind components;
@tailwind utilities;
```
