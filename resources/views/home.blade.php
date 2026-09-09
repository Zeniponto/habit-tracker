<h1>Welcome to the Home Page</h1>

<p>
    ola {{ $name }}!

</p>

<p>
    Seus habitos sao:
</p>
<ul>
    @foreach ($habits as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
