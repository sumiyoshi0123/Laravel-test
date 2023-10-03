<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/search.css') }}" />

</head>
<body>
    <div class="search__form-title">
        <h2>管理システム</h2>
    </div>
    <form class="search__form" action="/contacts/search" method="get">
    @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
            </div>
            <div class="form__group-content">
                <input type="text" name="keyword" value="{{ old('keyword') }}">
            </div>
        </div>
        <div class="form__group-gender">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
            </div>
            <div class="from__group-content">
                <div class="form__input--radio">
                    <label class="select-gender">
                        <input type="radio" name="gender" value="全て" checked/>
                        <span class="gender">全て</span>
                        <input type="radio" name="gender" value="男性" />
                        <span class="gender">男性</span>
                        <input type="radio" name="gender" value="女性" />
                        <span class="gender">女性</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">登録日</span>
            </div>
            <div class="form__group-content">
                <input type="text" name="">
                <input type="text" name="">
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
            </div>
            <div class="form__group-content">
                <input type="text" name="email">
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">検索</button>
        </div>
        <div class="reset__button">
            <a href="/contacts/search">リセット</a>
        </div>
    </form>
    <table class="form__data">
        <tr>
            <th>ID</th>
            <th>苗字</th>
            <th>名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>ご意見</th>
        </tr>
        @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>{{$contact->familyname}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->gender}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->option}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>