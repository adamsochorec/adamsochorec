export default defineNuxtConfig({
  compatibilityDate: "2025-06-10",
  css: ["/assets/css/main.css"],
  postcss: {
    plugins: {
      "postcss-nested": {},
      "postcss-custom-media": {},
    },
  },
  devtools: {
    enabled: process.env.NODE_ENV !== "production",
    timeline: {
      enabled: true,
    },
  },
  debug: true,
  modules: ["@nuxt/icon", "@nuxt/fonts", "@nuxt/devtools"],
  app: {
    baseURL: "/",
    buildAssetsDir: "/_nuxt/",
    head: {
      link: [
        {
          rel: "icon",
          type: "image/x-icon",
          href: "/favicon.ico",
        },
      ],
      charset: "utf-16",
      viewport: "width=device-width, initial-scale=1, maximum-scale=1",
      htmlAttrs: {
        lang: "en",
      },
    },
    pageTransition: { name: "page", mode: "out-in" },
  },
  nitro: {
    output: {
      serverDir: ".output/server",
    },
    prerender: {
      crawlLinks: true,
    },
  },
});
