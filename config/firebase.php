<?php

declare(strict_types=1);

return [
    /*
     * ------------------------------------------------------------------------
     * Default Firebase project
     * ------------------------------------------------------------------------
     */

    'default' => env('FIREBASE_PROJECT', 'app'),

    /*
     * ------------------------------------------------------------------------
     * Firebase project configurations
     * ------------------------------------------------------------------------
     */

    'projects' => [
        'app' => [

            /*
             * ------------------------------------------------------------------------
             * Credentials / Service Account
             * ------------------------------------------------------------------------
             *
             * In order to access a Firebase project and its related services using a
             * server SDK, requests must be authenticated. For server-to-server
             * communication this is done with a Service Account.
             *
             * If you don't already have generated a Service Account, you can do so by
             * following the instructions from the official documentation pages at
             *
             * https://firebase.google.com/docs/admin/setup#initialize_the_sdk
             *
             * Once you have downloaded the Service Account JSON file, you can use it
             * to configure the package.
             *
             * If you don't provide credentials, the Firebase Admin SDK will try to
             * auto-discover them
             *
             * - by checking the environment variable FIREBASE_CREDENTIALS
             * - by checking the environment variable GOOGLE_APPLICATION_CREDENTIALS
             * - by trying to find Google's well known file
             * - by checking if the application is running on GCE/GCP
             *
             * If no credentials file can be found, an exception will be thrown the
             * first time you try to access a component of the Firebase Admin SDK.
             *
             */

            'credentials' => [

                'type' => 'service_account',
                'project_id' => 'vueproject-1316f',
                'private_key_id' => '4836811417b1dac0f4bc829c495cc4d58a27c495',
                'private_key' => '-----BEGIN PRIVATE KEY-----\nMIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCMz5ctYp+79Gbo\nTHAeFXcR2FHy+NtMZnxLrOtDbrgjO/HY5vJm/68oGzgu6Lz/qolYP4QJhL6AMoEt\n4CSQ3BToN89HCPQwv7LdHTCHaM5nDm6E5JLJHtPQNE36rIFqnhqAGextmkIZXA4P\ngkmrhxsQT0mLlTM00S4h/DP4NJNj/6egeHtp82dcc4Lr3odmUGEPW7yNmezHcVP9\nw2aBArWU8qO+QwXkeVzTJCQIcJ01CP1rChYr8Nz//ShhMu7vLxTkXtbPQZ8Ye5mD\nw/hiYtL61ZuRBXVOOWeZFIDT73HsT2qIHKzykVB2QF7lnPfHEUQxHZZ94Y9H3bue\n7uVJFi8pAgMBAAECggEADmd/eWfy+2sMWmPUXc14E1ofwvVQWKvMuACRxgGF4mvT\nyQqR/jWWZUnIiOrrx5MaTu3ba85ZnvtbodXho7RxypIH+QYqVbDMgyhE4js3Tw1H\nwr4volWOGSi6l+Os7vtKrnNIb2tV6upy8UT0lJCC9RuJRFdASF1EJPub1N6K+9IA\nysRHM3Q5Ai1Ornef3gK5wf7v9WCHZwxkeo0zjXHKApxBCHszSKtl76c914i+Sfib\n/WQugIonVvdgKqKlFb5qJSveAzn8KEQGN8I1uBGFk10R2vf/HdvuueurdHKM1drh\n+OA4v00KgZQew0A78xs5PhS5FXwxbjtdd6qfmSbNQQKBgQDAIylkle6t7VMwatr6\n0NQVqUh6asvukRHjGbND+HYa0KxBrOf/RZbfxXw3Y9j4XXg7CSz28Shwf83mtYnf\nc20I9UQgNsGEHcQLLESS7U6phGqHll+VNcQhEc4uvr1Ty8avkbNNjpZGF5Ks5o4n\nZYm6cjXUxgr6/8ZOk8kiw2muQQKBgQC7nRh8N0x7I2vNHJkrux5Wqh53rw4105hL\nFasot/jZA0fGsRhwfW/WYacCFAwyikDcznw5yK8BqHUN8DrEigjbMRfVMWeSJr4f\n4mUrJadEEWD5csLa2IT8TTBlu/msbvzA/GiryNE/xvQO29O/bY5XQfkv1QyNhB8/\nESrz160W6QKBgGYjiwKcragqDFolw8knsEbfmdbx5P0qg169r82HTImOurOjDiVm\nwgCtBA6R9qp5TcvcYdnYc03ysutdQDDYNHNZpuCVGyR3ilsCKmYM3w9AhD0V1DQG\nw/9sbrXs0cq0/ichBjdJgFs8ds2RNqp80M2bn0BAE2BBDhOBfqALT6fBAoGAXZrh\nrogAlqdzj6CnI1R2rJKwJNKoal6p6zxiayxu8gda9l1Bbk6HUBTkuHq8IzMrbX9w\nJ3xjJJah4FRtXcXo6UOzOmEt5ZOC5HGWPFLLA4EQOyTw5zOEFkWE0h1ZUpkFblwA\n9UR6cjGXbxpqqWXF0O9PnnfTjX/P/y1XmtWOvJECgYAbf0V1IyJh64e7Z0piJO5e\neZ8qoNEHnKYg8ly8tJg2xmDWHDecvB/9AOrOgA78pzCMdKaVgVrNZVLPTrcLq0so\nnkUi1LonqZz5H52rJ+rJV7pmOilwbs7ozYzcmVQV4V1nrEGAdqik6zzGMHfdMfqr\nSB1ivA+4GnFeOfngtzFQZg==\n-----END PRIVATE KEY-----\n',
                'client_email' => 'firebase-adminsdk-btbgs@vueproject-1316f.iam.gserviceaccount.com',
                'client_id' => '105540668846781501842',
                'auth_uri' => 'https://accounts.google.com/o/oauth2/auth',
                'token_uri' => 'https://oauth2.googleapis.com/token',
                'auth_provider_x509_cert_url' => 'https://www.googleapis.com/oauth2/v1/certs',
                'client_x509_cert_url' => 'https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-btbgs%40vueproject-1316f.iam.gserviceaccount.com',
                'universe_domain' => 'googleapis.com'

            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Auth Component
             * ------------------------------------------------------------------------
             */

            'auth' => [
                'tenant_id' => env('FIREBASE_AUTH_TENANT_ID'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Realtime Database
             * ------------------------------------------------------------------------
             */

            'database' => [

                /*
                 * In most of the cases the project ID defined in the credentials file
                 * determines the URL of your project's Realtime Database. If the
                 * connection to the Realtime Database fails, you can override
                 * its URL with the value you see at
                 *
                 * https://console.firebase.google.com/u/1/project/_/database
                 *
                 * Please make sure that you use a full URL like, for example,
                 * https://my-project-id.firebaseio.com
                 */

                'url' => env('FIREBASE_DATABASE_URL'),

                /*
                 * As a best practice, a service should have access to only the resources it needs.
                 * To get more fine-grained control over the resources a Firebase app instance can access,
                 * use a unique identifier in your Security Rules to represent your service.
                 *
                 * https://firebase.google.com/docs/database/admin/start#authenticate-with-limited-privileges
                 */

                // 'auth_variable_override' => [
                //     'uid' => 'my-service-worker'
                // ],

            ],

            'dynamic_links' => [

                /*
                 * Dynamic links can be built with any URL prefix registered on
                 *
                 * https://console.firebase.google.com/u/1/project/_/durablelinks/links/
                 *
                 * You can define one of those domains as the default for new Dynamic
                 * Links created within your project.
                 *
                 * The value must be a valid domain, for example,
                 * https://example.page.link
                 */

                'default_domain' => env('FIREBASE_DYNAMIC_LINKS_DEFAULT_DOMAIN'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Cloud Storage
             * ------------------------------------------------------------------------
             */

            'storage' => [

                /*
                 * Your project's default storage bucket usually uses the project ID
                 * as its name. If you have multiple storage buckets and want to
                 * use another one as the default for your application, you can
                 * override it here.
                 */

                'default_bucket' => env('FIREBASE_STORAGE_DEFAULT_BUCKET'),

            ],

            /*
             * ------------------------------------------------------------------------
             * Caching
             * ------------------------------------------------------------------------
             *
             * The Firebase Admin SDK can cache some data returned from the Firebase
             * API, for example Google's public keys used to verify ID tokens.
             *
             */

            'cache_store' => env('FIREBASE_CACHE_STORE', 'file'),

            /*
             * ------------------------------------------------------------------------
             * Logging
             * ------------------------------------------------------------------------
             *
             * Enable logging of HTTP interaction for insights and/or debugging.
             *
             * Log channels are defined in config/logging.php
             *
             * Successful HTTP messages are logged with the log level 'info'.
             * Failed HTTP messages are logged with the log level 'notice'.
             *
             * Note: Using the same channel for simple and debug logs will result in
             * two entries per request and response.
             */

            'logging' => [
                'http_log_channel' => env('FIREBASE_HTTP_LOG_CHANNEL'),
                'http_debug_log_channel' => env('FIREBASE_HTTP_DEBUG_LOG_CHANNEL'),
            ],

            /*
             * ------------------------------------------------------------------------
             * HTTP Client Options
             * ------------------------------------------------------------------------
             *
             * Behavior of the HTTP Cphp artisan vendor:publish --provider="Kreait\Laravel\Firebase\ServiceProvider" --tag=configphp artisan vendor:publish --provider="Kreait\Laravel\Firebase\ServiceProvider" --tag=configlient performing the API requests
             */

            'http_client_options' => [

                /*
                 * Use a proxy that all API requests should be passed through.
                 * (default: none)
                 */

                'proxy' => env('FIREBASE_HTTP_CLIENT_PROXY'),

                /*
                 * Set the maximum amount of seconds (float) that can pass before
                 * a request is considered timed out
                 *
                 * The default time out can be reviewed at
                 * https://github.com/kreait/firebase-php/blob/6.x/src/Firebase/Http/HttpClientOptions.php
                 */

                'timeout' => env('FIREBASE_HTTP_CLIENT_TIMEOUT'),

                'guzzle_middlewares' => [],
            ],
        ],
    ],
];
