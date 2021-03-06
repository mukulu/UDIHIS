<div style="width:800px; margin:20px; font-size: 17px">
	<div class="pull-left" style="width:400px; ">
		<ul>
			<li style="list-style: none">File Number:  {{ $patient->filenumber}}</li>
			<li style="list-style: none">First Name:    {{ $patient->firstname}}</li>
			<li style="list-style: none">Last Name :    {{ $patient->lastname}}</li>
			<li style="list-style: none">Payment Type:   {{ $patient->paymenttype}}</li>
			<li style="list-style: none">Blood Group :   {{ $patient1->bloodgroup}}</li>
			
		</ul>
	</div>
	
	<div class="pull-right" style="width:400px">
 		<ul>
			<li style="list-style: none">Rhesus:   {{ $patient->rhesus}}</li>
			<li style="list-style: none">Birth Date:   {{ $patient->birth}}</li>
			<li style="list-style: none">Weight:   {{ $patient1->weight}}</li>
			<li style="list-style: none">Allergy:   {{ $patient1->allergy}}</li>
			<li style="list-style: none">Gender: {{ $patient->gender}} <input id="pid" type="hidden" value="{{$patient->id}}"/></li>
			
		</ul>
	</div>

	<div style="clear:both" style="width:400px; margin: 40px">
		<label class="control-label" for="">Consultation Notes</label>
	<textarea rows="2" id="consultNotes" style="width:600px;" class="form-control" name="consultation"></textarea>	
	</div>	
</div>

<script type="text/javascript">
				var timeoutId;
				$('#consultNotes').on('input propertychange', function() {
				    console.log('Textarea Change');

				    clearTimeout(timeoutId);
				    timeoutId = setTimeout(function() {
				        // Runs 1 second (1000 ms) after the last change    
				        saveToDB();
				    }, 1000);
				});

				function saveToDB()
				{
				     
					var conNotes = $('#consultNotes').val();
					var pid      = $('#pid').val();
					$.post('consultation/autosave', {cN:conNotes,pid:pid}, function(data){

					}); 
				}

</script>