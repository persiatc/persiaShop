@if($errors->any())
<div class="c-message-light c-message-light--info" style="background-color: #ca4949;color:white">
    @foreach ($errors->all() as $error)
    <div class="c-message-light__justify">
        <p class="c-message-light--text">
        <div>{{ $error }}</div>
        </p>
    </div>
    @endforeach
</div>
@endif

@if($message = Session::get('success'))
<div class="c-message-light c-message-light--info" style="background-color: #b1ee99a8;color:white">
    <div class="c-message-light__justify">
        <p class="c-message-light--text">

            <div>{{ $message }}</div>

        </p>
        {{-- <a href="#" class="btn-light btn-light--gray btn-light--verify">تایید شماره همراه</a> --}}
    </div>
</div>
@endif
