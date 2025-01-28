<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>Portal Kerjaya PASB</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        {{-- @guest <script src="https://accounts.google.com/gsi/client" async defer></script> @endguest --}}

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="google-client-id" content="{{ config('services.google-one-tap.client_id') }}">

        @guest <script src="https://accounts.google.com/gsi/client" async defer></script> @endguest
        <script>
            window.onload = function () {
                const clientId = document.querySelector('meta[name="google-client-id"]').content;
                google.accounts.id.initialize({
                    client_id: clientId,
                    callback: handleCredentialResponse, // Callback to handle the token

                    debug: true,

                    prompt_parent_id: 'one-tap-container', // Optional: Define a container
                    promptMomentNotification: (notification) => {
                        if (notification.isDismissedMoment()) {
                            console.log('The user dismissed the One Tap prompt.');
                        } else if (notification.isNotDisplayedReason()) {
                            console.log('Prompt not displayed due to:', notification.getNotDisplayedReason());
                        }
                    },
                });
                window.addEventListener('beforeunload', () => {
                    console.log('Page is being reloaded or navigated away.');
                });
                google.accounts.id.prompt(); // Show the One Tap prompt
            };

            function handleCredentialResponse(response) {
                const googleCredentialToken = response.credential;

                // Send token to the backend
                // https://jobs-test.on-pasb.com/auth/google/callback
                // fetch('/auth/google-one-tap', {
                fetch('/auth/google/callback', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: JSON.stringify({ token: googleCredentialToken }),
                })
                    .then(response => response.json())
                    .then(data => {
                        // if (data.user) {
                        //     console.log('Login successful:', data.user);
                        // } else {
                        //     console.error('Login faileed:', data);
                        //     console.log('Google Credential Token:', googleCredentialToken);

                        // }
                        if (data.success) {
                            // Redirect to the URL provided by the backend
                            window.location.href = data.redirect_url;
                        } else {
                            console.error('Login failed:', data.error);
                            alert('Login failed. Please try again.');
                        }
                    })
                    .catch(error => console.error('Error:', error));
                }
        </script>


        
        {{-- @googlefonts --}}

        <style>
            .starlabel label:after {
                content:" *";
                color: red;}
        </style>
    </head>
    {{-- <body class="font-sans antialiased">     --}}
    <body class="antialiased">

  
  <div class="">
    @yield('content')
  </div>
  
  

        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

        {{-- <script>
            function handleCredentialResponse(response) {
              const credential = response.credential;
          
              // Send the credential to your Laravel back-end using a POST request
              fetch('/auth/google/callback', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), // CSRF token
                },
                body: JSON.stringify({ credential }), // Send the credential
              })
                .then((res) => res.json())
                .then((data) => {
                  if (data.success) {
                    // Redirect to the dashboard or handle success
                    window.location.href = '/dashboard';
                  } else {
                    // Handle errors
                    console.error(data.message);
                  }
                })
                .catch((err) => console.error('Error:', err));
            }
          
            // Configure Google One Tap
            window.onload = function () {
              google.accounts.id.initialize({
                client_id: '149172983656-08iqk77g7ej008bbc5bi15l3kimfejom.apps.googleusercontent.com',
                callback: handleCredentialResponse,
              });
          
              google.accounts.id.prompt(); // Show One Tap prompt
            };
        </script> --}}
    </body>
</html>
<!DOCTYPE html>
