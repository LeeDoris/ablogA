@extends('layouts.admin')
@section('content')
    <div class="centercontent">
        <div class="pageheader notab">
            <h1 class="pagetitle">Change Password</h1>
        </div>


        <div id="contentwrapper" class="contentwrapper">
            @if(count($errors)>0)

                @if(is_object($errors))
                    @foreach($errors->all() as $error)
                        <div class="contenttitle2">
                            <h3>{{$error}}</h3>
                        </div>
                    @endforeach
                @else
                    <div class="contenttitle2">
                        <h3>{{$error}}</h3>
                    </div>
                @endif
            @endif


            <div id="basicform" class="subcontent" >

                <form class="stdform" method="post" action="{{url('admin/pass')}}">

                    {{ csrf_field() }}

                    <p>
                        <label>原始密码</label>
                        <span class="field{{ $errors->has('password_o') ? ' has-error' : '' }}"><input type="password" name="password_o"  class="longinput" /></span>
                    </p>

                    <p>
                        <label>新密码</label>
                        <span class="field{{ $errors->has('password') ? ' has-error' : '' }}"><input type="password" name="password"  class="longinput" /></span>
                    </p>

                    <p>
                        <label>确认新密码</label>
                        <span class="field{{ $errors->has('password_confirmation') ? ' has-error' : '' }}"><input type="password" name="password_confirmation"  class="longinput" /></span>
                    </p>

                    <br />

                    <p class="stdformbutton" style="margin-left: 0px;">
                        <button class="submit radius2" type="submit">Submit</button>
                    </p>
                </form>

            </div>

        </div>

    </div>
@endsection