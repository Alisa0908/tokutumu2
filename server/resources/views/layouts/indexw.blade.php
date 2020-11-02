<ul>
    @foreach ($tokus as $toku)
        <li>
            <a href="/tokus/{{ $toku->id }}">{{ $toku->name }}</a>
        </li>
    @endforeach
</ul>