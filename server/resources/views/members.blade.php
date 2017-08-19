@extends('layouts.app')
@section('content')

<div class="panel-body">
    <!--バリデーションエラーの表示に利用-->
    @include('common.errors')
    <!--バリデーションエラーの表示に利用-->   
    
    <!--登録フォーム-->
    <form action="{{url('members'}}"method="POST" class="form-horizontal">
        {{csrf_field()}}
        <!--名前-->      
        <div class="form-group">
            <label for="member" class="col-sm-3control-label">Member</label>
            <div class="col-sm-6">
                <input type="text" name="item_name" id="member-name" class="form-control">
            </div>
        </div>
        <!--メンバー登録ボタン-->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i>Save
                </button>
            </div>
        </div>
        
    </form>
    
</div>

<!--member すでに登録されているメンバーのリスト-->
@endsection