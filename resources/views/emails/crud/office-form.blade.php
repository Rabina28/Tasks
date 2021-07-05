@component('mail::message')

<p>we have received a new admission request from</p>
<strong>Firstname:</strong> {{ $student['firstname']}}
<br>
<strong>Lastname:</strong> {{$student['lastname']}}
<br>
<strong>Gender:</strong> {{$student['gender']}}
<br>
<p>Thank you</p>

@endcomponent
