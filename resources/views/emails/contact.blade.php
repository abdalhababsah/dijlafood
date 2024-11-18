<x-mail::layout>

<x-slot:header>
    <x-mail::header :url="config('app.url')">
        TibTop - Contact Us
    </x-mail::header>
</x-slot:header>


## New Contact Message  

---

### Name:  
{{ $data['name'] }}  

### Email:  
{{ $data['email'] }}  

### Message:  
{{ $data['message'] }}  

---

This email was sent from the "Contact Us TibTop Website."


<x-slot:footer>
    <x-mail::footer>
        &copy; {{ date('Y') }} TibTop. All rights reserved.
        <br>
        Visit us at <a href="{{ config('app.url') }}">{{ config('app.name') }}</a>
    </x-mail::footer>
</x-slot:footer>
</x-mail::layout>
