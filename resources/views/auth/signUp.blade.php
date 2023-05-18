<!--指定繼承 layout.master 母模板-->
@extends('layout.master')

<!--傳送資料到母模板，指定 title 變更為 $title -->
@section('title',$title)

<!--傳送資料到母模板，指定 content 變更為 包覆的內容 -->
@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>

<!--載入社交模組 components.socialButtons -->
@include('components.socialButtons')

        <form action="#" method="post">
            <label>
                暱稱 : 
                <input type="text" neme="nickname" placeholder="暱稱">
            </label>
            <label>
                Email : 
                <input type="text" neme="email" placeholder="Email">
            </label>
            <label>
                密碼 : 
                <input type="password" neme="password" >
            </label>
            <label>
                確認密碼 : 
                <input type="password" neme="password_confirmation" >
            </label>
            <label>
                帳號類型 : 
                <select name="type">
                    <option value="G">一般會員</option>
                    <option value="A">管理者</option>
                </select>
            </label>

            <!--加入token隱藏欄位 -->
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <!--產生token隱藏欄位 -->
            {!! csrf_field() !!}

            <button type="submit">註冊</button>
        </form>

    </div>
@endsection