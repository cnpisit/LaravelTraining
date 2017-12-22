#View
###### view are what you will see on website
Views contain the HTML served by your application and separate your controller / application logic from your presentation logic. Views are stored in the resources/views directory. A simple view might look something like this:
```$xslt
+ @extends(‘layoutName’)
	+ @yield(‘viewName’), @section(‘viewName’) @endsection
	+ @include(‘viewName’, $data)
	+ @php @endphp
	+ @if @elseif @endif,
	+ @for($I=0;$I<num; $I++) @endfor
	+ @foreach($array as $ele) @endforeach 
	+ @while @endwhile
	+ @push(’scriptsOrStyleName’) @endpush, @stack(‘scriptsOrStyleName’)
	+{{ $name }} for echo string 

```
[for more detail about view](https://laravel.com/docs/5.3/views)


