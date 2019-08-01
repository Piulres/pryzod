@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.book.title')</h3>
    
    {!! Form::model($book, ['method' => 'PUT', 'route' => ['admin.books.update', $book->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('global.book.fields.name').'', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Insert name']) !!}
                    <p class="help-block">Insert name</p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('category', trans('global.book.fields.category').'', ['class' => 'control-label']) !!}
                    <button type="button" class="btn btn-primary btn-xs" id="selectbtn-category">
                        {{ trans('global.app_select_all') }}
                    </button>
                    <button type="button" class="btn btn-primary btn-xs" id="deselectbtn-category">
                        {{ trans('global.app_deselect_all') }}
                    </button>
                    {!! Form::select('category[]', $categories, old('category') ? old('category') : $book->category->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple', 'id' => 'selectall-category' ]) !!}
                    <p class="help-block">Insert a category</p>
                    @if($errors->has('category'))
                        <p class="help-block">
                            {{ $errors->first('category') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($book->image)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$book->image) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$book->image) }}"></a>
                    @endif
                    {!! Form::label('image', trans('global.book.fields.image').'', ['class' => 'control-label']) !!}
                    {!! Form::file('image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('image_max_size', 4) !!}
                    {!! Form::hidden('image_max_width', 4096) !!}
                    {!! Form::hidden('image_max_height', 4096) !!}
                    <p class="help-block">Insert image</p>
                    @if($errors->has('image'))
                        <p class="help-block">
                            {{ $errors->first('image') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent

    <script>
        $("#selectbtn-category").click(function(){
            $("#selectall-category > option").prop("selected","selected");
            $("#selectall-category").trigger("change");
        });
        $("#deselectbtn-category").click(function(){
            $("#selectall-category > option").prop("selected","");
            $("#selectall-category").trigger("change");
        });
    </script>
@stop