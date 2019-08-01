@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.book.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.book.fields.name')</th>
                            <td field-key='name'>{{ $book->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.book.fields.category')</th>
                            <td field-key='category'>
                                @foreach ($book->category as $singleCategory)
                                    <span class="label label-info label-many">{{ $singleCategory->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('global.book.fields.image')</th>
                            <td field-key='image'>@if($book->image)<a href="{{ asset(env('UPLOAD_PATH').'/' . $book->image) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $book->image) }}"/></a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.books.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop


