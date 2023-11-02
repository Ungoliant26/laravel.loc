<div class="alert alert-success">
    <div class="container">
        <h1 class="alert-heading">Приветствуем на нашем сайте всех бедолаг</h1>

        @php
            $content = file_get_contents('http://loripsum.net/api');
        @endphp

        <p class="alert-heading">{!! $content !!}</p>
    </div>
</div>
