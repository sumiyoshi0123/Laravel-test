<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />

</head>
<body>
    <div class="contact-form__title">
        <h2>お問い合わせ</h2>
    </div>
    <form class="contact-form" action="/contacts/confirm" method ="post">
    @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <div class="input__name--item">
                        <div class="input__familyname">
                            <input type="text" name="familyname" value="{{ old('familyname') }}"/>
                        </div>
                        <div class="input__name">
                            <input type="text" name="name" value="{{ old('name') }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="example">
            <span class="example__familyname">例）山田</span>
            <span class="example__name">例）太郎</span>
        </div>
        <div class="form__error">
            @error('familyname')
            {{ $message }}
            @enderror
            @error('name')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <label class="select-gender">
                        <input type="radio" name="gender" value="男性" checked/>
                        <span class="gender">男性</span>
                        <input type="radio" name="gender" value="女性" />
                        <span class="gender">女性</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form__error">
            @error('gender')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" value="{{ old('email') }}"/>
                </div>
            </div>
        </div>
        <div class="example">
            <p class="example-email">例）test@example.com</p>
        </div>
        <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <div class="input__postcode">
                        <span class="form__label--mark">〒</span>
                        <input type="text" name="postcode" value="{{ old('postcode') }}" />
                    </div>
                </div>
            </div>
        </div>
        <div class="example">
            <p class="example__postcode">例）123-4567</p>
        </div>
        <div class="form__error">
            @error('postcode')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" value="{{ old('address') }}"/>
                </div>
            </div>
        </div>
        <div class="example">
            <p class="example-address">例）東京都渋谷区千駄ヶ谷1-2-3</p>
        </div>
        <div class="form__error">
            @error('address')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building_name" value="{{ old('building_name') }}"/>
                </div>
            </div>
        </div>
        <div class="example">
            <p class="exanple-building">例）千駄ヶ谷マンション101</p>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">ご意見</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="option">{{ old('option') }}</textarea>
                </div>
            </div>
        </div>
        <div class="form__error">
            @error('option')
            {{ $message }}
            @enderror
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認</button>
        </div>
    </form>
</body>
</html>