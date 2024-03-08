<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
{{--        @if(Session::has('cv.download'))--}}
{{--            <meta http-equiv="refresh" content="5; url=javascript:window.open('www.google.com','_blank');">--}}
{{--            <script type="text/javascript">window.open('{{ 'http://localhost:8000/' . Session::get('cv.download') }}','_blank');</script>--}}
{{--        @endif--}}

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HireMe</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            // vert: '#008037',
                            // oldvert: '#007f5f',
                            // jaune: '#fde047',
                            // orange: '#ffb700'
                            vert: '#008037',
                            oldvert:'#007F5F',
                            jaune: '#fde047',
                            orange: '#ffb700'
                        }
                    }
                }
            }
        </script>

    </head>

    <body>
    @if (session('error'))
        <div id="error-message" class="text-xl text-white text-center py-2 px-4 bg-red-500">{{ session('error') }}</div>
    @endif
{{--  MAIN CONTENT GOES HERE  --}}
        {{ $slot }}

    @stack('scripts')
    </body>
</html>
