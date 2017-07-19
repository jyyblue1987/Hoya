@extends('users.layout')
@section('content')

<?php

use App\Modules\Functions;

if( $error === 'SUCCESS' )
    Functions::alertSuccessMessage('');
else if( $error !== '' )
    Functions::alertErrorMessage ($error);

?>

<div id="main_column" class="clear">
	<div class="clear mainbox-title-container">
			<h1 class="mainbox-title float-left">
				Update a Career information
			</h1>
  			
	</div>

	<div class="mainbox-body" >

<!--		<script type="text/javascript" src="/js/tabs.js"></script>-->

		<div class="cm-tabs-content">
			<?php 
				if($mode === 'create')
					$actionurl = '/admin/career_item'; 
				else
					$actionurl = '/admin/update_career_item/'.$adver->id;
			?>
			<form name="profile_form" action={{$actionurl}} method="post" class="cm-form-highlight">
				<input type="hidden" name="region_data[mode]" value="" />

				<div id="content_general">
					<fieldset>
						<h2 class="subheader">
							Career information
						</h2>

						<div class="form-field">
							<label for="regionname" class="cm-required">Title:</label>
							<input type="text" id="regionname" name="region_data[title]" class="input-text" size="36" maxlength="50" value="{{$adver->title}}" />
						</div>
						<div class="form-field">
							<label for="regionname" class="cm-required">Description:</label>
							<textarea  id="desc" name="region_data[desc]" name="area2" class="input-textarea-long" cols="55" rows="4">{{$adver->descript}}</textarea>
						</div>

						<div class="form-field" >
							<label for="regionname" class="cm-required">Sequence:</label>
							<input type="text" id="sequence" name="region_data[sequence]" class="input-text" size="10" maxlength="50" value="{{$adver->sequence}}" />
						</div>

					</fieldset>

				</div>

				<?php 
					if($mode === 'create')
						$label = 'Create';
					else
						$label = 'Save';
				?>
				<div class="buttons-container buttons-bg cm-toggle-button">
					<span  class="submit-button cm-button-main ">
						<input   type="submit" name="dispatch[profiles.update]" value="{{$label}}" />
					</span>
					&nbsp;&nbsp;&nbsp;
					<span class="cm-button-main cm-process-items">
						<input type="button" onclick="location.href='/admin/career';"  value="Cancel" />
					</span>
				</div>


			</form>
		</div>
	</div>
</div>

<script type='text/javascript' src='/js/nicEdit.js'></script>
<script>
	
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
	
	function onSubmit(){
		var nicE = new nicEditors.findEditor('desc');
		var question = nicE.getContent();
		$("#desc").val(question );
		//alert(question );
		document.forms[''].submit();
	}
</script>

@stop
