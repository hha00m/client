module.exports = {
  "globDirectory": "./",
  "globPatterns": [
    "**/*.{php,css,js,less,txt,yml,json,scss,svg,eot,ttf,woff,woff2,png,gif,ico,db,jpg,xml,zip,webmanifest,md,vcf,TXT,crt,fdf,p12,pdf,ai,BAK,z,icc}"
  ],
  "swDest": "sw.js",

   // Define runtime caching rules.
   runtimeCaching: [{
    // Match any request that ends with .png, .jpg, .jpeg or .svg.
    urlPattern: /\.(?:png|jpg|jpeg|svg)$/,

    // Apply a cache-first strategy.
    handler: 'StaleWhileRevalidate',

    options: {
      // Use a custom cache name.
      cacheName: 'images',

      // Only cache 10 images.
      expiration: {
        maxEntries: 50,
      },
    },
  },
  {  

    urlPattern: /\.css/,
    handler: 'StaleWhileRevalidate',

    options: {
      cacheName: 'css',

      expiration: {
        maxEntries: 50,
      },
    },
  }, 
  { urlPattern: /\.php/,
    handler: 'StaleWhileRevalidate',
  
    options: {
      cacheName: 'php',
  
      expiration: {
        maxEntries: 50,
      },
    },
  },{ urlPattern: /\.js/,
    handler: 'StaleWhileRevalidate',
  
    options: {
      cacheName: 'js',
  
      expiration: {
        maxEntries: 50,
      },
    },
  }


],
};