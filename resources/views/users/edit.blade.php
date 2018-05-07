@extends('layouts.app')

@section('content')

  <div class="content">
								<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1>
                  <a href="/users">
                    <i class='fa fa-table'></i>
                    {{ $title }}
                  </a>
                </h1>
            		<!-- <h3>Basic & Simple Sortable Tables</h3>            	 -->
        </div>
				<div class="row">
					<div class="col-sm-12 portlets">
						<div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Editar</strong> </h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							@if(count(session('errors')) > 0)
									<div class="alert alert-danger">
											<ul>
													@foreach (session('errors') as $error)
															<li>{{ $error }}</li>
													@endforeach
											</ul>
									</div>
							@endif
              <div class="widget-content padding">
  								<div id="basic-form">
										{{ Form::open(array('url' => URL::to('users/' . $user->id), 'method' => 'PUT', 'class' => 'form-group', 'role' => 'form')) }}
                    <div class="form-group">
                         <label for="exampleInputEmail1">Name</label>
                         {{ Form::text('user', $user->name, array('class' => 'form-control', 'id' => 'name', 'name' => 'name', 'class' => 'form-control input-lg', 'placeholder' => 'Ingrese Nombre')) }}
                    </div>

                    <div class="form-group">
                         <label for="exampleInputEmail1">Email</label>
                         {{ Form::text('user', $user->email, array('class' => 'form-control', 'id' => 'email', 'name' => 'email', 'class' => 'form-control input-lg', 'placeholder' => 'Ingrese Email')) }}
                    </div>

                    <div class="form-group">
                      <label for="input-text" class="col-sm-2 control-label">Memo</label>
                      <div class="col-sm-10">
                        <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="recibe_memo" id="recibe_memo"
                        @if ($user->recibe_memo)
                          checked
                        @endif
                        />
                      </div>
                    </div>
  									  {{ Form::submit('Modificar', array('class' => 'btn btn-primary')) }}
  									{{ Form::close() }}
  								</div>
                </div>
						</div>
					</div>
				</div>
			</div>

@stop
