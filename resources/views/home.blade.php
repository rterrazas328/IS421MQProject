@extends('myapp')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						<form action="home" method="post" enctype="multipart/form-data" autocomplete="on" role="form">
							<!--<div class="form-group">
								<label class="control-label" for="MP4file">Upload MP4 File:</label>
								<input class="form-control" id="MP4file" type="file" name="MP4" accept="video/*" />
							</div>-->
							<div class="col-md-4 col-md-offset-4">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input class="form-control" type="submit" name="UploadFile" value="PerformTask"/>
							</div>

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection