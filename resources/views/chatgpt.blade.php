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
            <div id="chat_container">
            </div>

            <div class="preload">
                <div class="content">
                    <h1 class="title">Web Chat GPT</h1>
                    <div class="explain">With WebChatGPT you can augment your prompts with relevant web search results for better and up-to-date answers.</div>
                    <div class="examples">
                        <h4 class="title">Examples</h4>
                        <div class="item">Explain quantum computing in simple terms<img src="{{ asset('assets/send.svg') }}" alt="send" /></div>
                        <div class="item">Got any creative ideas for a 10 year old’s birthday?<img src="{{ asset('assets/send.svg') }}" alt="send" /></div>
                        <div class="item">How do I make an HTTP request in Javascript?<img src="{{ asset('assets/send.svg') }}" alt="send" /></div>
                    </div>
                </div>
            </div>

            <form id="chat_form">
              @csrf
              <textarea name="prompt" placeholder="Ask me something..."></textarea>
              <button type="submit"><img src="{{ asset('assets/send.svg') }}" alt="Ask to GPT AI" /></button>
            </form>
          </div>

          <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
