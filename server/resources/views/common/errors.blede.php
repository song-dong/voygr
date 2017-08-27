@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>入力した文字を修正してください</strong>
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @end foreach
        </ul>
        
    </div>
@end if