<form method="GET" action="{{ route('tokus.index') }}">
    {{-- <input class="form-control mr-sm-2" type="search" name="category" placeholder="カテゴリ"> --}}
    <select name= "category">
            <option value = "貴重品">貴重品</option>
            <option value = "身につける系">身につける系</option>
            <option value = "電子機器">電子機器</option>
            <option value = "読み書き系">読み書き系</option>
            <option value = "その他">その他</option>
        </select>
    <input class="form-control mr-sm-2" type="search" name="find" placeholder="見つけた場所">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">探す</button>
</form>