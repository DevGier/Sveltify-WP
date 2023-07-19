# Sveltify WordPress starter theme

## Features

- 💡 Built with Svelte for component-based programming
- 🛰 Added Routify for advanced routing
- 🛠 Bootstrap 5 for elegant theming
- ⚡️ Vite for ultra fast compiling
- 🖌️ SASS for creating awesome stylesheets
- 🏗 TypeScript for ever better programming

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
  content: ["./src/**/*.{js,jsx,ts,tsx}"],
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
