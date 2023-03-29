<x-mail::message>
    Dear {{ucfirst($user->name) }},

    This is to notify you that your registration as a consultant with LAND AND CRIBS Realtors Group is successful

    Your login details are as follows :
    Website: register.landandcribs.com
    Consultant ID / Username : {{ $user->name }}
    Your Upline's name is : {{ $user->getUpline()?->profile->getFullName() ?? 'N/A' }}
    Your invitation link :  {{ $user->getRefLink() }}

    Kindly log in on the portal to see more details on the available products.

    You can register new consultants into your team by sending them your online registration form as contained in your
    invitation url

    {{ $user->getRefLink() }}


    Kindly join us on our social media platforms
    Instagram page
    https://www.instagram.com/landandcribs/



    We look forward to wonderful experiences together

    For complaints, comments and suggestions, please visit: landandcribs.com to send us a mail



    Thank you.


    LANDANDCRIBS Realtors Group team
    {{-- 
<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }} --}}
</x-mail::message>
