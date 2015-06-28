<script type="text/javascript">
	(function ($) {
		
		function newcontactObj(){
			var contact = {
				init: function (formClass) {
					contact.prepare(formClass);
					contact.events();
				},

				prepare: function (formClass) {
					contact.formClass               = formClass;
					contact.errormessageContainer   = $('#contactErrormessageContainer');
					contact.messageContainer        = $('#contactMessageContainer');
					contact.messageContainerUl      = contact.messageContainer.find("ul");
					contact.errormessageContainerUl = contact.errormessageContainer.find("ul");
				},

				events: function () {
					$(document).on('submit',contact.formClass ,function(e) {
						e.preventDefault();
						contact.data = new FormData(this);
						contact.url  = $(this).attr('action');
						contact.ajaxAction();
					});
				},

				ajaxAction: function () 
				{
					$.ajax({
						url         : contact.url,
						data        : contact.data,
						type        : 'POST',
						processData : false,
						contentType : false,
						success: function(data)
						{
							contact.messageContainer.removeClass('hidden');
							contact.messageContainer.show();
							contact.messageContainerUl.find("li").remove();

							contact.messageContainerUl.append('<li> {{ trans('crevisoft::master.emailSuccess') }} </li>')

							setTimeout(function() {
								contact.messageContainer.fadeOut();
								contact.messageContainer.addClass('hidden');
								contact.messageContainerUl.find("li").remove();
							}, 5000);
						},
						error: function(data, error, errorThrown)
						{
							console.log(data.responseText);
							contact.errormessageContainer.removeClass('hidden');
							contact.errormessageContainer.show();
							contact.errormessageContainerUl.find("li").remove();

							$.each(JSON.parse(data.responseText), function(index, value){
								contact.errormessageContainerUl.append('<li>' + value + '</li>')
							});

							setTimeout(function() {
								contact.errormessageContainer.fadeOut();
								contact.errormessageContainer.addClass('hidden');
								contact.errormessageContainerUl.find("li").remove();
							}, 5000);
						}
					});
				}
			}
			return contact;
		}
		$(document).ready(function (){

			var contact_form =  newcontactObj();
			contact_form.init(".contact_form");

		});
	}(jQuery));
</script>