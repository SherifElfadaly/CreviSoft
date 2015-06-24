<script type="text/javascript">
	(function ($) {
		
		function newsubscribeObj(){
			var subscribe = {
				init: function (formClass) {
					subscribe.prepare(formClass);
					subscribe.events();
				},

				prepare: function (formClass) {
					subscribe.formClass               = formClass;
					subscribe.errormessageContainer   = $('#subscribeErrormessageContainer');
					subscribe.messageContainer        = $('#subscribeMessageContainer');
					subscribe.messageContainerUl      = subscribe.messageContainer.find("ul");
					subscribe.errormessageContainerUl = subscribe.errormessageContainer.find("ul");
				},

				events: function () {
					$(document).on('submit',subscribe.formClass ,function(e) {
						e.preventDefault();
						subscribe.data = new FormData(this);
						subscribe.url  = $(this).attr('action');
						subscribe.ajaxAction();
					});
				},

				ajaxAction: function () 
				{
					$.ajax({
						url         : subscribe.url,
						data        : subscribe.data,
						type        : 'POST',
						processData : false,
						contentType : false,
						success: function(data)
						{
							subscribe.messageContainer.removeClass('hidden');
							subscribe.messageContainer.show();
							subscribe.messageContainerUl.find("li").remove();

							subscribe.messageContainerUl.append('<li>' . trans('crevisoft::master.subscribeMessage') }} . '</li>')

							setTimeout(function() {
								subscribe.messageContainer.fadeOut();
								subscribe.messageContainer.addClass('hidden');
								subscribe.messageContainerUl.find("li").remove();
							}, 5000);
						},
						error: function(data, error, errorThrown)
						{
							subscribe.errormessageContainer.removeClass('hidden');
							subscribe.errormessageContainer.show();
							subscribe.errormessageContainerUl.find("li").remove();

							$.each(JSON.parse(data.responseText), function(index, value){
								subscribe.errormessageContainerUl.append('<li>' + value + '</li>')
							});

							setTimeout(function() {
								subscribe.errormessageContainer.fadeOut();
								subscribe.errormessageContainer.addClass('hidden');
								subscribe.errormessageContainerUl.find("li").remove();
							}, 5000);
						}
					});
				}
			}
			return subscribe;
		}
		$(document).ready(function (){

			var subscribe_form =  newsubscribeObj();
			subscribe_form.init(".subscribe_form");

		});
	}(jQuery));
</script>