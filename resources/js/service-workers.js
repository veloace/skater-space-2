/*
self.addEventListener('install', function(event) {
    event.waitUntil(
        caches.open('skater-space-offline').then(function(cache) {
            return cache.addAll(
                [
                    '/css/app.css',
                    '/js/app.js',
                    '/',//web app shell
                    '/favicons/android-chrome-192x192.png',
                    '/favicons/android-chrome-256x256.png',
                    '/favicons/apple-touch-icon.png',
                    '/favicons/browserconfig.xml',
                    '/favicons/favicon.ico',
                    '/favicons/favicon-16x16.png',
                    '/favicons/favicon-32x32.png',
                    '/favicons/mstile-150x150.png',
                    '/favicons/safari-pinned-tab.svg',
                    '/static/manifest.json'
                ]
            );
        })
    );
});

self.addEventListener('fetch', function(event) {
    event.respondWith(
        caches.open('skater-space-offline').then(function(cache) {
            return cache.match(event.request).then(function (response) {
                return response || fetch(event.request).then(function(response) {
                    cache.put(event.request, response.clone());
                    return response;
                });
            });
        })
    );
});

*/