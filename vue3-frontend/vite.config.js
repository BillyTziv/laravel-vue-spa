import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import { resolve } from 'path';

export default defineConfig({
  plugins: [vue()],
  build: {
    manifest: true,
    outDir: resolve(__dirname, '../laravel-backend/public/build'),
    emptyOutDir: true,
    rollupOptions: {
      input: resolve(__dirname, 'src/main.js'),
    },
  },
  server: {
    cors: true,
    origin: 'http://localhost:3000',
    proxy: {
      '/': 'http://localhost:8000',
    },
  },
});
