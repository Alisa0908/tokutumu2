<form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('tokus.index') }}">
    <input class="form-control mr-sm-2" type="search" name="category" placeholder="カテゴリ">
    <input class="form-control mr-sm-2" type="search" name="find" placeholder="見つけた場所">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>