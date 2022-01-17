<!DOCTYPE html>
<html lang="ja">
    @include('./partials.header')
    <head>
        <meta charset="utf-8">
        <title>プロジェクト作成</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/projects.js')}}"></script>
    </head>
    <body>
        <h1>プロジェクト作成</h1>
        <form action="/projects/new" method="POST" class="new-project-form">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label new-project-form-label">タイトル</label>
                <label class="asterisk">*</label>
                <input type="text" class="form-control" name="title" maxlength="254">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label new-project-form-label">概要</label>
                <label class="asterisk">*</label>
                <textarea class="form-control" name="description" maxlength="10000" rows="10"></textarea>
            </div>
            <button type="submit" class="new-project-submit-btn">プロジェクト作成</button>
        </form>
    </body>
</html>