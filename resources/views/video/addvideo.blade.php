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
    <form id="contact-form" method="POST" action="/videoCreate"  role="form">
        {{ csrf_field() }}
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3>
                        新增video
                    </h3>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>
                                名字
                            </th>
                            <th>
                                URL
                            </th>
                            <th>
                                Tag
                            </th>
                            <th>
                                Tag
                            </th>

                        </tr>
                        </thead>
                        <tbody>




                        <tr>
                            <td>
                                <input id="form_name" type="text" name="name" class="form-control" value=" ">
                            </td>
                            <td>
                                <input id="form_url" type="text" name="url" class="form-control" value=" ">
                            </td>
                            <td>
                                <input id="form_tag1" type="text" name="tag1" class="form-control" value=" ">
                            </td>
                            <td>
                                <input id="form_tag2" type="text" name="tag2" class="form-control" value=" ">
                            </td>
                            <td>
                                <input type="submit" class="btn btn-success btn-send" value="送出">
                            </td>
                        </tr>



                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </form>
@endsection