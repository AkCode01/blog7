<h2>Our Team</h2>
<hr>
<h3>{{ $name }}</h3>
<ol>
    @foreach ($names as $n )
        <li>{{ $n }}</li>
    @endforeach
</ol>