<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />

</head>
<body>
    <main>
        <div class="confirm__title">
            <h2>内容確認</h2>
        </div>
        <form class="confirm-form" action="/contacts" method="POST">
        @csrf
            <div class="confirm__group">
                <div class="confirm__group-title">
                    <span class="confirm__label--item">
                    お名前</span>
                </div>
                <div class="confirm__group-content">
                    <div class="confirm__name">
                        <div class="confirm-content__text">
                            <input type="text" name="familyname" value="{{$contact['familyname']}}" readonly/>
                            <input type="text" name="name" value="{{$contact['name']}}" readonly/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="confirm__group">
                <div class="confirm__group-title">
                    <span class="confirm__label--item">性別</span>
                </div>
                <div class="confirm__group-content">
                    <div class="confirm-content__text">
                        <input type="text" name="gender" value="{{ $contact['gender']}}" readeonly/>
                    </div>
                </div>
            </div>
            <div class="confirm__group">
                <div class="confirm__group-title">
                    <span class="confirm__label--item">
                    メールアドレス</span>
                </div>
                <div class="confirm__group-content">
                    <div class="confirm-content__text">
                        <input type="email" name="email" value="{{$contact['email']}}" readonly/>
                    </div>
                </div>
            </div>
            <div class="confirm__group">
                <div class="confirm__group-title">
                    <span class="confirm__label--item">
                    郵便番号</span>
                </div>
                <div class="confirm__group-content">
                    <div class="confirm-content__text">
                        <input type="text" name="postcode" value="{{$contact['postcode']}}" readonly/>
                    </div>
                </div>
            </div>
            <div class="confirm__group">
                <div class="confirm__group-title">
                    <span class="confirm__label--item">
                    住所</span>
                </div>
                <div class="confirm__group-content">
                    <div class="confirm-content__text">
                        <input type="text" name="address" value="{{$contact['address']}}" readonly/>
                    </div>
                </div>
            </div>
            <div class="confirm__group">
                <div class="confirm__group-title">
                    <span class="confirm__label--item">
                    建物名</span>
                </div>
                <div class="confirm__group-content">
                    <div class="confirm-content__text">
                        <input type="text" name="building_name" value="{{$contact['building_name']}}" readonly/>
                    </div>
                </div>
            </div>
            <div class="confirm__group">
                <div class="confirm__group-title">
                    <span class="confirm__label--item">
                    ご意見</span>
                </div>
                <div class="confirm__group-content">
                    <div class="confirm-content__textarea">
                        <textarea name="option" readonly/>{{ $contact['option']}}</textarea>
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
            </div>
            <div class="revise__form">
                <a href="/">修正する</a>
            </div>
        </form>
    </main>
</body>
</html>