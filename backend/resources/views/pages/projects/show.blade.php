<!DOCTYPE html>
<html lang="ja">
    @include('./partials.header')
    <head>
        <meta charset="utf-8">
        <title>プロジェクト詳細</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <section class="col-md-11">
            <div class="header-container">
                <h1>{{$project->title}}</h1>
                <button class="watch-button">ウォッチ</button>
            </div>
            <div class="button-group">
                <button class="member-button">メンバー</button>
                <button class="close-button">クローズ</button>
                <button class="edit-button" onclick="location.href='{{$project->id}}/edit'">プロジェクト編集</button>
                <form action="{{$project->id}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$project->id}}">
                    <button type="submit" class="delete-button">プロジェクト削除</button>
                </form>
            </div>
            <div class="description-container">
                <label class="project-description">{{$project->description}}</label>
            </div>
        </section>
        <section class="col-md-11">
            <h1 class="issue-list-title">イシュー一覧</h1>
            <button class="create-issue-button">イシュー作成</button>
            <div class="select-status">
                <input type="radio" name="status" value="open">Open
                <input type="radio" name="status" value="closed">Closed
                <input type="radio" name="status">All
            </div>
            <div class="sort-container">
                <select name="sort" size="1">
                    <option value="title">タイトル</option>
                    <option value="updated">最終更新時刻</option>
                </select>
                <div class="sort-switch">
                    <input type="checkbox" id="sort-btn" checked="">
                        <label for="sort-btn">
                            <span></span>
                        </label>
                </div>
            </div>
            <table class="table-bordered col-md-11 issue-list">
                @foreach ($issues as $issue)
                    <tr>
                        <td class="col-md-5">
                            <label class="issue-title">{{$issue->title}}</label>
                            <div>
                                <label>{{$issue->description}}</label>
                            </div>
                        </td>
                        <td class="col-md-3">
                            <div>
                                <label>assigned user by</label>
                            </div>
                            {{-- <label class="assigned-user">{{$user->name}}</label> --}}
                        </td>
                        <td class="col-md-2">
                            <div>
                                <label>last updated at</label>
                            </div>
                            <label>{{$issue->updated_at}}</label>
                        </td>
                        <td class="col-md-1">
                            <label>{{$issue->status}}</label>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
    </body>
</html>