@component('mail::message')

{{ $subject }}

@component('mail::table')
| المعلومات           | *********        |
|:-------------------:| ----------------:|
| {{ $name }}         | الإسم            |
| {{ $email }}        | البريد الإلكتروني|
| {{ $phoneNumber }}  | الهاتف           |
| {{ $type }}         | نوع الرسالة      |

@endcomponent

@component('mail::panel')
{{ $message }}
@endcomponent

@component('mail::button', ['url' => '', 'color' => 'green'])
View Order
@endcomponent

@endcomponent