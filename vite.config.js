import { defineConfig } from 'vite'
import { svelte } from '@sveltejs/vite-plugin-svelte'
import preprocess from 'svelte-preprocess'
import { viteSingleFile } from 'vite-plugin-singlefile'
import sassGlobImports from 'vite-plugin-sass-glob-import'

export default defineConfig({
  server: {
    port: 5000,
  },
  build: {
    sourcemap: false,
    emptyOutDir: true,
    rollupOptions: {
      input: 'src/main.ts',
      output: {
        entryFileNames: `[name].js`,
        chunkFileNames: `[name].js`,
        assetFileNames: `[name].[ext]`,
      },
    },
  },
  plugins: [
    viteSingleFile(),
    sassGlobImports(),
    svelte({
      preprocess: [preprocess()],
    }),
  ],
})
