@extends('layouts.app')

@section('content')

<div class="panel-body">
    <!--バリデーションエラーの表示に利用-->
       @include('common.errors')
    <!--バリデーションエラーの表示に利用-->   
    
    <!--登録フォーム-->

               <form action="{{ url('members') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <!--名前-->      
            <div class="form-group">
                <label for="member" class="col-sm-3 control-label">Member</label>
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
            <!--現在のメンバー-->
            @if (count($members) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        現在のメンバー
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <!--テーブルヘッダ-->
                            <thead>
                                <th>メンバー一覧</th>
                                <th>&nbsp;</th>
                            </thead>
                            <!--テーブル本体-->
                            <tbody>
                                @foreach($members as $member)
                                    <tr>
                                        <!--名前-->
                                        <td class="table-text">
                                            <div>{{ $member->item_name}}</div>
                                        </td>
                                        
                                        <!--削除ボタン-->
                                        <td>
                                            <form action="{{ url('member/' .$member->id) }}" method="POST">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>削除
                                                </button>
                                            </form>
                                        </td>
                                       
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </form>
    
</div>

<!--member すでに登録されているメンバーのリスト-->
@endsection