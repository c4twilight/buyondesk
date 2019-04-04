
@component('mail::message')


Hello <?php echo $seller_name ?>,

	 {{$user_name}}  is interested in an item that you posted on buyondesk.com


<?php
if ($message) {
	echo "Here is $user_name's message,
	 <p>$message</p>";
}
?>

<?php
if ($contact_no) {
	echo "You can contact $user_name,
	$user_name's contact no. or whatsapp no. is $contact_no";
}

?>


Thankyou,<br>
	buyondesk.com

@component('mail::button', ['url' => ''])
	Sell & Buy
@endcomponent


<!-- {{ config('app.name') }} -->
@endcomponent