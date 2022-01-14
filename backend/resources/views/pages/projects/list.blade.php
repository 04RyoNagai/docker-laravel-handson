<!DOCTYPE html>
<html lang="ja">
    <header>
        <title>プロジェクト一覧画面</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/projects.js')}}"></script>
    </header>
    <body>
        <h1>プロジェクト一覧</h1>
        <button class="new-project-button" onclick="location.href='projects/new'">プロジェクト作成</button>
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
        <table class="table-bordered col-md-11 project-list">
            @foreach ($projects as $project)
                <tr>
                    <td class="col-md-8">
                        <label class="project-title">{{$project->title}}</label>
                        <div>
                            <label>{{$project->description}}</label>
                        </div>
                    </td>
                    <td class="col-md-2">
                        <div>
                            <label>last updated at</label>
                        </div>
                        <label>{{$project->updated_at}}</label>
                    </td>
                    <td class="col-md-1">
                        <label>{{$project->status}}</label>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>