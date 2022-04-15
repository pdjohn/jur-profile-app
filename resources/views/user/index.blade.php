@extends('layouts.master')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{__('User List')}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('user.create') }}" class="btn btn-success float-right"><i class="fas fa-plus"></i>&nbsp;
                            {{__('Add')}}</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="indexTable" class="table table-bordered table-striped">

                                    <thead>

                                    <tr class="text-center">
                                        <th>{{__('SL')}}</th>
                                        <th>{{__('Name')}}</th>
                                        <th>{{__('Email')}}</th>
                                        <th>{{__('Action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contentData as $item)
                                        <tr>
                                            <td class="text-center">{{ ++$loop->index}}</td>
                                            <td class="text-center">{{ ucwords($item->full_name) }}</td>
                                            <td class="text-center">{{ $item->email }}</td>
{{--                                            <td>{{ ucwords(getRoleName($item))}}</td>--}}
                                            <td class="text-center">
                                                {{--<a href="{{route('employee.show', $item->slug)}}"--}}
                                                   {{--class="btn btn-info mb-2"><i--}}
                                                        {{--class="fas fa-info"></i>&nbsp; {{__('Info')}}</a>--}}

                                                <a href="{{ route('user.edit', $item->id) }}"
                                                   class="btn btn-primary mb-2"><i class="fas fa-edit"></i>&nbsp;
                                                    {{__('Edit')}}</a>

                                                {{--<a href="{{ route('employee.delete', $item->slug) }}"--}}
                                                   {{--class="btn btn-danger mb-2"><i class="fas fa-trash"></i>&nbsp;--}}
                                                    {{--{{__('Delete')}}</a>--}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                                <div class="mt-1 pagination">
                                    {{--{{ $contentData->links() }}--}}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
@push('customScripts')
    <script>

    </script>
@endpush

