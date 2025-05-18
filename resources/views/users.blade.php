<h1>
Users Page
</h1>

<p>
    {{-- Hello, {{ $user }}, living in city {{ $city }}. --}}
    {{-- Hello, {{ $user }}, living in city {!!$city!!}. --}}
    {{-- Hello, {{ $user }}, living in city {{ !empty($city) ? $city : 'No City Entered' }}. --}}
    @foreach ($user as $id => $u)
    <h4>
        {{ $id }} | {{ $u['name'] }} | {{ $u['phone'] }} | {{ $u['city'] }}
        | <a href="{{ route('view.user',$id) }}" >Show</a>
    </h4>
        
    @endforeach
</p>