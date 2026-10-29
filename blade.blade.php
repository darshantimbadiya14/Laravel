<!DOCTYPE html>
<html>
<head>
    <title>Blade Template</title>
</head>
<body>

    <h1>Laravel Blade Template</h1>

    <h2>1. Print Value</h2>
    {{ 5 + 2 }}

    <h2>2. Variables</h2>
    @php
        $user = 'Yahoo Baba';
        $names = ['Darshan', 'Rahul', 'Amit'];
    @endphp

    {{ $user }}

    <h2>3. Display HTML</h2>
    {!! '<h3>Hello World</h3>' !!}

    <h2>4. If Else</h2>
    @php
        $age = 20;
    @endphp

    @if($age >= 18)
        Eligible
    @else
        Not Eligible
    @endif

    <h2>5. Switch Case</h2>
    @switch($age)
        @case(18)
            Age is 18
            @break
        @case(20)
            Age is 20
            @break
        @default
            Other Age
    @endswitch

    <h2>6. Isset</h2>
    @isset($user)
        User is set
    @endisset

    <h2>7. Empty</h2>
    @empty($students)
        No students found
    @endempty

    <h2>8. For Loop</h2>
    @for($i = 1; $i <= 5; $i++)
        {{ $i }} 
    @endfor

    <h2>9. Foreach Loop</h2>
    <ul>
        @foreach($names as $name)
            <li>{{ $name }}</li>
        @endforeach
    </ul>

    <h2>10. While Loop</h2>
    @php
        $i = 1;
    @endphp

    @while($i <= 3)
        {{ $i }}
        @php $i++; @endphp
    @endwhile

    <h2>11. Forelse Loop</h2>
    @forelse($names as $name)
        <p>{{ $name }}</p>
    @empty
        <p>No names found</p>
    @endforelse

    <h2>12. Loop Variables</h2>
    @foreach($names as $name)
        <p>{{ $loop->iteration }}. {{ $name }}</p>
    @endforeach

    {{-- This is a Blade comment --}}

    <h2>13. Break and Continue</h2>
    @foreach($names as $name)
        @if($name == 'Rahul')
            @continue
        @endif

        {{ $name }} <br>
    @endforeach

</body>
</html>