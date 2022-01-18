<!DOCTYPE html>
<html lang="ja">
    @include('./partials.header_guest')
    <head>
        <meta charset="utf-8">
        <title>ログイン</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/projects.js')}}"></script>
    </head>
    <body>
        <form action="/login" method="POST" class="login-form">
            @csrf
            <div class="form-parts-container col-md-8">
                <div class="user-id-container row justify-content-center">
                    <label for="user_id">ユーザーID</label>
                    <input type="text" name="user_id" id="id_form" maxlength="254">
                </div>
                <div class="password-container row justify-content-center">
                    <label for="password">パスワード</label>
                    <input type="text" name="password" id="password_form" maxlength="254">
                </div>
            </div>
            <div class="auth-button-group">
                <button type="submit">ログイン</button>
                <button>新規登録</button>
            </div>
            <a href="" class="password-forgot">パスワードを忘れた方</a>
        </form>
    </body>
</html>