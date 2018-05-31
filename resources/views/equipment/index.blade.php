@extends ('layouts.app') 
@section ('content')

<div class="container">
    <!-- breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Equipment</li>
    </ol>

    <!-- content -->
    <h1>Equipment</h1>

    <hr />

    <!-- search -->

    {{ Form::open(['action' => 'EquipmentController@filter']) }}

    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." name="n">
        <span class="input-group-append">
            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
        </span>
    </div>

    {{ Form::close() }}

    <hr />

    <table class="table table-sm">
            <thead>
                <th>Name</th>
                <th class="text-center">LV</th>
                <th class="text-center">STR</th>
                <th class="text-center">AGI</th>
                <th class="text-center">VIT</th>
                <th class="text-center">WIS</th>
                <th class="text-center">WIL</th>
            </thead>
            <tbody>
                @foreach($query as $equipment)
                <tr>
                    <td>{{ $equipment->name }}</td>
                    <td class="text-center">{!! $equipment->lv === 0 ? "-" : $equipment->lv !!}</td>
                    <td class="text-center">{!! $equipment->str === 0 ? "-" : $equipment->str !!}</td>
                    <td class="text-center">{!! $equipment->agi === 0 ? "-" : $equipment->agi !!}</td>
                    <td class="text-center">{!! $equipment->vit === 0 ? "-" : $equipment->vit !!}</td>
                    <td class="text-center">{!! $equipment->wis === 0 ? "-" : $equipment->wis !!}</td>
                    <td class="text-center">{!! $equipment->wil === 0 ? "-" : $equipment->wil !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection