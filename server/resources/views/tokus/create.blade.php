<h1>ひろったものの登録</h1>

<form action="/tokus" method="post">
    @csrf
    <p>カテゴリー<br>
    {{-- <input type="text" name="title" value="{{ old('title') }}">
    <form action="index.php" method = "POST"> --}}
        <select name= "category">
            <option value = "貴重品">貴重品</option>
            <option value = "身につける系">身につける系</option>
            <option value = "電子機器">電子機器</option>
            <option value = "読み書き系">読み書き系</option>
            <option value = "その他">その他</option>
        </select>
        {{-- <input type="submit"name="submit"value="送信"/>
    </form> --}}
    </p>
    <p>見つけた場所<br>
        <input type="text" name="find" value="{{ old('find') }}">
    </p>
    <p>写真<br>
        <input type="text" name="image_url" value="{{ old('image_url') }}">
    </p>
    <p>届けた場所<br>
        <input type="text" name="deliver" value="{{ old('deliver') }}">
    </p>
    <p>詳細(任意)<br>
        <textarea name="description">{{ old('description') }}</textarea>
    </p>
    <button type="button" onclick="location.href='/tokus'">登録する</button>
    {{-- <input action=type="submit" value="登録する"> --}}
</form>