<?php
/**
 * Created by PhpStorm.
 * User: mdu
 * Date: 2017/5/12
 * Time: 上午 11:09
 */

?>
@extends('layouts.app')

@section('content')
    <html lang="utf-8">
    <head>
        <meta charset="utf-8">

        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="/js/video.js"></script>
        <![endif]-->
        <style>
        ul.playlist {
        margin: 0;
        padding: 0;
        list-style: none;
        width: 260px;
        float: left;
        }
        ul.playlist li {
        margin: 0 3px;
        float: left;
        }
        ul.playlist li a img {
        border: 0;
        vertical-align: middle;
        }

        .tv {
        background: #666;
        padding: 10px;
        width: 740px;
        height: 360px;
        }
        .video {
        float: left;
        width: 480px;
        height: 360px;
        }
        </style>
    </head>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>
                    Video
                </h3>
                <div class="tv">
                    <div class="video"></div>
                    <ul class="playlist">

                    @foreach($song as $songs)
                        <li>{{$songs->id}}||{{$songs->name}}<a href="{{$songs->url}}">{{$songs->name}}</a><a class="btn btn-primary" href="{{ route('delVideo_id',$songs->id)}}">刪除</a></li>

                    @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection