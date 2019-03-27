@extends('layouts.nobats')
<?php
$count=count($reception);
$limit_table=3;
$limit_table++;
if($count=='0')
    {
        $first_nobat_has_not_content=1;
        $table1_has_not_content=1;
    }
elseif($count=='1')
    {
        $table1_has_not_content=1;
    }
elseif($count<=$limit_table)
    {
        $limit_table=$count;
    }
else
    {
      $table2_has_content=1;
    }
?>
@if(!isset($first_nobat_has_not_content))
@section('first_nobat')
    {{$reception['0']->patient->name}}
    {{$reception['0']->patient->family}}
@endsection
@endif

@if(!isset($table1_has_not_content))
@section('table1')
<div class="col-md-6">
    <div class="card mb-6 shadow-sm">
        <table class="table table-hover">
            <thead>
            <tr class="bg-dark">
                <th>نوبت</th>
                <th>کد پذیرش</th>
                <th>نام بیمار</th>
                <th>زمان تقریبی نوبت</th>
            </tr>
            </thead>
            <tbody>
            @for ($i = 1; $i < $limit_table; $i++)
                    <tr>
                        <td>{{$i+1}}
                        </td>
                        <td>{{$reception[$i]->receptioncode}}
                        </td>
                        <td>
                            {{$reception[$i]->patient->name}}
                            {{$reception[$i]->patient->family}}
                        </td>
                        <td>9:25</td>
                    </tr>
             @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection
@endif

@if(isset($table2_has_content))
@section('table2')
<div class="col-md-6">
    <div class="card mb-6 shadow-sm">
        <table class="table table-hover">
            <thead>
            <tr class="bg-dark">
                <th>ردیف</th>
                <th>کد پذیرش</th>
                <th>نام بیمار</th>
                <th>زمان تقریبی نوبت</th>
            </tr>
            </thead>
            <tbody>
            @for ($i = $limit_table; $i < $count; $i++)
                <tr>
                    <td>{{$i+1}}
                    </td>
                    <td>{{$reception[$i]->receptioncode}}
                    </td>
                    <td>
                        {{$reception[$i]->patient->name}}
                        {{$reception[$i]->patient->family}}
                    </td>
                    <td>9:25</td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection
@endif