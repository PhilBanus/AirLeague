@component('mail::message')
# Welcome {{ $user->name }}!

<img src="http://airleagueband.com/images/Logo.png" width="50%" style="margin-left: 25%" alt="">

Thank you for joining the {{ config('app.name') }} website. 

We hope to bring you lots of fun and exciting content, so check back reguarly for updates!

@component('mail::button', ['url' => "https://airleagueband.com"])
Go To Site
@endcomponent

Thanks,<br>
Admin Team
@endcomponent