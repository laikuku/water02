<?php
/**
 * Created by PhpStorm.
 * User: mdu
 * Date: 2017/5/2
 * Time: 下午 02:22
 */
?>
@extends('layouts.app')

@section('content')
<html lang="utf-8">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/Content/AssetsBS3/img/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/Content/AssetsBS3/examples/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="~/Scripts/AssetsBS3/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/Scripts/AssetsBS3/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3>
                測試練習
            </h3>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        編號
                    </th>
                    <th>
                        名字
                    </th>
                    <th>
                        資料A
                    </th>
                    <th>
                        資料B
                    </th>
                    <th>
                        資料C
                    </th>
                    <th>
                        資料D
                    </th>
                </tr>
                </thead>
                <tbody>

                @foreach($tasks as $task)


                    <tr>
                        <td>
                            {{$task->id}}
                        </td>
                        <td>
                            {{$task->id}}
                        </td>
                        <td>
                            {{$task->name}}
                        </td>
                        <td>
                            {{$task->data1}}
                        </td>
                        <td>
                            {{$task->data2}}
                        </td>
                        <td>
                            {{$task->data3}}
                        </td>
                        <td>
                            {{$task->data4}}
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('editContact', $task->id) }}">編輯</a>|
                            <a class="btn btn-primary" href="{{ route('deleteContact', $task->id) }}">刪除</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
                <a class="btn btn-primary" href="{{ route('addContact')}}">新增</a>
        </div>
    </div>
</div>
@endsection