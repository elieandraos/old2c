<!-- Panel start -->
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Required Info</h3>
	</div>
	<div class="panel-body">
		@include('admin.form-errors')
		<div class="form-group @if($errors->has('name')) has-error @endif">
			{!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('name', null, ['class' => 'form-control slug-target']) !!}
            </div>
        </div>

        <div class="form-group @if($errors->has('players')) has-error @endif">
            {!! Form::label('players_list', 'Add players', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::select('players_list[]', $players, null, ['class' => 'form-control slug-target', 
                'id' => 'players_list', 'multiple']) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-1  col-sm-push-5">
                <a href="{{ route('admin.teams.index') }}">
                    <button type="button" class="btn btn-default btn-trans btn-full-width" data-toggle="tooltip" data-placement="top" title="Back to teams list">
                        <i class="fa fa-mail-reply"></i> &nbsp; Back
                    </button>
                </a>
            </div>
            <div class="col-sm-1 col-sm-push-5">
                {!! Form::submit('Save', ['class' => 'btn btn-primary btn-trans form-control']) !!}
            </div>
        </div>     
	</div>
</div>
<!-- Panel end -->