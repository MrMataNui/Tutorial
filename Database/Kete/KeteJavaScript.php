<script>
	$(function(){
		$('calculate').click(function(){
			names();
			var keteArray = <?php echo json_encode($keteWord); ?>;
			var engArray = <?php echo json_encode($keteMeaning); ?>;

			var user_text = $('#eng_text').val().toUpperCase();
			var split_text = user_text.split(' ');

			var solutionArray = [];
			
			for (var i=0; split_text.length(); i++) {
				if(engArray.indexOf(split_text[i]) >= 0 ) {
					var num = engArray.indexOf(split_text[i]);
					
					solutionArray[i] = keteArray[num];
				}
				getId('user_number').focus();
			}
		});
	});
</script>