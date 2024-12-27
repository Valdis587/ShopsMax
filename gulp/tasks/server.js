export const server = (done) => {
   app.plugins.browsersync.init({
      proxy: 'http://shopsmaxs',
      host: 'shopsmaxs',
      open: 'external'
   });
}