<!--指定繼承 layout.master 母模板-->
@extends('layout.master')

<!--傳送資料到母模板，指定 title 變更為 $title -->
@section('title',$title)

<!--傳送資料到母模板，指定 content 變更為 包覆的內容 -->
@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
<!--載入錯誤訊息模組 components.socialButtons -->
@include('components.validationErrorMessage')

<!--載入社交模組 components.socialButtons -->
@include('components.socialButtons')



        <form action="#" method="post">
            <label>
                Email : 
                <input type="text" 
                       name="email" 
                       placeholder="Email"
                       value="{{ old('email') }}"
                >
            </label>

            <label>
                密碼 : 
                <input type="password" 
                       name="password"
                       placeholder="密碼"
                       value="{{ old('password') }}" >
            </label>
            
            <button type="submit">登入</button>

            <!--加入token隱藏欄位 -->
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <!--產生token隱藏欄位 -->
            {!! csrf_field() !!}

          
        </form>


    </div>
@endsection