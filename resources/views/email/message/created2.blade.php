

@componenet('mail::message')

- 
My email is {{ $request->email }}

- My phone number is {{ $request->phoneNumber }}

- I want to talk about {{ $request->subject }}

- Type of email is {{ $request->type }}

@component('mail::panel')
{{ $request->message }}
@endcomponent

@componenet('mail::button', ['url' => route('/') ])

Button

@endcomponent


Thanx, <br>

{{ $request->name }}

@endcomponent

