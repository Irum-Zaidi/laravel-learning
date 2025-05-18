@php
    $user = "Irum Zaidi";
    $fruits = ['apple', 'banana', 'orange'];
@endphp

<script>
    // var data = {{ $user }};
    // console.log(data); 

    // var data = @json($user);
    // var data = @json($fruits);


    var data = {{ Js::from($fruits) }};
    
    data.forEach(function(item) {
        console.log(item);
    });
    // console.log(data);



</script>
