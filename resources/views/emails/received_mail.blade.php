@component('mail::message')
# {{ $email_data['first_name'] }} {{ $email_data['last_name'] }} 



<p>Email: {{ $email_data['email'] }}</p>
<p>Phone: {{ $email_data['phone'] }}</p>
<p>Contact Preferences: {{ $email_data['contact_preferences'] }}</p>


Address: {{ $email_data['address'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
