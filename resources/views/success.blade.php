@if(session()->has('success')){
    <div style="background-color: green;text-align:center;height:63px;width:400px;margin-left:32%;">
        {{ session('success') }}
    </div>
}
@endif
