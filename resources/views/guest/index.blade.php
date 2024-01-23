@extends('layouts.app')

@section('template_title')
Guest
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Guest') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('guests.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <form action="{{ route('guest.searchByName') }}" method="GET" class="mb-3">
                        <div class="input-group">
                            <input type="text" class="search" name="search" placeholder="Buscar por nombre">
                            <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                        </div>
                    </form>
                </div>

                <div class="card-body">
                    <form action="/guest/filter" method="GET">
                        <div class="form-group">
                            <label for="from">Desde:</label>
                            <input type="date" id="from" name="from" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="to">Hasta:</label>
                            <input type="date" id="to" name="to" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </form>

                </div>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Actions</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guests as $guest)
                                <tr>


                                    <td>{{ $guest->name }}</td>
                                    <td>{{ $guest->email }}</td>
                                    <td>{{ $guest->birthday }}</td>

                                    <td>
                                        <form action="{{ route('guests.destroy',$guest->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('guests.show',$guest->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('guests.edit',$guest->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection