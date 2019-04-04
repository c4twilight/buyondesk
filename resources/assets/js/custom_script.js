		/* ajax code for supporting laravel*/
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			        }
		});
		/**/

		$('#university_name').select2({
			placeholder: 'Select University Name'
		});

		$('#college_name').select2({
			placeholder: 'Select College Name'
		});

		$('#degree_name_for_mobile_view').select2({
			placeholder: 'Please select Category'
		});

		$('#degree_name').select2({
			placeholder: 'Please Select a Program'
		});


		$('#book').click(function(){
			$('#author').show();
		});

		$('#other').click(function(){
			$('#author').css('display', 'none');;
		});

	/********For ajax*****/
		$(document).ready(function(){
			$('#university_name').change(function(){
				$('#college_name_id').show();
				var name = $(this).val();
				$.post('ajaxRequest',{key:name},function(data){
					jQuery.each(data,function(index , value){
						var $val = "<option value="+ "'" +value+ "'" +">"+value+"</option>";
						$('#college_name').append($val);
					});
				});
			});
		});

		$(document).ready(function(){
			$('#university_name').change(function(){
				$('#college_name').empty();
			});
		});

	/******* on scroll down******/
$(document).ready(function () {
  
  'use strict';
  
   var c, currentScrollTop = 0,
       navbar = $('.header');

   $(window).scroll(function () {
      var a = $(window).scrollTop();
      var b = navbar.height();
     
      currentScrollTop = a;
     
      if (c < currentScrollTop && a > b + b) {
        navbar.addClass("scrollUp");
      } else if (c > currentScrollTop && !(a <= b)) {
        navbar.removeClass("scrollUp");
      }
      c = currentScrollTop;
  });
  
});