@component('mail::message')


Hello {{$user->name}},

First off, I’d like to extend a warm welcome and ‘thank you’ for subscribing to the example.com.
I’m very excited to have you as a part of the example.com community.
Also feel free to shoot us any question you have  and we’ll get back to you ASAP!
Super excited to start this new journey together.

Also Let's get social...

Take two-seconds and Join us on
	FaceBook: https://fb.com/mkvmridul
		 or on
	Twitter https://twitter.com/Mkvmridul

Also You can join my personal FaceBook page: https://fb.com/mridulmkv"

Best,<br>
	Mridul

@component('mail::button', ['url' => ''])
	Sell & Buy
@endcomponent


<!-- {{ config('app.name') }} -->
@endcomponent