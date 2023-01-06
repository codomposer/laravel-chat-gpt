<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="token" content="{{ csrf_token() }}">

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <div id="chat_container"></div>

            <form id="chat_form">
              @csrf
              <textarea name="prompt" placeholder="Ask me something..."></textarea>
              <button type="submit"><img src="{{ asset('assets/send.svg') }}" alt="Ask to GPT AI" /></button>
            </form>
          </div>

          <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
